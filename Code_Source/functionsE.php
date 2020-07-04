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
function ajouterMaillotE(){
    
    global $conn;
    $selec=$conn->prepare("SELECT * FROM maillot_e");
   $selec->execute(); 
   while ($s=$selec->fetch(PDO::FETCH_OBJ)){
        echo "
        
        <div class='col-md-3 col-sm-6 single'>
        
            <div class='product-top'>
            
                <a href='details.php'>
                
                    <img class='img-responsive' src='images/maillot_E/$s->img_me.jpg'>
                
                </a>
                <div class='overlay-right'>";
                ?>
               <a href="panie.php?action=ajout&amp;l=<?php echo $s->titre_me;?>&amp;q=1&amp;p=<?php echo $s->prix_me;?>">
                  <?php
                  echo "  <button type='button' class='btn btn-secondary' title='Ajourter au panier'>
                        <i class='fa fa-shopping-cart'></i>
                    </button>
                    </a>
                </div>
                
                <div class='product-bottom text-center'>
                
                    <h5>
            
                        <a style='text-decoration:none; color:#005;'>

                           $s->titre_me

                        </a>
                    
                    </h5>
                    
                    <p class='price'>
                    
                         $s->prix_me MAD
                    
                    </p>
                    
                    <div class='product-bottom text-center'>
                    
                      <button type='button' class='btn btn-secondary' data-container='body' data-toggle='popover' data-placement='bottom' data-content='$s->descr_me'>
                                               Voir détails
                                      </button>
                    </div>
                <br
                 <br><br>
                </div>
            
            </div>
        
        </div>
        
        ";
        
    }
    
}
function ajouterChassureE(){
    
    global $conn;
    $selec=$conn->prepare("SELECT * FROM chaussure_e");
   $selec->execute(); 
   while ($s=$selec->fetch(PDO::FETCH_OBJ)){
        echo "
        
        <div class='col-md-3 col-sm-6 single'>
        
            <div class='product-top'>
            
                <a href='details.php'>
                
                    <img class='img-responsive' src='images/chaussure_E/$s->img_ce.jpg'>
                
                </a>
                <div class='overlay-right'>";
                ?>
               <a href="panie.php?action=ajout&amp;l=<?php echo $s->titre_ce;?>&amp;q=1&amp;p=<?php echo $s->prix_ce;?>">
                  <?php
                  echo "  <button type='button' class='btn btn-secondary' title='Ajourter au panier'>
                        <i class='fa fa-shopping-cart'></i>
                    </button>
                    </a>
                </div>
                
                <div class='product-bottom text-center'>
                
                    <h5>
            
                        <a style='text-decoration:none; color:#005;'>

                           $s->titre_ce

                        </a>
                    
                    </h5>
                    
                    <p class='price'>
                    
                         $s->prix_ce MAD
                    
                    </p>
                    
                    <div class='product-bottom text-center'>
                    
<button type='button' class='btn btn-secondary' data-container='body' data-toggle='popover' data-placement='bottom' data-content='$s->descr_ce'>
                               Voir détails
                      </button>
                    </div>
                 <br><br>
                </div>
            
            </div>
        
        </div>
        
        ";
        
    }
    
}
?>