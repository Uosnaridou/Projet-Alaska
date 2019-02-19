<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Billet simple pour l'Alaska</title>

</head>

<body>
    <header>
        <h1>Billet simple pour l'Alaska</h1>
        <div id="menu">
        <a href="#Accueil">Accueil</a>
        <a href="#Admin">Admin</a>
        </div>
    </header>
        
<img src="../img/alaska.jpg" alt="imageSlideAlaska" class="slide" />
    

    
    <a href="../index.php">Retour à la liste des articles</a>

    
    <div id="articles">

    <?php
while ($donnees = $reponse->fetch())
{
?>
        <h2><?php echo htmlspecialchars ($donnees['titre'])?></h2>
        <p><?php echo $donnees['categorie']?></p>   
        <p><?php echo $donnees['message']?></p> 
        <p><?php $date = $donnees['date'];
        echo date('d-m-Y', strtotime($date));?></p>   
    <?php
} // Fin de la boucle des commentaires
$reponse->closeCursor();
?>

    </div>
    
    <div id="ajoutCommentaire">
    
    <form method="post" action="" id="form">
            <input type="text" name="pseudo" id="champPseudo" required />
           <textarea name="commentaire" id="messages" required="required"></textarea>
            <input type="submit" id="submit"/>
            </form>
    </div>
    
    
    <div id="commentaires">
    
        <?php
while ($donnees = $rep->fetch())
{
?>
        <h2><?php echo htmlspecialchars ($donnees['pseudo'])?></h2>
        <p><?php echo $donnees['commentaire']?></p>   
        <p><?php echo $donnees['signalement']?></p> 

    <?php
} // Fin de la boucle des commentaires
$rep->closeCursor();
?>
    
    
    
    
    </div>
    
    </body>
</html>