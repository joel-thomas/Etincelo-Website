$(function() {

// La pagination des news

    $(document).on("click",".pagination_admin_int",function(){
      var num_int = $(this).text();
      $(".pagination_admin_int").css({ opacity : "0.8" });
      $(this).css({ opacity : "1" });
        $.get("ajax/ajax_pagination_news.php",
          { new: num_int },
          function(data){
            $("#table_news tbody").empty().prepend(data);
          });
    });

// Choisir une image

    $(".picture-control").change(function(){
          var value = $(this).val();
          console.log(value);
          $.post("ajax/ajax_preupload_picture.php",
            function(data){
          // $(this).before("<img name='my_im' src='../picture/photo/tmp+" "+'/>");
          console.log(data);
            }
        );
    });

// Rafrachir les photos

    $(document).on("click", ".picture_refresh", function(){
        $.post("ajax/picture_refresh.php",
            function(data){
                $(".picture_img_block").remove();
                $(".picture_existe").append(data);
            }
        );
    });

// Souris qui survole une image

    $(document).on("mouseover",".picture_img_block",function(){
        $(this).find(".picture_img_title").fadeOut("fast");
        $(this).find(".picture_img_blur").fadeIn("fast");

    });

// Souris qui sort d'une image

    $(document).on("mouseleave", ".picture_img_block", function(){
        $(this).find(".picture_img_title").fadeIn("fast");
        $(this).find(".picture_img_blur").fadeOut("fast");
    });

// Click sur "renommer" une image

    $(document).on("click", ".picture_img_blur_renome", function(){
        var id_img = $(this).parent().parent().find(".picture_img").data("id");
        var this_rename_picture = $(this).parent().prev().find(".picture_img_title");
        $(".blur_picture_exist").fadeIn();
            $(".picture_existe").prepend("<div class=\"input_picture_name\"><input type=\"text\" placeholder=\"Nom de la photo\"></div>");
            $(".input_picture_name").fadeIn(function(){
                $(".input_picture_name input").focus();
            });
            $(".input_picture_name input").keypress(function(touche){
                    var appui = touche.which || touche.keyCode;
                    if(appui == 13){
                        var value_input = $(".input_picture_name input").val();
                        console.log(id_img+" et "+value_input);
                        $.post("ajax/picture_new_name.php",
                            { id: id_img, value: value_input },
                            function(data){
                                $(this_rename_picture).empty().text(value_input);
                            });
                        $(".blur_picture_exist").trigger("click");
                    }
                });
    });

// Click sur le fond grisée

    $(document).on("click", ".blur_picture_exist", function(){
        value_input = null;
        id_img = null;
        $(".picture_supp_or_not").fadeOut("fast");
        $(".blur_picture_exist").fadeOut("fast");
        $(".input_picture_name").fadeOut(function(){
            $(this).remove();
        });
    });

// Click sur supprimer

    $(document).on("click", ".picture_img_blur_suppprimer", function(){
        var id_img_supp = $(this).parent().prev().find(".picture_img").data("id");
        var this_picture = $(this).parent().prev().find(".picture_img");
        $(".blur_picture_exist").fadeIn();
        $(".picture_supp_or_not").fadeIn();
        $(document).one("click", ".picture_supp_or_not_yes", function(){
            console.log(id_img_supp);
             $.ajax({
                type: "POST",
                url: "ajax/picture_delete.php",
                data: "id="+id_img_supp,
                success: function(data){

                    $(".blur_picture_exist").trigger("click");
                    $(".picture_refresh").trigger("click");

                }
            });
        });

        $(document).one("click",".picture_supp_or_not_no",function(){
            $(".picture_supp_or_not").fadeOut();
            $(".blur_picture_exist").trigger("click");
        });
    });

});