<!DOCTYPE html>

<html>
    <head>
        <title>Les fonctioncs en php</title>
    </head>

    <body>
        <?php

        $serveur = "localhost";
        $login = "root";
        $pass = "";

        try{
            $connexion = new PDO("mysql:host=$serveur;dbname=pierregiraud2",$login, $pass);
            $connexion->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);

            //On prépare la requete de selection des données depuis le base des données

            $requete = $connexion->prepare("
            SELECT* FROM Visiteurs");

            //On éxecute la requete

            $requete->execute();

            //on combine des éléments retourner par la requete et on stocke le résultat de la requete dans une variable

            $resultat = $requete->fetchall();

            echo "<pre>";

            print_r($resultat);//on afficher le résultat de la requete

            echo "</pre>";



             /**Requete pour ajouter un champ 
            $requete2 = "
            ALTER TABLE Visiteurs ADD age INT(2)
            ";

            $connexion->exec($requete2);
            echo"Cellule ajoutée avec succès";

             **/

            echo"résultats bien trouvés";
             $requete3 = $connexion->prepare("
             SELECT prenom FROM Visiteurs ORDER BY age DESC

             ");

             $requete3->execute();
             
             $resultatRequete3 = $requete3->fetchall();

             echo"<pre>";
             print_r($resultatRequete3);

             echo"</pre>";

           


        }catch(PDOException $e){
            echo "Echec : ".$e->getMessage();
        }


        ?>
    </body>
</html>