<!DOCTYPE html>

<html>
    <head>
        <title>Les fonctioncs en php</title>
    </head>

    <body>
        <?php

        //sécuriser le formulaire

        /*
        *htmlspeciaalchaars_decode: pour interprert le code html
        *stip_tags: pour supprimer les caractères spéciaaux
        *stripsslashes pour supprimer les /
        */

      
      echo strip_tags($_POST['nom']);

      echo " vous avez ".$_POST['age']."ans "."<br/>";
        ?>

        <p> Bravo Vous avancez bien</p>

        <p>Pour retaper ton prenom cliquer <a href="LesFormulaires.php">ici</a></p>
    </body>
</html>