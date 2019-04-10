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

    
     <?php
        while ($donnees = $reponse->fetch())
		{
            ?>

    
    <div id="formulaire">
                    <h2>Modifier un billet</h2>
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
            <input name="Submit" type="submit" value="valider" id="valider" />&nbsp;
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