<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Billet simple pour l'Alaska</title>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script type="text/javascript">
        tinyMCE.init({
            mode: "textareas",
            theme: "modern",
            forced_root_block : false,
            force_br_newlines : true,
            force_p_newlines : false
        });

    </script>
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
    
     <?php
        while ($donnees = $reponse->fetch())
		{
            ?>

    
    <div id="formulaire">
        
    <form method="post" name="editer" id="formulaire" action="">
        
            <label> Titre: </label>
            <?php echo '<input type="text" name="titre"  id="titre" value="' . $donnees['titre'] . '" />'; ?><br />

            <label>Date:</label>
            <?php echo '<input type="text" name="date"  id="date" value="' . $donnees['date'] . '" />';?><br />

 
                        <label>Categories</label>
                    <select name="categorie" id="categorie">
                        <option value="jour">Jour</option>
                        <option value="nuit">Nuit</option>
                    </select><br />


        <div id='tinymce'>
            <!--On recupere le message et on le met dans le champ du pluging tinycme-->
            <?php  echo '<textarea  name="message">' . $donnees['message'] . '</textarea>';?><br /><br />
        </div>


        <div id="twoButton">
            <input name="Submit" type="submit" value="valider" id="envoyez" />&nbsp;
        </div>

    </form>

    <?php
		}
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