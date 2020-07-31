<!DOCTYPE html>

<html>
    <head>
        <title>Les fonctioncs en php</title>
    </head>

    <body>
        <?php

       //ouvrir un fichier

       $definition = fopen("definition.txt","r+");

       // premiere faon de lire un fichier PHP
      /* $affichageDef = fread($definition, 1000);

       //placer le contenu dans une variable qu'on pourra réutiliser

       echo $affichageDef;
       //fermer un fichier

       fclose($definition);*/
        
       // 2ème façon de lire un fichier php avec la condition feof

       /*while(!feof($definition)){
          echo fgets($definition);
       }
       
       fclose($definition);*/



       //pour écrire dans un fichier

       fwrite($definition,"Voilà le texte ajouté");

       fclose($definition);

        ?>



        <h1>Les mode de fichiers en PHP</h1>

        <p>
    “w” – Opens a file for write only. If file not exist then new file is created and if file already exists then contents of file is erased.<br>
    “r” – File is opened for read only.<br>
   
    “a” – File is opened for write only. File pointer points to end of file. Existing data in file is preserved.<br>
    “w+” – Opens file for read and write. If file not exist then new file is created and if file already exists then contents of file is erased.<br>
    “r+” – File is opened for read/write.<br>
    “a+” – File is opened for write/read. File pointer points to end of file. Existing data in file is preserved. If file is not there then new file is created.<br>
    “x” – New file is created for write only.<br>
    </p>



    <h1>Emplacement du curseur en fonction de mode fichier chosi</h1>

    <table style="width:100%">
  <tr>
    <th>MODE/FONCTION</th>
    <th>POSITION DU CURSEUR</th>
  
  </tr>
  <tr>
    <td>r/r+</td>
    <td>Pointe au début du fichier</td>
    
  </tr>
  <tr>
    <td>a/a+</td>
    <td>Pointe à la fin du fichhier</td>
 
  </tr>
  <tr>
    <td>w/w+</td>
    <td>Pointe au début du fichier</td>
 
  </tr>
  <tr>
    <td>fgets()</td>
    <td>Pointe à la fin de la ligne lue</td>
 
  </tr>
  <tr>
    <td>fgetc()</td>
    <td>Le curseur se place au niveau du caractère suivant</td>
 
  </tr>
</table> 
    </body>
</html>