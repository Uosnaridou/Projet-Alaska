<?php
require 'modele/modeleBillets.php';
    $post = new billets();
$reponse = $post->listeBillets();
require 'vue/pageAccueil.php';