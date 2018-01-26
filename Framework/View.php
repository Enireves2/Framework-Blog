<?php

require_once 'Pattern.php';

class View {
    // Nom du fichier associé à la vue.
    // Attributs
    private $file;
    
    // Titre de la vue (défini dans le fichier view)
    private $title;
    
    public function __construct($action, $controler = "") {

	  $file = "View/";
	  if ($controler != "") {
	      $file = $file . $controler . "/";
	  }
	  $this->file = $file . $action . ".php";
      }
    
    // Génère et affiche la vue.
    public function generate($data) {
	
    // Génération de la partie spécifique de la vue.
	$content = $this->generateFile($this->file, $data);
	
	$racineWeb = Pattern::get("racineWeb", "/");
	
	// Génération du gabart commun utilisant la partie spécifique.
	$view = $this->generateFile('View/Template.php', array('title' => $this->title, 'content' =>$content, 'racineWeb' => $racineWeb));
	// Renvoi de la vue au navigateur.
	echo $view;
    }
    
    // Génère un fichier vue et renvoie le résultat produit.
    private function generateFile($file, $data) {
	if (file_exists($file)) {
	    
	    // Rend les éléments du tableau $data accessibles dans la vue.
	    extract ($data);
	    
	    // Démarrage de la temposiration de sortie.
	    ob_start();
	    
	    // Inclut le fichier vue.
	    // SOn résultat est placé dans le tampon de sortie.
	    require $file;
	    
	    // Arrêt de la temporisation et renvoi du tampon de sortie.
	    return ob_get_clean();
	}
	else {
	    throw new Exception("Fichier '$file' introuvable");
	}
    }
    
    // Nettoie une valeur insérée dans une page Html.
      private function clean($value) {
	return htmlspecialchars($value, ENT_QUOTES, 'UTF-8', false);
  }
}

