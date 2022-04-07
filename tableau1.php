<?php
//Créer une fonction qui ajoute une valeur au début d’un tableau
//Puis une seconde qui affiche le tableau
//array_push — Empile un ou plusieurs éléments à la fin d'un tableau
//array_pop — Dépile un élément de la fin d'un tableau
//fonctionajoute une valeur au début d’un tableau
function ajouterTableau(array $tableau, $valeur)
{
    //array_shift — Dépile un élément au début d'un tableau
    //array_unshift — Empile un ou plusieurs éléments au début d'un tableau
    array_unshift($tableau, $valeur);
    return $tableau;
}
//foction qui affiche le tableau entier
function afficherTableau(array $tableau)
{
    foreach ($tableau as $index => $element) {
        echo "élément numéro " . $index . ':' . $element . "\n";
    }
}
//code teste
$tab = ["test", "vive", "le", "langage", "PHP"];
$tab = ajouterTableau($tab, "je fais un");
afficherTableau($tab);
