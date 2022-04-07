<?php
$var = 0;
$j = 100;
$i = 0;
$toto = false;

echo "Mon choix est $proposer";
do {
    $proposer = rand($var, $j);
    $reponse = readline(" $proposer: ");
    if ($reponse == "grand") {
        $var = $proposer;
    } elseif ($reponse == "petit") {
        $j = $proposer;
    } elseif ($reponse == "gagné") {
        $toto = true;
    }
    $i++;
} while ($reponse !== "gagné" && $i < 6);
if ($toto) {
    echo "j'ai gagné";
}
