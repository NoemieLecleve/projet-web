<?php

$bdd = new PDO('mysql:host=localhost;dbname=ebuy', 'root', '');
       $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $bdd->exec("SET NAMES UTF8");
$req = $bdd->prepare('SELECT id, nomArticle, prixArticle, description, image FROM articles');
$req->execute(); 
$articles = $req->fetchAll();
foreach ($articles as $article): ?>  
		    <div class="col">
			      <div class="card text-center mt-3 col" style="width: 18rem;">
			              <img class="card-img-top img-fluid" id ="img" src="<?php echo $article['image'] ?>" alt="image article">
			               <div class="card-body">
				                <h5 class="card-title"><?php echo $article['nomArticle'] ?></h5>
				                <h6 class="card-text"><?php echo $article['prixArticle'] ?>€</h6>
				                <p class="card-text"><?php echo $article['description'] ?></p>
		                  </div>	                
		           </div>
    		 </div>
   
 <?php endforeach ?>	


			