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

            //variable pour insertion

            $insertion = "INSERT INTO Visiteurs(nom,prenom,email)
                          VALUES('Giroud','Olivier','oliva@gmail.com'),
                               ('Kylian','Mbappé','mkylian@gmail.com'),
                               ('Ngolo','Kanté','kante@gmail.com'),
                               ('Prenel','Kimpembe','kim@gmail.com')";
                
                $connexion->exec($insertion);
                echo "valeur bien insérée";
        }catch(PDOException $e){
            echo "Echec : ".$e->getMessage();
        }


        ?>
    </body>
</html>