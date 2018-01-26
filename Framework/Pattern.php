<?php

// Cette classe encapsule un tableau associatif clés/valeurs (attribut $parametres) stockant les valeurs des paramè§tres de configurations.
// Ce tableau est statique (un seule exemplaire par classe), ce qui permet de l'utiliser sans instancier d'objet Configuration.

// la méthode static publique nommée get() permet de rechercher la valeur d'un paramètre à partir de son nom.
// Si le paramètre en question est trouvé dans le tableau associatif, sa valeur est renvoyée sinon une valeur par défaut est renvoyée.
// Le mot-clé "self" permet de faire référence à un membre statique.

// La methode statique privée getParams() effectue le chargement tardif du fichier contenant les paramètres de configuration.
// Afin de faire cohabiter sur un même serveur une configuration de développement et une configuration de production, deux fichiers sont recherchés dans le répertoir Config du site : dev.ini (cherché en premier) et prod.ini.
// La lecture du fichier de configuration utilise la fonction parse_ini_file().
// Celle-ci instancie et renvoie un tableau associatif immédiatiement attribué à l'attribut $parametres.
class Pattern {
    private static $params;
    
    // Renvoie la valeur d'un paramètre de configuration.
    public static function get($name, $defaultValue = null) {
	if (isset(self::getParams()[$name])) {
	    $value = self::getParams() [$name];
	}
	else {
	    $value = $defaultValue;
	}
	return $value;
    }
    
    // Renvoie le tableau des paramètres en le chargeant au besoin.
    private static function getParams() {
	if (self::$params == null) {
	    $filePath = "Config/prod.ini";
	    if (!file_exists($filePath)) {
		$filePath = "Config/dev.ini";
	    }
	    if (!file_exists($filePath)) {
		throw new Exception ("Aucun fichier de configuration trouvé");
	    }
	    else {
		self::$params = parse_ini_file($filePath);
	    }
	}
	return self::$params;
    }
}

