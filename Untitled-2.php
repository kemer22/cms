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
