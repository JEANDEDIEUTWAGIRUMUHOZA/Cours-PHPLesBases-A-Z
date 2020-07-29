<!DOCTYPE html>
<html>
    <head>
        <title>Les conditions en PHP</title>
    </head>

    <body>

        <?php
          //On utiler des conditons pour donner un résultat différent suivant l'état
          $note = 3;
          switch ($note) {
            case 1:
              echo "vous etes nul";
              break;
            case 2:
                  echo"vous etes moyen";
              break;
            case 3:
                 echo"vous etes au dessus de moyenne";
              break;
              
            default:
              echo"bof";
          }

        ?>
    </body>
</html>