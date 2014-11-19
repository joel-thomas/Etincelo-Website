(function($){

// Click sur article des news
  $(document).on("click", ".a_news", function(event){
    event.preventDefault();
    var id_news = $(this).data("id");
    $.post("js/ajax/detail_news.php",
     { id: id_news },
     function(data){
      $(".title_news_modal").empty().text(data.title);
      $(".news_suiv_prev").data("id", data.id);
      $(".headpicture_news_modal img").attr("src", "picture/news/"+data.name_picture);
      $(".date_news_modal").empty().text(data.date);
      $(".content_news_modal").empty().html(data.content);
      console.log(data);
    $(".news_modal_all").show();

    $(document).keydown(function(e){
      if (e.keyCode == 27) {

          $(".news_modal_all").hide();
      }
    });
    $(document).on("click", ".news_close_cross", function(){
      $(".news_modal_all").hide();
    });

     }, "json");


  });

// Click sur precedente news

$(document).on("click",".prev_news_modal", function(){
  var id_news = $(".prev_news_modal").parents(".news_suiv_prev").data("id");
  $.post("js/ajax/prev_news.php",
     { id: id_news },
     function(data){
      console.log(data);
      $(".title_news_modal").empty().text(data.title);
      $(".news_suiv_prev").data("id", data.id);
      $(".headpicture_news_modal img").attr("src", "picture/news/"+data.name_picture);
      $(".date_news_modal").empty().text(data.date);
      $(".content_news_modal").empty().html(data.content);
     }, "json");
});

// Click sur suivant news

$(document).on("click",".suiv_news_modal", function(){
  var id_news = $(".suiv_news_modal").parents(".news_suiv_prev").data("id");
  $.post("js/ajax/suiv_news.php",
     { id: id_news },
     function(data){
      console.log(data);
      $(".title_news_modal").empty().text(data.title);
      $(".news_suiv_prev").data("id", data.id);
      $(".headpicture_news_modal img").attr("src", "picture/news/"+data.name_picture);
      $(".date_news_modal").empty().text(data.date);
      $(".content_news_modal").empty().html(data.content);
     }, "json");
});

// AJAX pour pagination
$(document).on("click",".pagination_new_int",function(){
  var num_int = $(this).text();
  $(".pagination_new_int").css({ opacity : "0.8" });
  $(this).css({ opacity : "1" });

  if ($.isNumeric(num_int)) {
    $.get("js/ajax/new.php",
      { new: num_int },
      function(data){
        $(".a_news").parent().empty().prepend(data);
      }
    );
  };
});

// Carousel Header
var i = -1;
  $(".carousel_slide").each(function(){
    i += 1;
  });
$(document).on("click", ".carousel_prev", function(){
  var this_slide = $(".carousel_slide").eq(i);
  i--;
  if($(".carousel_slide").eq(i).length != 1){

     i += 2;
    $(this_slide).css('display','none');
    $(".carousel_slide").eq(i).css('display','block');
     // console.log("il y a plus de slide");

  }else{
    // console.log("index : "+i+"prev");
    $(this_slide).css('display','none');
    $(".carousel_slide").eq(i).css('display','block');
  }

});
$(document).on("click", ".carousel_next", function(){
  var this_slide = $(".carousel_slide").eq(i);
  i++;
  if($(".carousel_slide").eq(i).length != 1){
    i -= 2;
    $(this_slide).css('display','none');
    $(".carousel_slide").eq(i).css('display','block');
    // console.log("il y a plus de slide");
  }else{
    // console.log("index : "+i+"after");
    $(this_slide).css('display','none');
    $(".carousel_slide").eq(i).css('display','block');
  }

});
  i = null;


function initialize() {
  var myLatlng = new google.maps.LatLng(47.064681, -0.8938842);
  var mapOptions = {
    zoom: 15,
    center: myLatlng
  };

  var map = new google.maps.Map(document.getElementById('boutique_modal_map_left'), mapOptions);
  var marker = new google.maps.Marker({
    position: myLatlng,
    map: map,
    title:"Hello World!"
});
}

function initialize_r() {
   var myLatlng_r = new google.maps.LatLng(50.843154, 4.342670);
   var mapOptions_r = {
     zoom: 15,
     center: myLatlng_r
   };
   var map_r = new google.maps.Map(document.getElementById('boutique_modal_map_right'), mapOptions_r);
   var marker = new google.maps.Marker({
    position: myLatlng_r,
    map: map_r,
    title:"Hello World!"
});

 }
  // Click sur icon info boutique

  $(document).on("click", ".boutique_icon_info", function(){
    $(this).after("<div class=\"background_blur\"></div>");
    $(".boutique_info_modal").show();

 initialize();
 initialize_r();

       // Click sur echap boite boutique
      $(document).keydown(function(e){
        if (e.keyCode == 27) {

          $(".background_blur").remove();
          $(".boutique_info_modal").hide();
          $("#boutique_modal_map_left").empty();
          $("#boutique_modal_map_right").empty();

        }
      });
      $(document).on("click", ".boutique_close_cross", function(){
        $(".background_blur").remove();
        $(".boutique_info_modal").hide();
        $("#boutique_modal_map_left").empty();
        $("#boutique_modal_map_right").empty();
        console.log("bug");
      });
        return false;
  });

  // Click submit contact

  $(document).on("click", ".contact_submit", function(){
    var name_form = $(".contact_name").val();
    var email_form = $(".contact_email").val();
    var msg_form = $("#contact_content").val();

    $.post("js/ajax/send_mail.php",
   { name: name_form, email: email_form, msg: msg_form },
   function(data){
    $(".contact_return_msg").remove();
     $(".contact_form").prepend("<div class=\"contact_return_msg\">"+data.msg+"</div>")
   },"json");
    return false;
  });


})(jQuery);