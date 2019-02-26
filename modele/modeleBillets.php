<?php
class billets {
    
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

    
         public function billet(){
            $bdd = $this->dbConnect();
            // Récupération du billet
            $reponse = $bdd->prepare('SELECT id, titre, date, categorie, message FROM articles WHERE id = ?');
            $reponse->execute(array($_GET['articles']));
            return $reponse;
        }
    
        public function creationBillet(){
            $bdd = $this->dbConnect();
            if (isset($_POST['titre']) && isset($_POST['date']) && isset($_POST['categorie']) && isset($_POST['message'])){
            $req = $bdd->prepare('INSERT INTO articles(titre, date, categorie, message) VALUES(:titre, :date, :categorie, :message)');
            $req->execute(array(
            'titre' => $_POST['titre'],
            'date' => $_POST['date'],
            'categorie' => $_POST['categorie'],
            'message' => $_POST['message']
            ));
            
        }
      
  } 
            public function listeBillets(){
            $bdd = $this->dbConnect();
            // Récupération du billet
            $reponse = $bdd->prepare('SELECT id, titre, date, categorie, message FROM articles');
            $reponse->execute();
            return $reponse;
        }
        
        public function modificationBillet(){
                        if(!empty($_POST)){
            $titre = $_POST['titre'];
            $date = $_POST['date'];
            $categorie = $_POST['categorie'];
            $message = $_POST['message'];

            $bdd = $this->dbConnect();
            $rep = $bdd->prepare("UPDATE `articles` SET `message`= '" . $message . "' , `titre`= '" . $titre . "' , `date`= '" . $date . "' , `categorie`= '" . $categorie  . "' WHERE id = ?");
            $rep->execute(array($_GET['articles']));
                return $rep;
            }
        }
    
    
            public function suppressionBillet(){
            $bdd = $this->dbConnect();                         
            $reponse = $bdd->prepare('DELETE FROM `articles` WHERE id = ?');
            $reponse->execute(array($_GET['articles']));
            return $reponse;
    }

    
    
    
}