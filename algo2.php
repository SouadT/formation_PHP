<?php
/*
    demendez l'utilisateur "donner un numéro entre (0,100)"
    initialiser number = reponse
    initialiser total
    repiter nb fois
    initialiser conteur = conteur + 1
    initialiser total = total + conteur
    afficher "total"
*/
$total=null;
$reponse = readline("donnez un numéro entre (0,100)");
for ($i=0; $i <= $reponse ; $i++) {   
    $total += $i;
}echo $total;

