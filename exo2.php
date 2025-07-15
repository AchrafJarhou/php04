<?php
$jour ="lundi";
switch($jour){
    case "lundi":
    case "Mardi":
    case "Mercredi":
    case "Jeudi":
    case "Vendredi":
        echo " est un jour ouvré ";
        break;
    default:
        echo "c'est un week-end";
    }
       