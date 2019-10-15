<?php 

$pseudo =  $_POST['pseudo']; // On récupère le pseudo

//  Récupération de l'utilisateur et de son pass hashé
$bdd = new PDO('mysql:host=localhost;dbname=ebuy', 'root', '');
       $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $bdd->exec("SET NAMES UTF8");
$req = $bdd->prepare('SELECT id, password FROM utilisateurs WHERE pseudo = :pseudo');
$req->execute(array('pseudo' => $pseudo)); 
$resultat = $req->fetch();

// Comparaison du pass envoyé via le formulaire avec la base
$CorrectPassword = password_verify($_POST['password'], $resultat['password']);

$err_connexion = array();

if (!$resultat)
{
    $err_connexion['password'] = "Mauvais identifiant ou mot de passe !";
}
else
{
    if ($CorrectPassword) {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['pseudo'] = $pseudo;
        header('Location: index.php');
        exit();

    }
    else {
        $err_connexion['password'] = "Mauvais identifiant ou mot de passe !";
    }
}


    

include 'formulaire_connexion.php';