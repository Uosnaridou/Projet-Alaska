<?php
class users{
    
    
            private function dbConnect(){
            try
        {
$bdd = new PDO('mysql:host=localhost;dbname=projet4;charset=utf8','root','');
            }
            catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }        
            return $bdd;
    }
    
    
    
    public function connexion(){
            
$login_valide = "admin";
$pwd_valide = "demo";

if (isset($_POST['username']) && isset($_POST['password'])) {

	if ($login_valide == $_POST['username'] && $pwd_valide == $_POST['password']) {
		session_start ();
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['password'] = $_POST['password'];

		header ('location: ../vue/vueChoix.php');
	}
	else {
		echo "Vous n'avez pas le droit d'acceder a cette page, seul l'administrateur le peux";

	}
}
    }
    
    
    public function deconnection(){
// On démarre la session
session_start ();

// On détruit les variables de notre session
session_unset ();

// On détruit notre session
session_destroy ();

// On redirige le visiteur vers la page d'accueil
header ('location: ../index.php');

    }
    
    
    
}