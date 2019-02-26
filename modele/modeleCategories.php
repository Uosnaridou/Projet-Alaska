<?php
class categories {
    
    
    
        private function dbConnect(){
                        try
        {
        $bdd = new PDO('mysql:host=localhost;dbname=w67xbo_alaska;charset=utf8','w67xbo_alaska','timelia2508');
        }
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