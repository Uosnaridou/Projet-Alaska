<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Billet simple pour l'Alaska</title>

</head>

<body>
    <header>
        <h1>Billet simple pour l'Alaska</h1>
        <div id="menu">
        <a href="../index.php">Accueil</a>
            <?php if (isset ($_SESSION['username']) == 'admin' && isset($_SESSION['password']) == 'demo' ) { ?>
            <a href="../vue/vueChoix.php">Admin</a>
            <a href="controllerAdmin.php?admin=deconnection">Deconnection</a>

<?php }else { ?>
            <a href="controllerAdmin.php?admin=connexion">Connexion</a>
<?php
} ?>
        </div>
    </header>
        
<img src="../img/alaska.jpg" alt="imageSlideAlaska" class="slide" />
<a href="../vue/vueChoix.php">Retour au choix de l'administrateur</a>
    
        <div id='commentaireSignaler'>
    
    
        
        <?php
while ($donnees = $reponse->fetch())
{
?>
        <h2><?php echo htmlspecialchars ($donnees['pseudo'])?></h2>
            <p>Nombre de signalements: <?php echo $donnees['signalement']?></p>   
        <p><?php echo $donnees['commentaire']?></p>   
  <a href="../controller/controllerSignalement.php?signalement=supprimerSignalement&articles=<?php echo $donnees['id']; ?>">Supprimer</a>

    <?php
} // Fin de la boucle des commentaires
$reponse->closeCursor();
?>
    

    
    </div>
    
        <footer>
        <h3>Catégories :</h3>
<ul>
  <li><a href="../controller/controllerCategories.php?categorie=jour">Jour</a></li>
  <li><a href="../controller/controllerCategories.php?categorie=nuit">Nuit</a></li>
</ul>

        
    
    </footer>
    
    </body>
</html>