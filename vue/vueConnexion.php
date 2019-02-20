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
    
    <div id="connexion">
    
      <form action="" method="POST" id="form">

            <p><label for="">Pseudo: &nbsp;</label>
                <input type="text" name="username" id="champPseudo" /></p>

            <p><label for="">Mot de passe: &nbsp;</label>
                <input type="password" name="password" id="champPseudo" /></p>

            <button type="submit" id="bouttonConnecter">Se connecter</button>

        </form>
    
    </div>
    
    
    </body>
</html>