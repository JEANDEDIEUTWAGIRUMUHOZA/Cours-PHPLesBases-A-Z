<!DOCTYPE html>
<html>
    <head>
        <title>Les conditions en PHP</title>
    </head>

    <body>

        <?php
          //On utiler des conditons pour donner un résultat différent suivant l'état

          $age = 17;
          $sexe ="F";
        
          if($age < 18 && $sexe =="F"){
              echo" Bonjour Madame vous n'avez pas le droit de voter";
          }elseif($age <= 18 && $sexe =="F"){
              echo"Bonjour Madame vous avez le droit de voter";

          } if($age < 18 && $sexe =="M"){
            echo" Bonjour Monsieur vous n'avez pas le droit de voter";
          }elseif($age >= 18 && $sexe =="M"){
            echo"Bonjour Monsieur vous avez le droit de voter";
        }else{
            echo"valeurs inconnue";
        }

        ?>
    </body>
</html>