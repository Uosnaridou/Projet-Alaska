<?php
class controllerCategories {
    
    
            private function objet(){
            $categorie = $_GET['categorie'];
            return $categorie;
        }
    
    
    
        
        public function pages(){
            $categorie = $this->objet();
            
            if ( $categorie == 'jour'){
                
                require '../modele/modeleCategories.php';
                $jour = new categories;
                $reponse = $jour->jour();
                require '../vue/vueCategories.php';

                
            }else if ( $categorie == 'nuit'){
                
                require '../modele/modeleCategories.php';
                $nuit = new categories();
                $reponse = $nuit->nuit();
                require '../vue/vueCategories.php';
                    
            }     
    }
    
   
    
}

$postManager = new controllerCategories();
$categorie = $postManager->pages();