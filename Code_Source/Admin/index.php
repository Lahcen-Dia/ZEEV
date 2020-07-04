<?php
session_start();
$user="LahcenDia";
$pass="azerty123";
if(isset($_POST['submit'])){
$username=$_POST['username'];
$password=$_POST['password'];
if ($username && $password) {
	if ($username==$user && $password==$pass) {
		$_SESSION['$username']=$username;
		header('Location: ajout.php');
	$_SESSION['username']=$username;//utiliser pour naviguer dans tout les pages.
	
}else{
	echo "Remplir tout les champ";
}
}
}
?>

<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<center>
<h1>Administration Connexion</h1>
<form action="" method="POST">
	<h4>Pseudo :</h4><input type="text" name="username"/><br>
	<h4>Mot de passe :</h4><input type="password" name="password"/><br><br>
	<input type="submit" name="submit" value="Se Connecter">
</form>
</center>