<?php

if (isset($_POST['enregistrer'])){

           	$nomarticle =  $_POST['nomArticle']; // On récupère le nom de l'article
            $description = $_POST['description'];// on récupère la description
            $image = $_POST['image']; // On récupère l'image
            $prixarticle = $_POST['prix']; // On récupère le prix

try{
$bdd = new PDO('mysql:host=localhost;dbname=ebuy', 'root', '');
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$bdd->exec("SET NAMES UTF8");
$req = $bdd->prepare("INSERT INTO articles(nomArticle, description, image, prixArticle) VALUES(?, ?, ?, ?)");
$req->execute(array($nomarticle,
					$description,
					$image,
					$prixarticle
    				));	
	}
		catch(PDOException $e) {
		echo "Erreur de connexion! Message :". $e->getMessage(). "</br>";
	 }
	 header('Location: index.php');
	 exit();

	}