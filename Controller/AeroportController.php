<?php

$action=$_GET['action'];
include __DIR__.'/../Modele/Data.php';
$data = new Data();

if ($action=="recherche"){

    $recherche=$_POST['aeroport'];
    $aeroport=$data->getAeroportBy($recherche);

}
elseif ($action=="aeroport"){
    $aeroport=$data->getAeroport();
}

// var_dump($aeroport);
include __DIR__.'/../Vue/AeroportVue.php';
