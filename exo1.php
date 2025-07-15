<?php

$role="admin";
// avec if et else if
if($role=="admin"){
    echo  "Accès complet autorisé" ."<br>";
}
elseif($role=="editeur"){
    echo "Accès limité aux modifications"."<br>";
}
elseif($role=="visiteur"){
    echo "Accès lecture seule"."<br>";
}
else{
    echo "Rôle inconnu"."<br>";
}
//  cas switch
switch($role){
    case "admin":
         echo  "Accès complet autorisé";
         break;
    case "editeur":
         echo  "Accès limité aux modifications";
         break;
    case "visiteur":
         echo  "Accès lecture seule";
         break;
         default:
          echo "Rôle inconnu";
          
        }
         
         




