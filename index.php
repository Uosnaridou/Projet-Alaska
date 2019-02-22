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
        <a href="#menu">Accueil</a>
        <a href="controller/controllerAdmin.php?admin=connexion">Admin</a>
        </div>
    </header>
        
<img src="img/alaska.jpg" alt="imageSlideAlaska" class="slide" />

    <div id='articles'>
            <?php 
        $bdd = new PDO('mysql:host=localhost;dbname=projet4','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        
        $requete = $bdd->query('SELECT id, titre, categorie, message, date FROM articles');
        
        while($donnees = $requete -> fetch())
      { ?>
        
        <h2><?php echo htmlspecialchars ($donnees['titre'])?></h2>
        <p><?php $date = $donnees['date'];
        echo date('d-m-Y', strtotime($date));?></p>   
        <p><?php echo $donnees['message']?></p> 
        <p><?php echo $donnees['categorie']?></p>   
<a href="controller/controllerArticles.php?articles=<?php echo $donnees['id']; ?>">Lire la suite</a>
        
        <?php
        }
        ?>
    
    
    </div>
    
    <footer>
        <h3>Catégories :</h3>
<ul>
  <li><a href="controller/controllerCategories.php?categorie=jour">Jour</a></li>
  <li><a href="controller/controllerCategories.php?categorie=nuit">Nuit</a></li>
</ul>

        
    
    </footer>
    
</body>
</html>