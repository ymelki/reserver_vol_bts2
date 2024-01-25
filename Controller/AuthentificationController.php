<?php

$action=$_GET['action'];



if ($action=="inscription"){
    include __DIR__.'/../Vue/InscriptionVue.php';
}
elseif ($action=="connexion"){
    echo "afficher la vue connexion";
    include __DIR__.'/../Vue/ConnexionVue.php';

}
elseif ($action=="deconnexion"){
    session_destroy();
    header('location:index.php?uc=accueil');

}
elseif($action=="verif_connexion"){
    var_dump($_POST);
    $email=$_POST['email'];
    $mdp=$_POST['pwd'];
    // 1. verification en B.D.
    include __DIR__.'/../Modele/Data.php';
    $data = new Data();
    $user=$data->verif_user($email,$mdp);
    var_dump($user);
    
    // 2. Si c'est OK on stock en session
    if (count($user)==0){
        echo "vous etes deconnecté !";
        header('location:index.php?uc=authentification&action=connexion');
    }
    else {
        echo "vous etes connecté";

        // creation de la session
        $_SESSION['email']=$email;
    }

    // 3. si non on renvoie vers la page de connexion

    // recuperer les données en POST depuis le formulaire
    // une fonction modele qui va verfier les données
    // select * from visiteur where email = $email and mdp = $mdp
    // renvoyer un tableau
    // Si le tableau est remplie => donc connecté => creation de la session
    // $_SESSION['mail']=$mail // avec mail correspondant au POST du mail
    // si le tableau est vide => renvoie vers la page de connexion
}
//=> toutes les pages : si on a la sessions qui existe alors
//  on affiche vous etes connecte et un bouton de deconnexion acessible 
//(header). Si non , on a un bouton d'authentification , 
//vous etes deconnecté 
