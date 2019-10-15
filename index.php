<?php
session_start();
?>
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

<script>

$(window).on('load', function() {
			$('.flexslider').flexslider({
				directionNav: true,
				controlNav: true
			});
		});
 

</script>
</head>
<body>   
<header>
	<?php if (isset($_SESSION['id']) AND isset($_SESSION['pseudo'])): ?> 
     	 	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	            <a class="navbar-brand" href="index.php">Accueil</a>
	            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	                <span class="navbar-toggler-icon"></span>
	            </button>
		            <div class="collapse navbar-collapse" id="navbarSupportedContent">
		                <ul class="navbar-nav mr-auto">     
		                    <li class="nav-item dropdown">
							  <a class="nav-link" href="#" role="button" aria-haspopup="true" aria-expanded="false">
							     Bonjour <?php echo	$_SESSION['pseudo']; ?></a> 
							</li>
		                    <li class="nav-item">
		                        <a class="nav-link" href="vendre_article.php">Vendre un article</a>
		                    </li>
		                    <li class="nav-item">
		                        <a class="nav-link" href="deconnexion.php">Se Déconnecter</a>
		                    </li>
		                   </ul>
		                <form method="POST" action="" class="form-inline my-2 my-lg-0" >
		                    <input class="form-control mr-sm-2" type="search" placeholder="Rechercher un article" aria-label="Search" name="nomArticle">
		                    <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Recherche</button>
		                </form>
		            </div>
          	</nav>
         <?php else: ?> 
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
							      <a class="dropdown-item" href="formulaire_inscription.php">Nouveau client ? <span class="compte"> Créez un compte<span></a>
							    </div>
							  </li>
		                    <li class="nav-item">
		                        <a class="nav-link" href="formulaire_connexion.php">Vendre un article</a>
		                    </li>
		                   </ul>
		                <form method="POST" action="home" class="form-inline my-2 my-lg-0" >
		                    <input class="form-control mr-sm-2" type="search" placeholder="Rechercher un article" aria-label="Search" name="nomArticle">
		                    <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Recherche</button>
		                </form>
		            </div>
            </nav>
          <?php endif; ?> 
</header>
<main class="index"> 
		<div class="bandeau">
			<h1>Profitez d'offres exceptionnelles sur des milliers d'articles !</h1>
		</div>
		<div class="flexslider">
			<ul class="slides">
				<li>
					<img src="images/room.jpg" alt="Bureau">
				</li>
				<li>
					<img src="images/turntable.jpg" alt="Bureau">
				</li>
				<li>
					<img src="images/bed.jpg" alt="">
				</li>
			</ul>
		</div>
      <div class="row">
		<div class="col ml-5">
	       <form method="POST" action="">
			  <div class="form-group row col-11">
			    <input type="search" class="form-control col-3" id="texte" placeholder="Rechercher... " name="nomArticle">
			  </div>
			  <div class="form-group row">
			     <select class="mdb-select md-form ml-3 mt-1 font-weight-light"  name="noCategorie">		  
						  <option value="">Informatique</option>	
						  <option value="">Electroménager</option>
						  <option value="">Maison</option> 
						  <option value="">Livres</option>   
				</select>    
			  </div>	
	  	    <fieldset class="form-group">
			    <div class="row text-left">	      
			      <div class="col-sm-6">
                    <strong>Prix</strong>
			        <div class="form-check">
			         <label class="form-check-label">
					    <input type="radio" class="form-check-input selectVente" name="prix">De 0 à 50€
					  </label>
			        </div>
			        <div class="form-check">
			          <label class="form-check-label">
					    <input type="radio" class="form-check-input selectVente" name="prix">de 50 à 100€
					  </label>
			        </div>
			        <div class="form-check">
			          <label class="form-check-label">
					    <input type="radio" class="form-check-input selectVente" name="prix">de 100 à 200€
					  </label>
			        </div>
			         <div class="form-check">
			          <label class="form-check-label">
					    <input type="radio" class="form-check-input selectVente" name="prix">de 200 à 500€
					  </label>
			        </div>
			        <div class="form-check">
			          <label class="form-check-label">
					    <input type="radio" class="form-check-input selectVente" name="prix">Plus de 500€
					  </label>
			        </div>
			       </div>
			      <div class="col-sm-12">
                  <strong>Conditions</strong>
			        <div class="form-check">
			         <label class="form-check-label">
					    <input type="radio" class="form-check-input selectAchat" name="conditions">Neuf
					  </label>
			        </div>
			        <div class="form-check">
			          <label class="form-check-label">
					    <input type="radio" class="form-check-input selectAchat" name="conditions">Occasion
					  </label>
			        </div>
			        <div class="form-check">
			          <label class="form-check-label">
					    <input type="radio" class="form-check-input selectAchat" name="conditions">Remise à neuf
					  </label>
			        </div>
			       </div>
			      <div class="col-sm-12">
                   <strong>Avis clients</strong>
			        <div class="form-check">
			         <label class="form-check-label">
					    <input type="radio" class="form-check-input selectAchat" name="avis">4 étoiles et +
					  </label>
			        </div>
			        <div class="form-check">
			          <label class="form-check-label">
					    <input type="radio" class="form-check-input selectAchat" name="avis">3 étoiles et +
					  </label>
			        </div>
			        <div class="form-check">
			          <label class="form-check-label">
					    <input type="radio" class="form-check-input selectAchat" name="avis">2 étoiles et +
					  </label>
			        </div>
			         <div class="form-check">
			          <label class="form-check-label">
					    <input type="radio" class="form-check-input selectAchat" name="avis">1 étoile et +
					  </label>
			        </div>
			       </div>
			    </div>
			  </fieldset>
			  <div class="form-group row">
			    <div class="col-sm-10">
			      <button type="submit" class="btn btn-outline-info btn-lg btn-block ml-3 col-4" >Rechercher</button>
			    </div>
			  </div>
			</form>
		  </div>	     
	  <div class="container mr-5">
		<div class="row mr-5">
			<?php include("article.php");?>
		</div>
	 </div>
	</div>
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
</html>