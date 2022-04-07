<?php

//on fait choisir un mot dans le dictionnaire à l'ordinateur 
$tabmots = array();
$caracter = "abcdefghijklmnopqrstuvwxyz";
$mot = '';
$listeMots = ["Blanc, Podium, Attirer, Cablage, Capitaine, Nuage, Ovni, Humide, Femmes,
    Tremble, Canal, Menottes, Artificiel, Madone, Bazooka, Pression, Multiplication, Prix, Plastique,
    Religieuse, Cible, Soulevement, Mediatrice, Philosophe, Bande, Canada, Ballon, Volee, Muet,
    Parking, Minuit, Hiberner, Loin, Rabat, Monarchie, Spermatozoide, Poisson, Camarade, Moche,
    Vache, Rapide, Entrepot, Feuille, Campus, Pornographie, Bucheron, IDE, Orbite, Planetes, Salle,
    Taxi, Bronze, Hydrogene, Nouveaute, Route, Recipient, Fossette, Demander, Terrain, Aviateu,
    Boussole, Plomb, Catapulte, Recueillir, Stimulateur, Cardiaque, Chant, Brun, Gribouiller, Locomotive, Chenil"];
$nbError = 9;
$error = 0;
$nbMot = rand(0, count($listeMots));
$mot = $listeMots[$nbMot];

function cacheMot($mot)
{
    //str_split — Convertit une chaîne de caractères en tableau
    $mot = str_split($mot);
    //===============================================
    for ($i = 0; $i < sizeof($mot); $i++) {
        # code...
        $mot[$i] = "_";
    }
    return $mot;
}
function afficheMotCache($mot, $erreur)
{
    //implode — Rassemble les éléments d'un tableau en une chaîne
    echo implode(" ", $mot);
    //============================================== 
    echo "\nNombre d'erreur : " . $erreur . "\n";
}
