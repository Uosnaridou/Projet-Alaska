<?php
class admin {
    
    
            public function __construct(){

        }
    
    
        private function objet(){
            $admin = $_GET['admin'];
            return $admin;
        }
    
        public function pages(){
            $admin = $this->objet();
            
            if ( $admin == 'connexion'){
                
                require '../modele/modeleUsers.php';
                $login = new users;
                $rep = $login->connexion();
                require '../vue/vueConnexion.php';

                
            }else if ( $admin == 'creationBillets'){
                
                require '../modele/modeleBillets.php';
                $billets = new billets();
                $req = $billets->creationBillet();
                require '../vue/vueCreation.php';
                    
            }else if( $admin == 'listeBillets'){
                
                require '../modele/modeleBillets.php';
                $billet = new billets();
                $rep = $billet->listeBillets();
                require '../vue/listeBillets.php';
                
                
            }else if ( $admin == 'modificationBillets'){
                
                require '../modele/modeleBillets.php';
                $post = new billets();
                $reponse = $post->billet();
                $rep = $post->modificationBillet();
                require '../vue/vueModification.php';
                
            }else if ( $admin == 'suppressionBillets'){
                
                require '../modele/modeleBillets.php';
                $supp = new billets();
                $reponse = $supp->suppressionBillet();
                require '../vue/listeBillets.php';
                
            }       
    }
    
 }
            
            
$postManager = new admin();
$admin = $postManager->pages();