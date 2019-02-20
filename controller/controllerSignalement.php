<?php
class signalement {
    

        private function objet(){
            $signalement = $_GET['signalement'];
            return $signalement;
        }
    
        public function pages(){
            $signalement = $this->objet();
            
            if ( $signalement == 'listeSignalement'){
                require '../modele/modeleSignalement.php';
                $liste = new signalementCommentaire;
                $reponse = $liste->listeSignalement();
                require '../vue/vueSignalement.php';
                
                
            }else if ( $signalement == 'ajoutSignalement'){
                require '../modele/modeleSignalement.php';
                $ajout = new signalementCommentaire;
                $reponse = $ajout->ajoutSignalement();
                
                       $articles = $_GET['articles'];
               header('Location: controllerArticles.php?articles=' . $articles . '');

                
                
            }else if ( $signalement == 'supprimerSignalement'){
                require '../modele/modeleSignalement.php';
                $supp = new signalementCommentaire;
                $rep = $supp->supprimerSignalement();
                
                $reponse = $supp->listeSignalement();

                require '../vue/vueSignalement.php';
         
                    
            }      
    }
    
 }
            
            
$postManager = new signalement();
$signalement = $postManager->pages();