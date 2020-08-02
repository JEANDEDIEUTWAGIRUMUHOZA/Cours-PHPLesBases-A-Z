<!DOCTYPE html>
<html>
    <head>
        <title>La gestion des erreurs en PHP</title>
        <meta charset="UTF-8">
    </head>

    <body>
        <?php
        /*

        if(!file_exists("inconnu.txt)){
            die(fichier non trouve);
        }else{

            $fichier = fopen("inconnu.txt","r");
        }
*/
        ?>

        <h1>Gestion des exceptions<h1/>

      <?php

      function Division($x,$y){ //commencer par créer la fonction

        if($y == 0){ //on met le if qui sera vérifier avant l'éxecution de la fonction
            throw new Exception("Division par zéro impossible");
        }
          return $x/$y;
        }

      try{ //puis on fait try catch pour appeler la fonction
          echo Division(2,4);
          echo Division(16,4);
      }catch(Exception $e){

        echo "Message d\'erreur : ".$e->getMessage();
      }
      
      ?>

    </body>
</html>