<?php

require_once 'Model/Post.php';
require_once 'Model/Comment.php';
require_once 'Framework/Controler.php';

class ControlerPost extends Controler {
    
    private $post;
    private $comment;
    
    public function __construct() {
	$this->post = new Post();
	$this->comment = new Comment();
    }
    
    // Affiche les détails sur un billet.
    public function index() {
	$idPost = $this->request->getParams("id");
        
	$post = $this->post->getPost($idPost);
	$comments = $this->comment->getComments($idPost);

	$this->generateView(array('post' => $post, 'comments' => $comments));
    }
    
    
    // Ajoute un commentaire sur un billet
    public function addComment() {
	$idPost = $this->request->getParams("id");
	$authorr = $this->request->getParams("authorr");
	$content = $this->request->getParams("content");

	$this->comment->ajouterComment($author, $content, $idPost);
        
    // Exécution de l'action par défaut pour actualiser la liste des billets
	$this->executeAction("index");
    }
}
