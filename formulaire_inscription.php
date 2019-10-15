<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Oxygen|Nunito|PT+Sans" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="flex/flexslider.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="flex/jquery.flexslider-min.js"></script>

<title>Ebuy</title>

</head>
	<body>
		<header>
	       <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		            <a class="navbar-brand" href="index.php">Accueil</a>
		            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		                <span class="navbar-toggler-icon"></span>
		            </button>
		            <div class="collapse navbar-collapse" id="navbarSupportedContent">
		                <ul class="navbar-nav mr-auto">     
		                    <li class="nav-item dropdown">
							    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Identifiez-vous</a>
							    <div class="dropdown-menu">
							      <a class="dropdown-item" href="formulaire_connexion.php">Se connecter</a>
							      <div class="dropdown-divider"></div>
							      <a class="dropdown-item" href="formulaire_inscription.php">Nouveau client ?<span class="compte"> Créez un compte</span></a>
							    </div>
							  </li>
		                    <li class="nav-item">
		                        <a class="nav-link" href="#">Vendre un article</a>
		                    </li>
	                   </ul>
		                <form method="POST" action="home" class="form-inline my-2 my-lg-0" >
		                    <input class="form-control mr-sm-2" type="search" placeholder="Rechercher un article" aria-label="Search" name="nomArticle">
		                    <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Recherche</button>
		                </form>
		            </div>
	         </nav>
		</header>
		<main>			
			<!-- ********** -->
			<!-- FORMULAIRE -->
			<!-- ********** -->
			<form method="post" action="inscription.php" class="container">
			  <fieldset class="col-6 offset-md-2">
			  		<legend class="inscription text-center">Inscription</legend>
		             <div class="split-50 border text-center">
	                  <h3 class="text-center">Créez votre compte</h3>
	                  	 <div class="cadre">
			                <div class="form-group">
			                    <label for="Pseudo"> Pseudo :</label>
			                    <input type="text" class="form-control" name="pseudo" id="Pseudo" placeholder="Pseudo" required>
			                </div>
			                    <div class="form-group">
			                    <label for="Email"> Email :</label>
			                    <input type="email" class="form-control" name="email" id="Email" placeholder="Email" required>
			                </div>
			                <div class="form-group">
			                    <label for="MotdePasse">Mot de passe :</label>
			                    <input type="password" class="form-control" name="password" id="MotdePasse" placeholder="Mot de passe" required>
			                </div>
			                     <div class="form-group">
			                    <label for="RmotdePasse">Confirmez le mot de passe :</label>
			                    <input type="password" class="form-control" name="passrepeat" id="RmotdePasse" placeholder="Mot de passe" required>
			                </div>
			             </div>
			                <br>
			                <button type="submit" class="btn btn-outline-info" name="inscription">Créer mon compte</button>
				         <?php
							if (!empty($erreurs)) {
								echo '<ul class="erreur">'."\n";
								foreach($erreurs as $e) {
									echo
									' <li>'.$e.'</li>'."\n"; 
								}
								echo '</ul>';
							} 				
						?>
			          </div>		
			   </fieldset>
			</form>
		</main>
<footer>
	<nav>
		<a href="index.php">Acceuil</a><a href="#">FAQ</a><a href="#">Contact</a><a href="formulaire_connexion.php">Se connecter</a> 
	</nav>
	<div>
	  <strong>Suivez nous sur les réseaux sociaux !</strong>
		<p> Achetez aux enchères, en salle ou sur Internet. 281 commissaires-priseurs garantissent les objets.
		 Ces derniers publient quotidiennement en ligne les informations relatives à leurs prochaines ventes aux enchères sur le site. 
		 Ils permettent ainsi aux acheteurs du monde entier de consulter gratuitement la quasi-totalité des annonces de ventes aux enchères en France.</p>
	</div>
</footer>
</body>

