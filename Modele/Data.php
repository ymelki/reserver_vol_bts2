<?php

class Data {
    private $pdo;
    
    public function __construct()
    {
        $this->pdo= new \PDO('mysql:host=localhost;dbname=reservation', 'root', '');
    }
    public function getAeroportBy($recherche){
         
        // 2 requete
        $statement=$this->pdo->query("select * from aeroports
                                        where Ville='$recherche'");
        
        // 3 recuperation des données
        $array=$statement->fetchAll(PDO::FETCH_ASSOC);
        return $array;

    }
    public function getCompagnies(){
        
        // 2 requete
        $statement=$this->pdo->query("select * from compagnies_aeriennes");
        
        // 3 recuperation des données
        $array=$statement->fetchAll(PDO::FETCH_ASSOC);
        return $array;
    }

    public function getAeroport(){
        
        // 2 requete
        $statement=$this->pdo->query("select * from aeroports");
        
        // 3 recuperation des données
        $array=$statement->fetchAll(PDO::FETCH_ASSOC);
        return $array;
    }
    public function verif_user($email,$mdp){
         // 2 requete
         $statement=$this->pdo->query("select * from utilisateurs
         where Adresse_email='$email' and Mot_de_passe='$mdp'");
        
         // 3 recuperation des données
         $array=$statement->fetchAll(PDO::FETCH_ASSOC);
         return $array;
    }
}