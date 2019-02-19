<?php
require '../modele/modeleBillets.php';

$post = new billets();
$reponse = $post->billet();
$rep = $post->commentaire();
$req = $post->ajoutCommentaire();


require '../vue/billets.php';