<?php

$action=$_GET['action'];



if ($action=="inscription"){
    include __DIR__.'/../Vue/InscriptionVue.php';
}
elseif ($action=="connexion"){
    echo "afficher la vue connexion";
    include __DIR__.'/../Vue/ConnexionVue.php';

}
elseif($action=="verif_connexion"){
    var_dump($_POST);
}