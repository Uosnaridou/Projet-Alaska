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
        <a href="controller/controllerAdmin.php?admin=choixAdmin">Admin</a>
        </div>
    </header>
        
<img src="img/alaska.jpg" alt="imageSlideAlaska" id="slide" />

    <div id='articles'>
            <?php 
        $bdd = new PDO('mysql:host=localhost;dbname=projet4','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        
        $requete = $bdd->query('SELECT id, titre, categorie, message, date FROM articles');
        
        while($donnees = $requete -> fetch())
      { ?>
        
        <h2><?php echo htmlspecialchars ($donnees['titre'])?></h2>
        <p><?php echo $donnees['categorie']?></p>   
        <p><?php echo $donnees['message']?></p> 
        <p><?php $date = $donnees['date'];
        echo date('d-m-Y', strtotime($date));?></p>   
<a href="controllerAdmin.php?admin=modificationBillets&articles=<?php echo $donnees['id']; ?>">modifier</a>
  <a href="controllerAdmin.php?admin=suppressionBillets&articles=<?php echo $donnees['id']; ?>">Supprimer</a>
      
        <?php
        }
        ?>
    
    
    
    
    
    
    </div>
    
    
    
</body>
</html>