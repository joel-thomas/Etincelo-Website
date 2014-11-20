<!DOCTYPE html>
	<html>
	<head>
	<meta charset="UTF-8">
	<title>Etincelo</title>

<!-- JS -->

<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaD2aixzg7mNxUsNBioTPm1libibfVdq8"></script>
<script type="text/javascript" src="js/lightGallery.js"></script>
<script type="text/javascript" src="js/app.js"></script>

<!-- CSS -->

<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/lightGallery.css" />
<link rel="stylesheet" type="text/css" href="css/style.css">

<!-- FONT -->

<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Jockey+One' rel='stylesheet' type='text/css'>

</head>

<body>
<?php require_once("lib/main.class.php"); $etincelo = new etincelo_main();
?>
<script type="text/javascript">
  $(document).ready(function() {
    $("#lightGallery").lightGallery();
  });
</script>

<!-- Navigation -->

<?php $hote = $_SERVER['HTTP_HOST']; ?>

<section>
  <div id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-sm-2">
				<div class="logo"><a href="http://<?= $hote ?>/etincelo">Etincelo</a></div>
			</div>
			<div class="col-md-10 col-sm-10">
				<div class="nav">
					<ul class="navbar_header">
						<li><a class="" href="http://<?= $hote ?>/Etincelo#home">Accueil</a></li>
						<li><a class="" href="http://<?= $hote ?>/Etincelo#news" >News</a></li>
						<li><a class="" href="http://<?= $hote ?>/Etincelo#music">Musiques</a></li>
						<li><a class="" href="http://<?= $hote ?>/Etincelo#gallery">Gallerie</a></li>
            					<li><a class="" href="http://<?= $hote ?>/Etincelo#about">A propos</a></li>
						<li><a class="" href="http://<?= $hote ?>/Etincelo#shop">Boutique</a></li>
						<li><a class="" href="http://<?= $hote ?>/Etincelo#contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
