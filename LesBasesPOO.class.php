
        <?php

        //La POO est moins linéaire # Procédurale

       /* On peut créer un code plus facile a réutiliser
         
       Une classe:

          - contiendra ensemble des fonction(méthode)
          - object = instance d'une classe
          -classe = moule pour fabriquer des object
          -Les objets ont accès à l'ensemble des méthodes et des propriété de leur moule(classe)
       
       */

    //Création de première classe

    class Visiteur{

        private $prenom;
        public $nom;

         //fonction setter

        public function set_prenom($nouveauPrenom){

            $this->prenom = $nouveauPrenom;

            }

            public function set_nom($nouveauNom){

                $this->nom = $nouveauNom;
    
                }

            //fonction getter

            public function get_prenom(){
            
                   return $this->prenom;
            }

            public function get_Nom(){
            
                return $this->nom;
         }
            

       
    }
          

        ?>
