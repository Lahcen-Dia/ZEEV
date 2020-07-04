<?php
session_start();
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
 
<?php
include_once("Fonctions_Panier.php");

$erreur = false;

$action = (isset($_POST['action'])? $_POST['action']:  (isset($_GET['action'])? $_GET['action']:null )) ;
if($action !== null)
{
   if(!in_array($action,array('ajout', 'suppression', 'refresh')))
   $erreur=true;

   //récupération des variables en POST ou GET
   $l = (isset($_POST['l'])? $_POST['l']:  (isset($_GET['l'])? $_GET['l']:null )) ;
   $p = (isset($_POST['p'])? $_POST['p']:  (isset($_GET['p'])? $_GET['p']:null )) ;
   $q = (isset($_POST['q'])? $_POST['q']:  (isset($_GET['q'])? $_GET['q']:null )) ;

   //Suppression des espaces verticaux
   $l = preg_replace('#\v#', '',$l);
   //On vérifie que $p est un float
   $p = floatval($p);

   //On traite $q qui peut être un entier simple ou un tableau d'entiers
    
   if (is_array($q)){
      $QteArticle = array();
      $i=0;
      foreach ($q as $contenu){
         $QteArticle[$i++] = intval($contenu);
      }
   }
   else
   $q = intval($q);
    
}

if (!$erreur){
   switch($action){
      Case "ajout":
         ajouterArticle($l,$q,$p);
         break;

      Case "suppression":
         supprimerArticle($l);
         break;

      Case "refresh" :
         for ($i = 0 ; $i < count($QteArticle) ; $i++)
         {
            modifierQTeArticle($_SESSION['panier']['libelleProduit'][$i],round($QteArticle[$i]));
         }
         break;

      Default:
         break;
   }
}

?>
 <br><br> <br>
<form method="post" action="panie.php">
    
  <table class="table">
  <thead class="thead">
    <tr>
      <th scope="col"></th>
      <th scope="col">Libellé</th>
      <th scope="col">Quantité</th>
      <th scope="col">Prix</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
    <?php
        if (creationPanier())
    {  

       $nbArticles=count($_SESSION['panier']['libelleProduit']);
       if ($nbArticles <= 0)
        echo "<center><h3 style='color: red;'>Pas de Produit Dans Votre Panier.</h3></center>";
       else
       {
          for ($i=0 ;$i < $nbArticles ; $i++)
          {
            echo "<tbody>";
             echo "<tr>";
             echo  "<th scope='row'></th>";
             echo "<td>".htmlspecialchars($_SESSION['panier']['libelleProduit'][$i])."</ td>";
             echo "<td><input type=\"text\" size=\"4\" name=\"q[]\" value=\"".htmlspecialchars($_SESSION['panier']['qteProduit'][$i])."\"/></td>";
             echo "<td>".htmlspecialchars($_SESSION['panier']['prixProduit'][$i])."</td>";
             echo "<td><a href=\"".htmlspecialchars("panie.php?action=suppression&l=".rawurlencode($_SESSION['panier']['libelleProduit'][$i]))."\">Supprimer</a></td>";
             echo "</tr>";
          }

          echo "<tr><td colspan=\"2\"> </td>";
          echo "<td colspan=\"2\">";
          echo "Total : ".MontantGlobal();
          echo "</td></tr>";

          echo "<tr><td colspan=\"4\">";
          echo "<input type=\"submit\" value=\"Actualiser\"/>";
          echo "<input type=\"hidden\" name=\"action\" value=\"refresh\"/>";

          echo "</td></tr>";
          ?>

          </tbody>
          </table>
<?php
        }
    }
?>    

<td>
<center>
  <span class="badge badge-warning text-center" style="float: center;"><a href="index.php">Ajoutter des produits</a></span>
</td>
</center>
</table>
</form>
<br><br><br><br><br><br><br><br>
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
</body>
</html>