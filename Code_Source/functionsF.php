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
function ajouterMaillotF(){
    
    global $conn;
    $selec=$conn->prepare("SELECT * FROM maillot_f");
   $selec->execute(); 
   while ($s=$selec->fetch(PDO::FETCH_OBJ)){
        echo "
        
        <div class='col-md-3 col-sm-6 single'>
        
            <div class='product-top'>
            
                <a>
                
                    <img class='img-responsive' src='images/maillot_F/$s->img_mf.jpg'>
                
                </a>
                <div class='overlay-right'>";
                ?>
               <a href="panie.php?action=ajout&amp;l=<?php echo $s->titre_mf;?>&amp;q=1&amp;p=<?php echo $s->prix_mf;?>">
                  <?php
                  echo "  <button type='button' class='btn btn-secondary' title='Ajourter au panier'>
                        <i class='fa fa-shopping-cart'></i>
                    </button>
                    </a>
                </div>
                
                <div class='product-bottom text-center'>
                
                    <h5>
            
                        <a style='text-decoration:none; color:#005;'>

                           $s->titre_mf

                        </a>
                    
                    </h5>
                    
                    <p class='price'>
                    
                         $s->prix_mf MAD
                    
                    </p>
                    
                    <div class='product-bottom text-center'>
                    
                       <button type='button' class='btn btn-secondary' data-container='body' data-toggle='popover' data-placement='bottom' data-content='$s->descr_mf'>
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
function ajouterchausureF(){
    
    global $conn;
    $selec=$conn->prepare("SELECT * FROM chaussure_f");
   $selec->execute(); 
   while ($s=$selec->fetch(PDO::FETCH_OBJ)){
        echo "
        
        <div class='col-md-3 col-sm-6 single'>
        
            <div class='product-top'>
            
                <a href='details.php'>
                
                    <img class='img-responsive' src='images/chaussure_F/$s->img_cf.jpg'>
                
                </a>
                <div class='overlay-right'>";
                ?>
               <a href="panie.php?action=ajout&amp;l=<?php echo $s->titre_cf;?>&amp;q=1&amp;p=<?php echo $s->prix_cf;?>">
                  <?php
                  echo "  <button type='button' class='btn btn-secondary' title='Ajourter au panier'>
                        <i class='fa fa-shopping-cart'></i>
                    </button>
                    </a>
                </div>
                
                <div class='product-bottom text-center'>
                
                    <h5>
            
                        <a  style='text-decoration:none; color:#005;'>

                           $s->titre_cf

                        </a>
                    
                    </h5>
                    
                    <p class='price'>
                    
                         $s->prix_cf MAD
                    
                    </p>
                    
                    <div class='product-bottom text-center'>
                    
                      <button type='button' class='btn btn-secondary' data-container='body' data-toggle='popover' data-placement='bottom' data-content='$s->descr_cf'>
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