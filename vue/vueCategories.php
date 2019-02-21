<!DOCTYPE html>
<html>

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
        <a href="../controller/controllerAdmin.php?admin=connexion">Admin</a>
        </div>
    </header>
        
<img src="../img/alaska.jpg" alt="imageSlideAlaska" class="slide" />
    

    

    
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
    
       <footer>
        <h3>Catégories :</h3>
<ul>
  <li><a href="../controller/controllerCategories.php?categorie=jour">Jour</a></li>
  <li><a href="../controller/controllerCategories.php?categorie=nuit">Nuit</a></li>
</ul>

        
    
    </footer>
    
    </body>
</html>