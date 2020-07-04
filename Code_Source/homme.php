<?php
session_start();
include_once('functionsH.php');
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
<section class="a-vendre">
	<div class="container">
	<div class="title-box">
		<h2>Maillos</h2>
	</div>
	<div class="row">
	        <?php
	        ajouterMailotH()
			?>
		</div>		
	</div>
	</div>
</section>
<section class="a-vendre">
	<div class="container">
	<div class="title-box">
		<h2>chaussures</h2>
	</div>
	<div class="row">
	        <?php
	        ajouterChaussureH();
			?>
		</div>		
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
<script>$(function () {
  $('[data-toggle="popover"]').popover()
})</script>
</body>
</html>
