<?php 
class signalementCommentaire{
    
    
    //On se connecte a la bdd
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
    
    
    public function ajoutSignalement(){
    //On rajoute 1 au signalemement
        $bdd = $this->dbConnect();
        $reponse = $bdd->prepare('UPDATE `commentaires` SET `signalement` = signalement + 1 WHERE id = ?');
        $reponse->execute(array($_GET['commentaire']));
        return $reponse;
    }
    

    public function listeSignalement(){
    //On selectionne tout les commentaires qui ont recus 5 ou plus de signalement
        $bdd = $this->dbConnect();
        $reponse = $bdd->prepare("SELECT id, pseudo, commentaire, signalement FROM commentaires WHERE signalement >= '5'");
        $reponse->execute();
        return $reponse;
    } 
    
    public function supprimerSignalement(){
            $bdd = $this->dbConnect();
            $rep = $bdd->prepare('DELETE FROM `commentaires` WHERE id = ?');
            $rep->execute(array($_GET['articles']));
            return $rep;  
        }
    
  
}