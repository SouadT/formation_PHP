<?php
/*initialise "$i=0 et $j=100"
en demande le serveur "choisir un numbreentre $i et $j
répéter jusqu'à $reponse = " gagné"
$proposer = rand ($i,$j)
$reponse = readline ($proposer)
si $reponse = "grand"
 $i = $proposer
 si $reponse = "petit"
 $j = $proposer
 echo " j'ai gagné"
 */
$var = 0;
$j = 100;

echo "Mon choix est $proposer";
do {
    $proposer = rand($var, $j);
    $reponse = readline(" $proposer: ");
    if ($reponse == "grand") {
        $var = $proposer;
    } elseif ($reponse == "petit") {
        $j = $proposer;
    }
    $i++;
} while ($reponse !== "gagné" && $i < 6);
echo "j'ai gagné";
