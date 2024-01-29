<?php

$pdo= new \PDO('mysql:host=localhost;dbname=reservation', 'root', '');
 
// compteur : je voudrais tant de ligne dans ma table
for ($i=0; $i<10;$i++){
    echo "inserer la ligne n°".$i."<br />";
    $pdo->query("INSERT INTO vols
     (ID_vol,
      Compagnie_aerienne,
       Numero_vol, 
       Ville_depart,
        Ville_arrivee, 
        Date_depart, 
        Date_arrivee, 
        Heure_depart,
         Heure_arrivee,
          Prix, 
          Places_disponibles) 
          VALUES (NULL, 
          '92', 
          '12',
           '270', 
           '278',
            '2024-01-01',
             '2024-01-03',
              '18:13:38',
               '18:13:38',
                '200', 
                '34') ");
    // 1 inserer 10 lignes statiques (insert)

    // 2 changer avec des données aleatoire
    // pour tout les champs pas concerné par d'autres table
    // sauf compagnie aerienne 
    // ville arrivé
    // ville de depart
    // 3 faire les 3 dernieres colonnes
}