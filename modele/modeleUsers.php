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
            
           if(!empty($_POST)){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $bdd = $this->dbConnect();

        if( $username == 'admin' && $password == 'demo'){
                        header('Location: ../vue/vueChoix.php');

        }else{
             echo "Vous n'avez pas le droit d'acceder a cette page";
                
                }
        

    }
    }
    
    
    
    
    
    
}