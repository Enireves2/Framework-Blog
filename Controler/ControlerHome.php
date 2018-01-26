<?php

require_once 'Model/Post.php';
require_once 'Framework/Controler.php';

class ControlerHome extends Controler{
    private $post;
    
    public function __construct() {
	$this->post = new Post();
    }
    
    // Affiche la lise de tous les billets du blog
    public function index() {
	$posts = $this->post->getPosts();
	$this->generateView(array('posts' => $posts));	
    }
}
