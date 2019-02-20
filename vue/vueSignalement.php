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
        <a href="../index.php">Accueil</a>
        <a href="controller/controllerAdmin.php?admin=connexion">Admin</a>
        </div>
    </header>
        
<img src="img/alaska.jpg" alt="imageSlideAlaska" id="slide" />
    
        <div id='messageSignaler'>
    
    
        
        <?php
while ($donnees = $reponse->fetch())
{
?>
        <h2><?php echo htmlspecialchars ($donnees['pseudo'])?></h2>
        <p><?php echo $donnees['commentaire']?></p>   
  <a href="../controller/controllerSignalement.php?signalement=supprimerSignalement&articles=<?php echo $donnees['id']; ?>">Supprimer</a>

    <?php
} // Fin de la boucle des commentaires
$reponse->closeCursor();
?>
    

    
    </div>