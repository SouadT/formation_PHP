<!--Entrer un nbMyster
Initialiser nbMyster
Si la reponce = nbMyster ;
 Demender l'Utilisateur donnez un nbMyster
 Si reponce > nbMyster
echo " trop grand"
si non reponce < nbMyster
 echo "trop petit"
 echo "Bravo vous avez trouvé"-->
<?php
$nbMyster = rand(0,100);
do {
    $reponce = readline("Donnez un nbMyster");
    if($reponce > $nbMyster) {

        echo "trop grand\n" ;
    }
if($reponce < $nbMyster){

    echo"trop petit\n" ;
}
} while($reponce != $nbMyster);
echo"Bravo vous avez trouvé";
