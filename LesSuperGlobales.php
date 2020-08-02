<!DOCTYPE html>

<html>
    <head>
        <title>Les fonctioncs en php</title>
    </head>

    <body>
        <?php
     //Liste des superglobales en PHP

     
    /*$GLOBALS
    $_SERVER
    $_GET
    $_POST
    $_FILES
    $_COOKIE
    $_SESSION
    $_REQUEST
    $_ENV*/

  
    //utilisation $GLOBALS
     $x = 12;

     $y = 5;

     function Mult()
     {
         $GLOBALS['z'] = $GLOBALS['x'] * $GLOBALS['y'];// vu que 'z' est déclaré GLOBALS on pourra l'acceder globalement
     }

     Mult();

     echo $z;

   



        ?>
    </body>
</html>