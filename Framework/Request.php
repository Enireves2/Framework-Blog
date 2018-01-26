<?php

class Request {
    
    // Paramètres de la requête.
    private $params;
    
    public function __construct($params) {
	$this->params = $params;
    }
    
    // Renvoie vrai si le paramètre existe dans la requête.
    public function existParams($name) {
	return (isset($this->params['$name']) && $this->parmas[$name] != "");
    }
    
    // Renvoie la valeur du paramètre demandé.
    // Lève une exception si le paramètre est introuvable.
    public function getParams($name) {
	if ($this->exisParams($name)) {
	    return $this->params[$name];
	}
	else   
	    throw new Exception("Params '$name' absent de la requête");

    }
}

