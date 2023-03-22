// Charger les plugins
foreach (glob('plugins/*.php') as $fichier) {
	include_once $fichier;
}
