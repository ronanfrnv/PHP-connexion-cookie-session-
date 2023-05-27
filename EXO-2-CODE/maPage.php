<?php
require_once "fonctionsIdent.php";
Autorise();
  //Pour la protection par .htaccess on met en commentaire les 2 lignes ci dessus
?>
<!DOCTYPE html>
<html>
    <head>
		<title>Autre page</title>
		<meta charset="utf-8" />
</head>

<body>
   <p class="titre">Autre contenu</p>
   <hr/>
    contenu protégé
   <hr/>
   <br />
 	Cliquez sur le lien suivant pour accéder à la suite : <a href="suite.html"> voir la suite</a>
</body>
</html>
