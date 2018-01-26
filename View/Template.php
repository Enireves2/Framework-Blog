<!DOCTYPE html>
<html lang="fr">
    <head>
	<meta charset="utf-8" />
	<base href="<?= $racineWeb ?>">
	<title><?= $title ?></title> <!-- Élément spécifique -->
	<link rel="stylesheet" type="text/css" href="Content/style.css">
    </head>

    <body>
	<div id="global">
	    <header>
		<a href="index.php">
		    <h1 id="titleBlog">Mon blog perso</h1>
		    <p>
			Je vous souhaite la bienvenue sur ce modeste blog.
		    </p>
		</a>
	    </header>

	    <div id="content">
		
		<?= $content ?> <!-- Élément spécifique -->

	    </div>

	    <footer id="footerBlog">
		Blog perso
	    </footer>
	</div>
    </body>
</html>




