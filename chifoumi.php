<?php
/* Chifoumi :
1. Pierre > Ciseaux
2. Ciseaux > Papier
3. Papier > Pierre  
 La victoire ssi 3 manches gagnées */

$Pierre = "PI";
$Ciseaux = "CI";
$Papier =  "PA";
$Vic = 3;
$ComptUser = 0;
$ComptOrdi = 0;

// Demander à user de entrer son choix

do {

    $repUser = readline('Entrez votre choix SVP ???');

    $repOrdi = match (rand(1, 3)) {
        1 => "PI",
        2 => "CI",
        3 => "PA",
    };

    // Egalité 
    if ($repUser == $repOrdi) {
        echo "Egalité ! Ordi $ComptOrdi Utilisateur $ComptUser \n";
        continue;
    }

    switch ($repUser) {
        case $Pierre:
            if ($repOrdi == $Ciseaux) {
                $ComptUser++;
                break;
            }
            if ($repOrdi == $Papier) {
                $ComptOrdi++;
                break;
            }
        case $Ciseaux:
            if ($repOrdi == $Pierre) {
                $ComptOrdi++;
                break;
            }
            if ($repOrdi == $Papier) {
                $ComptUser++;
                break;
            }
        case $Papier:
            if ($repOrdi == $Pierre) {
                $ComptUser++;

                break;
            }
            if ($repOrdi == $Ciseaux) {
                $ComptOrdi++;
                break;
            }
    }

    echo "Ordi $ComptOrdi Utilisateur $ComptUser \n";
} while ($ComptOrdi !== $Vic && $ComptUser !== $Vic);


if ($ComptUser == $Vic) {
    # Utilisateur a gagné la partie
    echo "Bravo vous avez gagné la partie ! \n";
} else {
    # Ordinateur a gagné la partie
    echo "C'est moi qui gagne la partie ! \n";
}
