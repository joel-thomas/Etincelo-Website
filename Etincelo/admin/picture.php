<?php
 require("lib/admin.class.php");
 $etinadmin = new etinadmin();
 include("partials/header.php");
?>
<script>
    var myAwesomeDropzone = document.getElementById("dropzone-picture");
    Dropzone.options.myAwesomeDropzone = {
        maxFilesize: 4,
    };
</script>
<form id="dropzone-picture" action="upload.php" class="dropzone">
    <span class="dropzone_span">Ici glisser vos photo a ajouter !!</span>
    <div class="fallback">
    <input class="dropzone_input" name="file" type="file" multiple />
  </div>
</form>
<div class="picture_existe">
<div class="picture_supp_or_not">
    <p>Etes vous sur de vouloir supprimer ?</p>
    <div class="picture_supp_or_not_btn">
        <span class="picture_supp_or_not_no">Non</span>
        <span class="picture_supp_or_not_yes">Oui</span>
    </div>
</div>
<div class="blur_picture_exist"></div>
    <span class="picture_refresh">
        <img src="img/icon/refresh.png" alt="refresh">
    </span>
    <span class="picture_existe_span">Ici, la liste de toute les photo déja on-line</span>

    <?php

    $fetch_select_picture = $etinadmin->select_picture();

        foreach ($fetch_select_picture as $key => $value) : ?>
            <span class="picture_img_block">
        <div class="picture_all_img">
            <img data-id="<?= $value["id"]; ?>" class="picture_img" src="../picture/photo/<?= $value["name"]; ?>" alt="<?= $value["title"]; ?>">
            <span class="picture_img_title"><?= $value["title"]; ?></span>
        </div>
        <span class="picture_img_blur">
            <span class="picture_img_blur_renome">Renommer</span>
            <span class="picture_img_blur_suppprimer">Supprimer</span>
        </span>
    </span>
       <?php endforeach ?>

</div>

<?php include("partials/footer.php");?>