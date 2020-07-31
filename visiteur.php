<!DOCTYPE html>

<html>
    <head>
        <title>Les fonctioncs en php</title>
    </head>

    <body>
        <?php
         //inclure le fichier de classe pour créer nos objets

         include_once('LesBasesPOO.class.php');

         $visiteur1 = new Visiteur;
       
         $visiteur1->set_prenom('Durand');
         $visiteur1->set_nom('Pierre');

       

         echo "Bonjour ".$visiteur1->get_prenom()." ".$visiteur1->get_nom();
     



        ?>
    </body>
</html>