<!DOCTYPE html>

<html>
    <head>
        <title>Les fonctioncs en php</title>
    </head>

    <body>
        <?php

        //on va insérer des données en préparan des requetes

       /* préparer des request veut dire le spre-formater,
        *on va aussi les compiler pour qu'elles puissent s'éxecuter rapidement
        *Cette préparation requetes nous protegera également contre des injection SQL*/

        /**bind_param pour compiler
         * et prerapare pour les préparer
         */

        $serveur = "localhost";
        $login = "root";
        $pass = "";

        $nom;
        $prenom;
        $email;

        try{
            $connexion = new PDO("mysql:host=$serveur;dbname=pierregiraud2",$login, $pass);
            $connexion->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);

            //Prépare la requete

            $requete = $connexion->prepare(
                "INSERT INTO Visiteurs(nom,prenom,email)
                VALUES(:nom,:prenom,:email)"//: sont des marqueurs
            );

            //ici on va lier nons marqueur de requete à des variables

            $requete->bindParam(':nom',$nom);
            $requete->bindParam(':prenom',$prenom);
            $requete->bindParam(':email',$email);

            $nom = "Megane";
            $prenom = "Jado";
            $email = "megajadot@gmail.com";
            $requete->execute();
            echo "Données bien insérées";

        }catch(PDOException $e){
            echo "Echec : ".$e->getMessage();
        }


        ?>
    </body>
</html>