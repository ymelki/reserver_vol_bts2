<?php



// recuperer les données pour pouvoir ensuite les exploiter dans la vue
// 1. Connexion à la B.D.
// 2. requete préparé
// 3. recuperer le tableau
include __DIR__.'/../Modele/Data.php';
$data = new Data();
$compagnies=$data->getCompagnies();
var_dump($compagnies);

include __DIR__.'/../Vue/CompagnieVue.php';