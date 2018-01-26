<?php

require_once 'Model/Model.php';

class Comment extends Model {
    
    public function getComments($idPost) {
	$sql = 'SELECT COM_ID as id, COM_DATE as date, COM_AUTEUR as author, COM_CONTENU as content FROM t_commentaire WHERE BIL_ID=?';
	$comments = $this->executeRequest($sql, array($idPost));
	
	return $comments;
    }
    
    public function addComment($author, $content, $idPost) {
	$sql = 'INSERT INTO t_commentaire(COM_DATE, COM_AUTEUR, COM_CONTENU, BIL_ID) VALUES (?, ?, ?, ?)';
	$date = date(DATE_W3C);
	$this->executeRequest($sql, array($date, $author, $idPost));
    }
}