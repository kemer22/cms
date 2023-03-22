<!DOCTYPE html>
<html>
<head>
	<title>Connexion - Mini CMS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="wrapper">
		<h1>Mini CMS</h1>
		<div id="content">
			<h2>Connexion</h2>
			<form action="connexion.php" method="post">
				<label for="email">Email :</label>
				<input type="email" name="email" id="email" required>
				<br>
				<label for="mot_de_passe">Mot de passe :</label>
				<input type="password" name="mot_de_passe" id="mot_de_passe" required>
				<br>
				<input type="submit" value="Se connecter">
			</form>
			<?php
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				// Connexion à la base de données
				$bdd = new PDO('mysql:host=localhost;dbname=mini_cms;charset=utf8', 'utilisateur', 'mot_de_passe');

				// Vérification de l'email et du mot de passe
				$utilisateur = $bdd->prepare('SELECT * FROM utilisateurs WHERE email = :email');
				$utilisateur->execute(['email' => $_POST['email']]);
				$utilisateur = $utilisateur->fetch();

				if ($utilisateur && password_verify($_POST['mot_de_passe'], $utilisateur['mot_de_passe'])) {
					// Connexion réussie
					$_SESSION['utilisateur'] = $utilisateur;
					header('Location: index.php');
					exit();
				} else {
					// Erreur de connexion
					echo '<p class="erreur">Email ou mot de passe incorrect</p>';
				}
			}
			?>
		</div>
		<div id="footer">
			<p>Mini CMS réalisé par ChatGPT</p>
		</div>
	</div>
</body>
</html>
