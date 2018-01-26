<?php

require_once 'Request.php';
require_once 'Controler.php';
require_once 'View.php';

class Rooter {
    
    public function rooterRequest() {
	try {
	    // Fusion des paramètres GET et POST de la requête.
	    $request = new Request(array_merge($_GET, $_POST));
	    $controler = $this->createControler($request);
	    $action = $this->createAction($request);
	    $controler->executeAction($action);
	}
	catch (Exception $e) {
	    $this->generateError($e);
	}
    }
    
// Crée le contrôleur approprié en fonction de la requete reçue.   
    
    private function createControler(Request $request) {
	$controler = "Home"; // Contrôleur par défaut.
	
	if ($request->existParams('controler')) {
	    $controler = $request->getParams('controler');
	    
	    // Première lettre en majuscule.
	    $controler = ucfirst(strtolower($controler));
	}
	
	// Création du nom du fichier du contrôleur.
	
	$classControler = "Controler" . $controler;
	$fileControler = "Controler/" . $classControler . ".php";
	if (file_exists($fileControler)) {
	    
	    // Instanciation du contrôleur adapté à la requête.
	    require($fileControler);
	    $controler = new $classControler();
	    $controler->setRequest($request);
	    
	    return $controler;
	}
	else
	    throw new Exception ("Fichier '$fileControler' introuvable");
    }

    
    // Determine l'action à exécuter en fonction de la requête reçue.
    private function createAction(Request $request) {
	$action = "index"; // Action par défaut.
	if ($request->existParams('action')) {
	    $action = $request->getParams('action');
	}
	return $action;
    }
    
    // Gère une erreur d'execution (exception)
    private function generateError(Exception $exception) {
	$view = new View('error');
	$view->generate(array('msgError' => $exception->getMessage()));
    }
}

