<!DOCTYPE html>

<html>
    <head>
        <title>Les fonctioncs en php</title>
    </head>

    <body>
        <?php
        
        //fonction array_keys, retourne  les clés dans un tableau

        $voitures = array(
            "Citroen" => "DS3",
            "Renault" => "Clio",
            "Peugeot" => "306"
        );

        print_r(array_keys($voitures))."<br>/";

        

        ?>
        <?php
        //fonction array_vaalues pour afficher les valeurs dans un tableau

        $loisir = array(
                 "musique" =>"Piano",
                 "film" => "Witcher3",
                 "sport" => "musculation"
        );

        print_r(array_values($loisir))."<br/>";
        ?>


         <?php

         //fonction array_key_exists pour savoir si une clé existe dans un tableau

         $moto = array(
             "Honda" => "123",
             "Yamaha" => "546",
             "AG100" => "789"
         );

         if(key_exists("Honda",$moto)){
             echo"oui Honda existe"."<br/>";
         }
          ?>

          <?php

          /*fonction in_array pour rechercher un element dans un tableau
          attention cette fonction est sensible à la 
          
          */

          //la fonction in array search pour rechercher dans un tableau


          //count pour compter le nombre des élémnets dans un tableau

          $personnes = array("Jean","Barrril","Jacques","Pierre","Mano","Catherine","Audrey","Chavant");

           echo count($personnes);


        
          ?>

     <br>
       <?php

    
       //fonction  array_diff_assoc pour comparer 2 tableaux

     $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
     $a2=array("a"=>"red","b"=>"green","c"=>"blue");

     $result = array_diff_assoc($a1,$a2);
     print_r($result);

     /*pour avoir les simultude entre les différents tableau
     il faudra utilser array_intersect_assoc

     */


     //Fonction pour remplier ou suppprimer dans un tableau

     //array_fill(), o indiquue l'inderx où commencer, 5 index fin puis vert la valeur à remplier
     
     print_r(array_fill(0,5,"vert"))."<br/>";



     //array_fill_keys va nous servir pour insérer les clés dans un tableau

     //array_push et array_pop

     $couleurs = array("vert","bleu");

     array_push($couleurs,"rouge","marron");
     print_r($couleurs);
    
     ?> 
     <?php
     /*array_splice pour supprimer des éléments dans un tableau, elle va a voir besion des 
     elements à supprimers, des elements qui remplaceront des eachelement
     supprimés er elle retournera le tableau de séléments supprimé*/

     $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
     $a2=array("a"=>"red","b"=>"green","c"=>"blue");



     //arra_merge pour combiner les tableaux

     print_r(array_merge($a1,$a2));

      

     //pour supprimer les doublons dans un tableau on utilisera array_unique

     //la fonction sort nous aidera à ranger du plus petit au plus grand puis resort fera  l'inverse

     $nombres = array(54,23,14,7,5,9,0,4,789);
     ?>


     <br>

     <?php

      //la fonction sort nous aidera à ranger du plus petit au plus grand puis resort fera  l'inverse

      $nombres = array(54,23,14,7,5,9,0,4,789);
      sort($nombres);

      //print_r(asort($nombres));

      $longueur = count($nombres);

      for($x = 0; $x <= $longueur; $x++){
          
        echo $nombres[$x];
      }

      //utiliser arsort pour ordre décroissant
      ?>
     

    </body>
</html>