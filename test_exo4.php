<?php
//pour utiliser du code provenant d'un autre fichier
//L'expression require_once est identique à require mis à part que PHP vérifie si le fichier a déjà été inclus, et si c'est le cas, ne l'inclut pas une deuxième fois.
//include('tableau1.php');
require('tableau1.php'); //require  mieux que include 
//code teste
$tab = ["test", "vive", "le", "langage", "PHP"];
$tab = ajouterTableau($tab, "je fais un");
afficherTableau($tab);
