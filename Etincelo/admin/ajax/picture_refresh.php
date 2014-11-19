<?php
 require("../lib/admin.class.php");
 $etinadmin = new etinadmin();

$fetch = $etinadmin->ajax_refresh_picture();
?>

<?php foreach ($fetch as $key => $value) : ?>
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