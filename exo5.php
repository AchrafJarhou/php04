<?php
$size="L";
const TVA = 0.20;
switch($size){

    case "S":
        $prixHt = 10;
            break;
 
    case "M":
        $prixHt = 12;

            break;
        
    case "L":
        $prixHt = 14 ;

            break;
            
    case "XL":
        $prixHt = 16 ;
            break;
         
    default:
                echo "Taille inconnue";
                };
      
    $prixTtc = ($prixHt+($prixHt*TVA));
    
    echo  "Le prix du t-shirt taille $size est de $prixTtc TTC ($prixHt € HT + 20% TVA).";

        

       






