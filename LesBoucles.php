<!DOCTYPE html>
<html>
    <head>
        <title>Les boucles en PHP</title>
    </head>

    <body>
        <?php

        /*on utilisera les boucles pour éxecuter une instructio un certain
        *nombre de fois tand que une telle consition est vrai
        *attention, il faut que la condition soit fausse un moment donné
        *sinon la boucle va boucler à l'infini
        */

        //Boucle while
        $x = 1;
        while($x <= 10){
            echo "ça c'est le nombre: ".$x."<br/>";
            $x++;
        }
        ?>

        <h1>La boucle do while</h1>

        <?php

        //la boucle do while doit s'éxecuter aumoins une fois avant de vérifier une condition donnée

        $a =20;

        do{
             echo"Ceci est le nombre: ".$a."<br/>";
        }while($a <= 10);
         
        for($a=1;$a<= 10;$a++){
            echo"Vous etes le numéro  : ".$a."<br/>";
        }
        ?>


     <h1>La boucle for</h1>

    <?php

    
      for($a=1;$a<= 10;$a++){
       echo"Vous etes le numéro  : ".$a."<br/>";
     }
    ?>
      </body>
</html>