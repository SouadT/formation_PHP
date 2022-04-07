<?php
/*crier un tableau [diviseur]
demandez l'utilisateur " rentrez un numéro"
si 
$reponse < 2 "cas special"
sinon
répéter jusqu'a $i = ($reponse-1)
si $reponse modulo $i = 0
alor
$diviseur = $i
echo " le nombre n'est pas premier"
sinon
sizeof $diviseur = 0
echo"Le nombre est premier"
*/
$diviseur = [];
do {
    $reponse = readline("donnez un numéro");
    //} while (!is_numeric($reponse) or $reponse!=(integer)$reponse);
} while (!ctype_digit($reponse));
if ($reponse < 2) {
    echo "cas special";
} else {
    for ($i = 1; $i < $reponse; $i++) {
        if ($reponse % $i == 0) {
            array_push($diviseur, $i);
        }
    }
}
if ((sizeof($diviseur)) == 2) {
    echo " est premier\n";
} else {
    echo " n'est pas premier";
    print_r($diviseur);
}
