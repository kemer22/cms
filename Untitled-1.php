<!DOCTYPE html>
<html>
<head>
	<title>Mini CMS</title>
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
			<?php include 'accueil.php'; ?>
		</div>
		<div id="footer">
			<p>Mini CMS réalisé par ChatGPT</p>
		</div>
	</div>
</body>
</html>
