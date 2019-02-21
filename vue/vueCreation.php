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
    
    
    <div id="formulaire">
            <h2>Nouveaux billets</h2>
        <form method="post" action="" id="formulaire" enctype="multipart/form-data">

                            <label>Titre du billet</label>
            <input type="text" name="titre" placeholder="Titre" id="titre" /><br />
            
                        <label>date</label>
            <input type="date" name="date" placeholder="Date" id="date" /><br>
            
                        <label>Categories</label>
                    <select name="categorie" id="categorie">
                        <option value="jour">Jour</option>
                        <option value="nuit">Nuit</option>
                    </select><br />
            
            
                <textarea name="message" id='tinymce'></textarea>

    
    <input name="submit" type="submit" value="valider" id="valider" />
    
    
    
    
    
    
    
    
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