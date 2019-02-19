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
    
        public function commentaire(){
            $bdd = $this->dbConnect();
            $rep = $bdd->prepare('SELECT id, pseudo, commentaire, signalement FROM commentaires WHERE id_article = ?');
            $rep->execute(array($_GET['articles']));
            return $rep;
        }
    
        public function ajoutCommentaire(){
            //On insere dans la base de données le pseudo poster et le commentaire dans le table commentaires
            $bdd = $this->dbConnect();
            if (isset($_POST['pseudo']) && isset($_POST['commentaire'])){
            $req = $bdd->prepare('INSERT INTO commentaires(pseudo, commentaire, id_article) VALUES(:pseudo, :commentaire, :id_article)');
            $req->execute(array(
            'id_article' => htmlspecialchars($_GET['articles']),
            'pseudo' => htmlspecialchars($_POST['pseudo']),
            'commentaire' => htmlspecialchars($_POST['commentaire'])
            ));
            $req->closeCursor();
            return $req; 
		}    
    }
    
    
    
    
    
    
    
    
    
}