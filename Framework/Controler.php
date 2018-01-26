<?php
// Le controleur gère la dynamique de l'application. Elle fait le lien entre l'utilisateur et le reste de l'application.
// Le rôle do controleur frontal est de centraliser la gestion des requêtes entrantes. Il constitue le point d'entrée unique du site.
// Il utilise le service d'un autre contrôleur pour réaliser l'action demandée et renvoyer son résultat sous la forme d'une vue.

require_once 'Request.php';
require_once 'View.php';

abstract class Controler {
    
    // Action à réaliser.
    private $action;
    
    // Requête entrante.
    protected $request;
    
    // Définit la requête entrante.
    public function setRequest(Request $request) {
	$this->request = $request;
	
    }
    
    // Exécute l'action à réaliser.
    public function executeAction($action) {
	if (method_exists($this, $action)) {
	    $this->action = $action;
	    $this->{$this->action}();    
	}
 else {
	    $classControler = get_class($this);
	    throw new Exception("Action '$action' non définie dans la classe $classeControler");
	}	
    }
    
    // Méthode abstraite correspondant à l'action par défaut.
    // Oblige les classes dérivées à implémenter cette action par défaut.
    public abstract function index();
    
    // Génère la vue associée au contrôler courant.
    protected function generateView($dataView = array()) {
	$classControler = get_class($this);
	$controler = str_replace("Controler", "", $classControler);
	$view = new View($this->action, $controler);
	$view->generate($dataView);

    }
}
