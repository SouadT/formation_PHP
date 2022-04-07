<?php
/*
intialisation un tableau ()
repéter jusqu'au réponse = STOP 
(demander l'utulisateur un numbre 
ajouter la reponse au tableau )
*/
$numbres = array();
do {
    $reponse = readline("donnez un numéro");
    if (is_numeric($reponse) && strtolower($reponse) != 'stop') {
        array_push($numbres, $reponse);
    }
} while ($reponse != "STOP");
for ($i = 0; $i < sizeof($numbres) - 1; $i++) {
    for ($j = $i + 1; $j < sizeof($numbres); $j++) {
        if ($numbres[$i] > $numbres[$j]) {
            $tmp = $numbres[$i];
            $numbres[$i]  = $numbres[$j];
            $numbres[$j] = $tmp;
        }
    }
}

print_r($numbres);
