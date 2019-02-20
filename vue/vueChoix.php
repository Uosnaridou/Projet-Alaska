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
    
    
        <div id="choix">

        <div id="creation">
            <!-- lien pour crée un nouvel article -->
            <a href="../controller/controllerAdmin.php?admin=creationBillets">Nouvel Articles</a>
        </div><br />

        <div id="modification">
            <!-- lien pour modifier ou supprimer un article -->
            <a href="../controller/controllerAdmin.php?admin=listeBillets">Modifier</a>
        </div><br />

        <div id="suppression">
            <!-- lien pour modifier ou supprimer un article -->
            <a href="../controller/controllerAdmin.php?admin=listeBillets">Supprimer</a>
        </div><br />

        <div id="signalement">
            <!-- lien pour voir les commentaire qui ont etaient signaler -->
            <a href="../controller/controllerSignalement.php?signalement=listeSignalement">Messages Signaler</a>
         
        </div>

    </div>
    
    
    </body>
</html>