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

       $connexion = new PDO("mysql:host=$serveur;dbname=pierregiraud", $login,  $pass);
       $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       echo"Connexion Bien réussi Bravo Jean de Dieu";//message affiché quand la connexion est réussie

       }catch(PDOException $e){
              echo "echec de connexion : " .$e -> getMessage();//afficher le message quand la connection a échouer
       }


        ?>
    </body>
</html>