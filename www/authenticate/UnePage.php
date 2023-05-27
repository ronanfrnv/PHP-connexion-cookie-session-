<?php
  require_once("../fonctionsIdent.php");
  Autorise();
  //Pour la protection par .htaccess on met en commentaire les 2 lignes ci dessus
  //puis on decommente celle en dessous
  //print ($_SERVER[PHP_AUTH_USER]."<br>".$_SERVER[PHP_AUTH_PW] );
?>
<!DOCTYPE html>
<html>
    <head>
		<title>Autre page</title>
		<meta charset="utf-8" />
		<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
   <p class="titre">un contenu</p>
   <hr/>
   <p>Une page</p>
    <p>Page protégée</p>
   <hr/>
</body>
</html>
