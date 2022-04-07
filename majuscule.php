<?php
$chaineC = (" ");
while (true) {
    $chaineC = readline("entrez une chaine à tester \n");
    echo majuscule($chaineC) . "\n";
}

function majuscule(string $chaineC)
{

    //ucfirst — Met le premier caractère en majuscule
    //$phrase = ucfirst($chaineC);
    //===================================================
    //ucwords — Met en majuscule la première lettre de tous les mots
    //$phrase = ucwords($chaineC);
    //====================================================
    //return $phrase;
    return ucwords($chaineC);
}
//echo majuscule($chaineC);
