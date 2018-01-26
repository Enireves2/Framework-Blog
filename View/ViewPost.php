<?php $title = "Mon Blog - " . $post['title']; ?>

<?php ob_start(); ?>
<article>
    <header>
	<h1 class="titlePost"><?= $post['title'] ?></h1>
	<time><?= $post['date'] ?></time>
    </header>
    <p><?= $post['content'] ?></p>
</article>
<hr />
<header>
    <h1 id="titleRequests">Réponses à <?= $post['title'] ?></h1>
</header>
<?php foreach ($comments as $comment): ?>
	<p><?= $comment['author'] ?> dit :</p>
	<p><?= $comment['content'] ?></p>
<?php endforeach; ?>
	
<?php $content = ob_get_clean(); ?>

<?php require 'View/Template.php'; ?>

	// L'action associée à la soumission du formulaire est nommée "addcomment".
<form method="post" action="index.php?action=addcomment">
    <input id="author" name="author" type="text" placeholder="Votre pseudo" required />
    <br />
    <textarea id="txtComment" name="content" rows="4" placeholder="Votre commentaire" required>	
    </textarea>
    <br />
    <input type="hidden" name="id" value="<?= $post['id'] ?>">
    <input type="submit" value="Commenter" />
	    
</form>