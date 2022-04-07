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
$oui = "O";
$non = "N";
$repUser1 = readline('Quel est votre nom ?');
do {
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
        # code...
        // Egalité 
        if ($repUser == $repOrdi) {
            echo "Egalité ! Ordi $ComptOrdi $repUser1 $ComptUser \n";
            continue;
        }

        switch ($repUser) {
            case ($repUser == $Pierre && $repOrdi == $Ciseaux)
                || ($repUser == $Ciseaux && $repOrdi == $Papier)
                || ($repUser == $Papier && $repOrdi == $Pierre):
                $ComptUser++;
                break;
            case ($repOrdi == $Papier && $repUser == $Pierre)
                || ($repOrdi == $Pierre && $repUser == $Ciseaux)
                || ($repOrdi == $Ciseaux && $repUser == $Papier):
                $ComptOrdi++;
                break;
        }

        echo "Ordi $ComptOrdi $repUser1  $ComptUser \n";
    } while ($ComptOrdi !== $Vic && $ComptUser !== $Vic);


    if ($ComptUser == $Vic) {
        # Utilisateur a gagné la partie
        echo " Bravo $repUser1 : vous avez gagné la partie ! \n";
    } else {
        # Ordinateur a gagné la partie
        echo "$repUser1  C'est moi qui gagne la partie ! \n";
    }
    echo "$repUser1 voulez-vous tenter une autre partie?";
    $reponse = readline('entrez O,N');
} while ($reponse !== $non);
