<?php

require_once 'Framework/Model.php';

class Post extends Model {
    public function getPosts() {
	$sql = 'SELECT BIL_ID as id, BIL_DATE as date, BIL_TITRE as title, BIL_CONTENU as content FROM t_billet ORDER BY BIL_ID DESC';
	$posts = $this->executeRequest($sql);
	
	return $posts;
    }
    
    public function getPost($idPost) {
	$sql = 'SELECT BIL_ID as id, BIL_DATE as date, BIL_TITRE as title, BIL_CONTENU as content FROM t_billet WHERE BIL_ID=?';
	$post = $this->executeRequest($sql, array($idPost));
	
	if ($post->rowCount() == 1)
	    return $post->fetch();
	else
	    throw new Exception ("Aucun billet ne correspond à l'identifiant");
    }
}