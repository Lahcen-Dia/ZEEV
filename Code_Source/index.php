<?php
include_once('functions.php');
include_once("Admin/DB.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aga-Shop</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="top-nav-bar">
<div class="search-box">
<i class="fa fa-bars" id="menu-btn" onclick="openmenu()"></i>
<i class="fa fa-times" id="close-btn"onclick="closemenu()"></i>
<a href="index.php"><h1 class="logo">Aga-Shop</h1></a>
<input type="text" n class="form-control">
<span class="input-group-text"><i class="fa fa-search"></i></span>
</div>
<div class="menu-bar">
 	<ul>
 		<li><a href="panie.php"><i class="fa fa-shopping-basket"></i></a></li>
 		<li><a href="joindre.php">S'inscrire</a></li>
 		<li><a href="connexion.php">Connexion</a></li>
 	</ul>
</div>
</div>
<div class="alert alert-danger"  style="text-align:center;">
Vous pouvez télécharger le rapport de projet en cliquant <a href="" download>ici</a>
</div>
<section class="header" style="background-color:  #000 ;">
	<div class="side-menu" id="side-menu">
		<ul>
			<li><a href="homme.php">Homme</a></i>
			</li>
			<li><a href="femme.php">Femme</a></i>
			</li>
			<li><a href="enfant.php" >Enfant</a></i>
			</li>
			<li><a href="accessoire.php">Accessoires</a></li>
		</ul>
	</div>
	<div class="slider">
	<div id="slider" class="carousel slide carousel-fade" data-ride=" carousel">
    <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/image.jpg" class="d-block w-100" >
    </div>
  </div>
    <ol class="carousel-indicators">
    <li data-target="#slider" data-slide-to="0"></li>
    <li data-target="#slider" data-slide-to="1"></li>
  </ol>
</div>
	</div>
</section>
<section class="categories">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<img src="images/che1.jpg">
			</div>
			<div class="col-md-3">
				<img src="images/ch.jpg">
			</div>
			<div class="col-md-3">
				<img src="images/t.jpg">
			</div>
			<div class="col-md-3">
				<img src="images/che3.jpg">
			</div>
		</div>
	</div>
</section>
<section class="a-vendre">
	<div class="container">
	<div class="title-box">
		<h2>Nouveuté</h2>
	</div>
	<div class="row">
	        <?php
	       ajouterNouveaute();
			?>
		</qdiv>		
	</div>
	</div>
</section>
<section class="footer">
	<div class="container text-center">
		<div class="row">
			<div class="col-md-4">
				<h1>Liens utile</h1>
				<p>AAAAA</p>
				<p>BBBBB</p>
				<p>CCCCC</p>
				<p>DDDDD</p>
			</div>
			<div class="col-md-4">
				<h1>Liens utile</h1>
				<p>AAAAA</p>
				<p>BBBBB</p>
				<p>CCCCC</p>
				<p>DDDDD</p>
			</div>
			<div class="col-md-4">
				<h1>Suivez Nous</h1>
				<p><i class="fa fa-facebook-official"></i> Facebook</p>
				<p><i class="fa fa-youtube-play"></i> Youtube</p>
				<p><i class="fa fa-linkedin"></i> Linkedin</p>
				<p><i class="fa fa-twitter"></i> Twiter</p>
			</div>
		</div>
		<hr>
		<p class="copyright">Creer par O.lahcen && AIT.O.Es-saadia</i></p>
	</div>
</section>
<script>
	function openmenu() {
		document.getElementById("side-menu").style.display="block";
		document.getElementById("menu-btn").style.display="none";
		document.getElementById("close-btn").style.display="block";
	}
	function closemenu() {
		document.getElementById("side-menu").style.display="none";
		document.getElementById("menu-btn").style.display="block";
		document.getElementById("close-btn").style.display="none";
	}
</script>
<script>$(function () {
  $('[data-toggle="popover"]').popover()
})</script>
</body>
</html>
