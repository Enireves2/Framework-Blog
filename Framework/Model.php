<?php
/*
- Le modèle d'une architecture MVC encapsule la logique métier ainsi que l'accès aux données.
Il peut s'agir d'un ensemble de fonctions ou de classes (Modèle Orienté Objet).
 * 
 * - Définition des services d'accès aux données en tant que méthodes et non comme simples fonctions.
 */

require_once 'Pattern.php';

/*
 * Classe abstraite Model.
 * Centralise les services d'accès à la BDD.
 * Utilise l'API PDO de PHP.
 */

abstract class Model {
    
    // Objet PDO d'accès à la BDD.
    // Statique donc partagé par toutes les instances des classes dérivées.
    
    private static $bd;
    
    // Exécute une requête SQL.
    // @param string $sql Requête SQL.
    // @param array $params Paramètres de la requête.
    // @return PDOStatment Résultats de la requête.
	    
    protected function executeRequest($sql, $params = null) {
	if ($params == null) {
	    $result = self::getBD()->query($sql); // Exécution directe.
	}
	else {
	    $result = self::getBd()->prepare($sql); // Requête préparée.
	    $result->execute($params);
	}
	return $result;
    }
    
    // Renvoie un objet de connexion à la BD en initialisant la connexion au besoin.
    // @return PDO Objet PDO de connexion à la BD.
    
    private static function getBd() {
	if (self::$bd === null) {
	    // Récupération des paramè§tres de configuration BD.
	    $dns = Pattern::get("dsn");
	    $login = Pattern::get("login");
	    $mdp = Pattern::get("mdp");
	    
	    // Création de la connexion.
	    self::$bd = new PDO($dsn, $login, $mdp, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
      return self::$bd;
    }
}



