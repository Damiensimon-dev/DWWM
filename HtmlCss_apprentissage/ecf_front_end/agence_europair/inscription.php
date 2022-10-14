<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8" />
	<title>EuropAir</title>
	<meta name="viewport" content="initial-scale=1">
	<link href="css/normalize.css" rel="stylesheet" type="text/css" media="all"> 
	<link href="css/styles.css" rel="stylesheet" type="text/css" media="all"> 
	<link rel="stylesheet" href="css/inscription.css">
	<script src="inscription.js" defer></script>

</head>
<body>
	
	<header id="mainHeader">
	  	<div id="logo"><a href="#"><img src="images/logo.jpg" alt="EuropAir"></a></div>
		<hgroup>	
			<h1>EuropAir</h1>
    			<h2>Des voyages magnifiques comme dans un film</h2>
  		</hgroup>
  	</header>	
	
	<div id="topImage"></div>
	
	<nav id="mainNav">
	 <h1>Menu</h1>
	  <ul>
	    <li class="active"><a href="#" title="Mes dernières trouvailles">Notre offre de séjours</a> </li>
	    <li><a href="#" title="A propos">A propos</a></li>
	    <li><a href="inscription.html" title="inscription">S'inscrire</a></li>
	  </ul>
  	</nav>
	
	<div id="content">
	
		<section id="films">
		
			<h1>Inscription</h1>
		
			<form class="form" action="inscription.php" method="GET" id="form1" enctype="text/plain">
			<label for="nom">Nom</label>
			<br>
			<input type="text" id="nom" name="nom" placeholder="votre nom">
			<br>
			<label for="prenom">Prénom</label>
			<br>
			<input type="text" name="prenom" id="prenom" placeholder="votre prénom">
			<br>
			<label for="email">Email</label>
			<br>
			<input type="email" name="email" id="email" placeholder="identifiant">
			<br>
			<label class="mdp" for="mdp">Mot de passe</label>
			<br>
			<input type="password" name="mdp" id="mdp">
			<br>
			<label class="verifMdp" for="verifMdp">Vérification du Mot de passe</label>
			<br>
			<input type="text" name="verifMdp" id="verifMdp">
			<br>
			<label class="departement" for="departement">Département de votre domicile <br> principal</label>
			<br>
			<input type="number" name="departement" id="departement">
			<br>
			<label for="age">Votre age</label>
			<br>
			<input type="text" name="age" id="age">
			<br>
			<button class="button" type="button" id="valider">Valider</button>

		</form>
			
		</section>
		
		<aside id="related">
		
			<h1>Annexes</h1>
		
			<article>
				<h2>Séjour au hasard</h2>
				<div class="randomFilmImage"><a href="#"><img src="images/eternal_sunshine_210.jpg" alt="bandeau"></a></div>
				<div class="description">
				<h3>Escapade au Groenland</h3>
				<p> C'est le voyage le plus complet dans le sud du Groenland : treks inoubliables dans la toundra, excursion sur la calotte glaciaire, observation des plus belles parois du Groenland, Ketil et Ulamertorsuaq, dans le fjord de Tasermiut. Nous nous déplaçons à bord de bateaux rapides entre les fjords, les icebergs et les spectaculaires fronts de glaciers. Nous visitons les villes et villages de Qaqortoq, Narsaq et Nanortalik, mais aussi les communautés pittoresques de Tasiusaq, Igaliko et Qassiarsuk. Une baignade à couper le souffle dans les sources chaudes d'Uunartoq, au milieu des icebergs, sera un des must du voyage.</p></div>
			</article>
			
			<section id="social">
				<h1>Retrouvez-nous sur les réseaux sociaux</h1>
				<ul>
					<li><a href="#"><img src="images/twitter.png" alt="twitter"></a></li>
					<li><a href="#"><img src="images/fb.png" alt="facebook"></a></li>
				</ul>
			</section>
			
		</aside>
		
	</div>
	
	<footer id="pageFooter"><h2>Copyright</h2><p>Copyright</p></footer>
	
</body>
</html>
