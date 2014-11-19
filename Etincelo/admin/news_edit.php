<?php
 require("lib/admin.class.php");
 $etinadmin = new etinadmin();
 include("partials/header.php");

// Vérification de si il y a les POSTE

$etinadmin->save_news();

// On met les donnée en POST avec l'id
if (isset($_GET['id'])) {
  $etinadmin->select_news($_GET["id"]);
}


?>

<section>

	<div id="body_content">

		<div class="container">


			<div class="row">

<h1>Editer une <strong>news!</strong></h1>

<?php echo $etinadmin->flash(); ?><br>

<form action="" method="post" enctype="multipart/form-data" class="form-horizontal" role="form" >


  <div class="form-group">
    <label for="title" class="col-lg-2 control-label">Titre</label>
    <div class="col-lg-4">
       <?= $etinadmin->input('title');?>
    </div>
  </div>

<hr>

  <div class="form-group">
    <label for="picture" class="col-lg-2 control-label">Image</label>
    <div class="col-lg-4">

      <?= $etinadmin->files('picture');?>

    </div>
</div>
  <div class="form-group">

<div class="col-lg-2">

</div>
<div class="col-lg-8">
      <?php

      if (isset($_POST) && !empty($_POST)) {

        echo "<img src='../picture/news/" . $_POST['name_picture'] ."' style='height:80px; width:100px;'>";
      }
      ?>
    </div>
  </div>
<hr>

  <div class="form-group">
    <label for="content" class="col-lg-2 control-label">Contenu</label>
    <div class="col-lg-8">
      <?= $etinadmin->textarea('content'); ?>
    </div>
  </div>

 <hr>
<?= $etinadmin->csrfInput(); ?>
  <div class="form-group">

    <div class="col-lg-2">



  </div>

    <div class="col-lg-4">
      <input type="submit" name="envoyer" class="btn btn-default" value="Enregistrer la news">

    </div>
  </div>

</form>
<script> CKEDITOR.replace( 'editor1' ); </script>

			</div>
		</div>

	</div>
</section>
<?php include("partials/footer.php");?>