<?php
session_start();
?>
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
    
    <div id="connexion">
    
      <form action="" method="POST" id="formConnexion">

            <p><label for="">Pseudo: &nbsp;</label>
                <input type="text" name="username" id="champPseudo" /></p>

            <p><label for="">Mot de passe: &nbsp;</label>
                <input type="password" name="password" id="champPseudo" /></p>

            <button type="submit" class="submitConnexion">Se connecter</button>

        </form>
        
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