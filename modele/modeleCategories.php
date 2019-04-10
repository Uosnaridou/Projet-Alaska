<?php
class categories {
    
    
    
        private function dbConnect(){
                        try
        {
                            $bdd = new PDO('mysql:host=localhost;dbname=projet4;charset=utf8','root','');        }
            catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }        
            return $bdd;
        }
    
        public function jour(){
            $bdd = $this->dbConnect();
            $reponse = $bdd->prepare("SELECT * FROM `articles` WHERE categorie = 'Jour'");
            $reponse->execute();
            return $reponse;
        }
    
        public function nuit(){
            $bdd = $this->dbConnect();
            $reponse = $bdd->prepare("SELECT * FROM `articles` WHERE categorie = 'Nuit'");
            $reponse->execute();
            return $reponse;
        }
    
    
}