<!DOCTYPE html>

<html>
    <head>
        <title>Les fonctioncs en php</title>
    </head>

    <body>
        <?php
        $nom = "TWAGIRUMUHOZA";
        $phraseMots="On va s'amuser ce soir, donc il faudra amener queqlue chose de sympa";
        echo strlen($nom);//compte le nombre des caractères
        echo str_word_count($phraseMots)."<br/>";//ne compte pas les ponctuation


        //fonction permettant de repeter un string

        echo str_repeat("Bonjour",7)."<br/>";

        //remplacer une chaine de caractère

        $texte = "Bonjour, Comment allez-vous ?";

        echo str_replace("Bonjour","Muraho",$texte,$i)."<br/>";
        echo"nombre de remplacement : ".$i;
       
         //Mettre les caracères en majuscule ou en miniscule

         $minimaj = "BOnjouR COmMent allez voUs ?"."<br/>";

         echo strtolower($minimaj)."<br/>";
         echo strtoupper($minimaj)."<br/>";

         //trouver la position d'une caractère

         echo strpos("Bonjour",'r');
          

         //fonction htmlspeciaachars

         $mishibishi  ="<strong>voil que strong ne s'affiche pas <html></strong>"."<br/>";

         echo htmlspecialchars_decode($mishibishi);

         //voir les fonction implode et explode

        ?>
    </body>
</html>