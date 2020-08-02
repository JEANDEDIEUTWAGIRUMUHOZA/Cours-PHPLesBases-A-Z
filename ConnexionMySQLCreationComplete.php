<!DOCTYPE html>

<html>
    <head>
        <title>Les fonctioncs en php</title>
    </head>

    <body>
        <?php

      
      //Deux façons(extension) de créer et se connection à la base de données

      /**
       * Mieux vaux utilser PDO car il peut etre utilisé par 12 SGBD 
       * Alors que MSQLi n'utilse que le MYSQL
       */

       //nous stockons les information de BD dans les variables

       $serveur ="localhost";
       $login = "root";
       $pass = "";
       
       try{

        $connexion = new PDO("mysql:host=$serveur;dbname=pierregiraud2", $login,  $pass);
        $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
     /*on crée un ebase de données qui n'existait pas , on peut supprimer ces 2 lignes
       *car MYSQ n'acceptera pas de créer une autre base de données de meme nonm
       *au contraire ça retournera une erreur
       $connexion ->exec("CREATE DATABASE pierregiraud2");
       echo "Base de données bien créée";
       */
       
       /*on crée les tables
    UNSIGNED évite de mettre des entier négatif*/

       $codesql = "CREATE TABLE Visiteurs(
           id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
           nom VARCHAR(50),
           prenom VARCHAR(50),
           email  VARCHAR(70)
       )";

       $connexion->exec($codesql);//exec ici c'est une méthode native de PHP
       echo"Table Visiteurs bien créée";

       }catch(PDOException $e){
              echo "echec de connexion : " .$e -> getMessage();//afficher le message quand la connection a échouer
       }


        ?>
    </body>
</html>