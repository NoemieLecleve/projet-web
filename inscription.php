<?php

if (isset($_POST['inscription'])){

           	$pseudo =  $_POST['pseudo']; // On récupère le pseudo
            $email = $_POST['email'];// on récupère l'email
            $password = $_POST['password']; // On récupère le mot de passe
            $passrepeat = $_POST['passrepeat']; // On récupère le mot de passe 
 

             $erreurs = array();

            //  Vérification du pseudo
            if(empty($pseudo)){

                $erreurs['pseudo'] = "Le nom d' utilisateur ne peut pas être vide.";

            }else if(strlen($pseudo) < 4) {

            	 $erreurs['pseudo'] = "Le pseudo doit contenir au moins 4 caractères.";

            }       

            // Vérification du mail
            if(empty($email)){

                $erreurs['email'] = "Le mail ne peut pas être vide.";
                
            }else if(!preg_match("/^[a-z0-9\-_.]+@[a-z]+\.[a-z]{2,3}$/i", $email)){

                $erreurs['email'] = "Le mail n'est pas valide.";

            }

            // Vérification du mot de passe
             if(empty($password && $passrepeat)){

                $erreurs['password'] = "Le mot de passe ne peut pas être vide.";

            }
            else if(strlen($password) < 5) {
   
                $erreurs['password'] = "Le mot de passe doit contenir au moins 5 caractères.";

            }else if($password != $passrepeat){

                $erreurs['password'] = "La confirmation du mot de passe ne correspond pas.";

            }else if($password = $passrepeat){

            $pass_hache = password_hash($password, PASSWORD_DEFAULT);
       		 }
            

           // var_dump($erreurs);
          

if (empty($erreurs)) {
// Insertion dans la base de données
	try{
$bdd = new PDO('mysql:host=localhost;dbname=ebuy', 'root', '');
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$bdd->exec("SET NAMES UTF8");
$req = $bdd->prepare("INSERT INTO utilisateurs(pseudo, email, password) VALUES(?, ?, ?)");
$req->execute(array($pseudo,
					$email,
					$pass_hache
    				));	
	}
		catch(PDOException $e) {
		echo "Erreur de connexion! Message :". $e->getMessage(). "</br>";
	 }
	 	header('Refresh:5;url=index.php');
	 	echo "<div style='text-align: center; padding:15px;'>
	 			<h3 style='color:#2E3031; font-family:Helvetica;'>Votre inscription a bien été enregistré. Vous allez être redirigé dans 5 secondes vers la page d'acceuil</h3>
	 		 </div>"; // Succès de l'inscription
      	exit();
	 
 }
   

}	

include 'formulaire_inscription.php';			