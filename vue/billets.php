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
    
    <div class="separation"></div>
    
    <div id="ajoutCommentaire">
    
    <form method="post" action="" id="form">
            <div id="blockPseudo">
        <label for="pseudo" class="label">Votre pseudonyme:</label><br />
        <input type="text" name="pseudo" id="pseudo" required />

                </div>
        <div id="blockCommentaires">
        <label for="pseudo" class="label">Votre commentaire:</label><br />
           <textarea name="commentaire" id="messages" required></textarea>
                    </div>
            <div class="bouton">
       <input type="submit" class="submit"/>
                </div>
            </form>
    </div>
    
    
    <div id="commentaires">
    
        <?php
while ($donnees = $rep->fetch())
{
?>
        <h2><?php echo htmlspecialchars ($donnees['pseudo'])?></h2>
        <p><?php echo $donnees['commentaire']?>  

        <a href="../controller/controllerSignalement.php?signalement=ajoutSignalement&commentaire=<?php echo $donnees['id']; ?>&articles=<?= $_GET['articles']?>">Signaler</a>
            </p> 



    <?php
} // Fin de la boucle des commentaires
$rep->closeCursor();
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