<?php
$chaineC = "bonne journee";
//string-type
function argument(string $chaineC)
{
    //str_split — Convertit une chaîne de caractères en tableau
    $agument = str_split($chaineC);
    //=============================================
    //strlen — Calcule la taille d'une chaîne
    //==========================================
    //return $agument;
    return strlen($chaineC);
}
echo argument($chaineC);
