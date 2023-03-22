<!DOCTYPE html>
<html>
<head>
	<title>Articles - Mini CMS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="wrapper">
		<h1>Mini CMS</h1>
		<ul id="navigation">
			<li><a href="index.php">Accueil</a></li>
			<li><a href="articles.php">Articles</a></li>
			<li><a href="ajouter_article.php">Ajouter un article</a></li>
		</ul>
		<div id="content">
			<?php
			// Connexion à la base de données
			$bdd = new PDO('mysql:host=localhost;dbname=mini_cms;charset=utf8', 'utilisateur', 'mot_de_passe');

			// Récupération des articles
			$articles = $bdd->query('SELECT * FROM articles');

			// Affichage des articles
			while ($article = $articles->fetch())
			{
				echo '<h2>' . $article['titre'] . '</h2>';
				echo '<p>' . $article['contenu'] . '</p>';
				echo '<p><em>Publié le ' . $article['date_creation'] . '</em></p>';
			}
			?>
		</div>
		<div id="footer">
			<p>Mini CMS réalisé par ChatGPT</p>
		</div>
	</div>
</body>
</html>
