<?php
class billets {
    
        private function dbConnect(){
            try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=projet4;charset=utf8','root','');
        }
            catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }        
            return $bdd;
    }

    
         public function billet(){
            $bdd = $this->dbConnect();
            // Récupération du billet
            $reponse = $bdd->prepare('SELECT id, titre, date, categorie, message FROM articles WHERE id = ?');
            $reponse->execute(array($_GET['articles']));
            return $reponse;
        }
    
    

    
    
    
    
    
    
    
    
    
}