<?php
//error_reporting — Fixe le niveau de rapport d'erreurs PHP

function tableau(string $i, int $j)
{
    //preg_match — Effectue une recherche de correspondance avec une expression rationnelle standard
    //str_contains — Determine if a string contains a given substring
    //substr — Retourne un segment de chaîne
    $tabli = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j'];
    //strtolower($i[array_rand($tabli)]);
    $tablj = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $grey = [
        ['f' => 3],
        ['f' => 4],
        ['f' => 5],
        ['i' => 5],
        ['i' => 6],
        ['c' => 9],
        ['d' => 9],
        ['e' => 9],
        ['f' => 9],
    ];
    foreach ($grey as $touch) {
        if ($touch == [$i => $j]) {
            return "touché \n";
        }
    }
    //array_search — Recherche dans un tableau la première clé associée à la valeur
    if (array_search($i, $tabli) && array_search($j, $tablj)) {
        //===================================================
        return "Loupé\n";
    }
    return "Hors-jeu\n";
}


$lettre = readline("entrez une lettre");
$number = readline("entrez un numero");
echo tableau($lettre, $number);
