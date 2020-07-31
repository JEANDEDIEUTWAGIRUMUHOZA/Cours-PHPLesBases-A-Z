<!DOCTYPE html>

<html>
    <head>
        <title>Les fonctioncs en php</title>
    </head>

    <body>
      
   <?php

    
     echo(date("d/m/Y"));

     //on peut utiliser la fonction checckdate pour vérifier si une date est valide

     ?> 
     <?php


var_dump(checkdate(12,31,-400));
echo "<br>";
var_dump(checkdate(2,29,2003));
echo "<br>";
var_dump(checkdate(2,29,2004));
?>





        
    </body>
</html>