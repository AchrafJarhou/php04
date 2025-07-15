<?php

$jour = "lundi";
switch ($jour) {
    case "lundi":
    case "Mardi":
    case "Mercredi":
    case "Jeudi":
    case "Vendredi":
        echo " $jour est un jour ouvré ";
        break;
    default:
        echo "$jour c'est un week-end";
}
