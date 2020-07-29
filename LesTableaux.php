<!DOCTYPE html>
<html>
<head>
    <title>Les tebleaux en PHP</title>
     <meta charset="UTF-8">
</head>
<body>
    <h1>Boucler sur Les tableaux numérotés ou indexés</h1>


    <?php
    //Les tableau indexés ou numérotés

    $prenoms = array('Durand','Toto','Jean','Dede','Claire','Lucie','Laurent');

    //echo"Je m'appelle ".$prenoms[0]."<br/>";
     for($x = 0; $x <= 6; $x++){
         echo $prenoms[$x]."<br/>";// on passe le x pour appeler les indices dans le tableau
     }

     foreach($prenoms as $elements){
         echo $elements."<br/>";
     }

    
    ?>
   
    
<?php
    //Les tableaux associatifs

    $age = array(
        
        'Durand' => 74,
        'Jean' => 25);

    //echo"Durant a  ".$age['Durand']." ans"."<br/>";

    foreach($age as $clef => $valeur){
        echo "L'age de ".$clef."est: ".$valeur."<br/>";//clef correspond au prenom et valeur à l'age
    }
    ?>
</body>
</html>