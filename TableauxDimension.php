<!DOCTYPE html>
<html>
<head>
    <title>Les tebleaux en PHP</title>
     <meta charset="UTF-8">
</head>
<body>
    <h1>Les tableaux à plusieurs dimensions</h1>


  
   
   <?php
   

   $membres = array(
       array('Jean de Dieu',28,'jeandedieu.emploi@gmail.com'),
       array('Eric',52,'erci@gmail.com'),
       array('Paul',45,'paul@live.com')
   );
    
   echo $membres[0][0]."a ".$membres[0][1]." ans "." son mail est : ".$membres[0][2]."<br/>";
   echo $membres[1][0]."a ".$membres[1][1]." ans "." son mail est : ". $membres[1][2]."<br/>";
   echo $membres[2][0]."a ".$membres[2][1]."  ans "." son mail est : ". $membres[2][2]."<br/>";

   for($ligne = 0; $ligne < 3; $ligne++){
       $membre_no = $ligne+1;
       
       echo"Membre numéro ".$membre_no."<br/>";

       echo "<ul>";
            for($col = 0; $col < 3; $col++)
            {
                   echo "<li>" .$membres[$ligne][$col]."</li>";

                }

       echo "</ul>";

   }
    ?>
   
 
</body>
</html>