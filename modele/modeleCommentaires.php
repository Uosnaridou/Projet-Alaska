<?php
class commentaires {
    
        
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