<?php
$servername = "localhost";
$username = "id12818317_lahcen_dia";
$password = "x4_<i)&(Scj+*>*|";
$database = "id12818317_agashop20";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {    
    echo "Connection failed: " . $e->getMessage();
    }
$msg = ""; 
$username = $password = "";
if(isset($_POST['envoyer'])) {
  $username = trim($_POST['email']);
  $password = trim($_POST['mdp']);
  if($username != "" && $password != "") {
   $selec=$conn->prepare("SELECT * FROM Client where email= '$username' and mdp = '$password'");
    $selec->execute(); 
   if($selec->rowCount() > 0){
    header("Location: index.php");
   }else{
    header("Location: connexion.php); 
    
   }
    
    }
}
  
   while ($s=$selec->fetch(PDO::FETCH_OBJ)){
    $_SESSION['nom']=trim($s->nom);
   }
?>