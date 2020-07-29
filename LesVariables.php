<!DOCTYPE html>
<html>

<head>
    <title>Les variables en PHP</title>
    <meta charset="UTF-8">

</head>

  <body>

      <?php
       $departement = "Isère";//chaine de caractère
       $ville  = "Grenoble";
       $age = 18; //integer
       $marie = "true"; //booléen

       echo" Ma ville est ".$ville."<br/>"; // n'est pas préféré, attention br soit etre en guillement
        
       echo'Ma ville est '.$ville. ' et j\'ai '.$age.' ans'.'<br/>'; //on prefère les apostrophe

?>

<h1> Les Opérations sur les variables</h1>

<?php

 $nombre1  = 5;
 $nombre2 = 70;
$somme =$nombre1 + $nombre2;

echo"somme = ".$somme."<br/>";

 echo'La somme de '.$nombre1.'et'.$nombre2.' est égale à = '. ($nombre1 + $nombre2);

?>
  </body> 
</html>