<?php
require '../modele/modeleBillets.php';
require '../modele/modeleCommentaires.php';


$post = new commentaires();
$req = $post->ajoutCommentaire();
$rep = $post->commentaire();


$post = new billets();
$reponse = $post->billet();

require '../vue/billets.php';