<?php
/*
initialiser NbGrand = reponse
demander l'utilisateur "donnez un nomero"
si reponse > NbGrand
initialiser NbGrand = reponse
echo "NbGrand"
*/
$NbGrand = null;
for ($i=0; $i < 4 ; $i++) { 
    $reponse = readline("donnez un numéro entre (0,100)");
if ($reponse > $NbGrand) {
    $NbGrand =$reponse;
}
}echo $NbGrand;