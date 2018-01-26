<?php

$bd = new PDO('mysql:host=localhost;dbname=OC_Janvier_blog_perso;charset=utf8', 'root', 'root');
$posts = $bd->query('SELECT BIL_ID as id, BIL_DATE as date, BIL_TITRE as title, BIL_CONTENU as content FROM t_billet ORDER BY BIL_ID DESC');
?>