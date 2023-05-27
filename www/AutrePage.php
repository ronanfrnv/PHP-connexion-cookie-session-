<?php
  // pour voir les login mdp si on le souhaite
  // a faire dans un 2eme temps, quand on a compris www athenticate, y compris via php
  // alors décommenter la ligne suivante. Vous devez retrouver le login et mdp transporté dans le protocole HTTP (à l'initiative du htaccess)
 // print ($_SERVER['PHP_AUTH_USER']."<br>".$_SERVER['PHP_AUTH_PW'] );
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
   <p>Autre page</p>
    <p>Page <strong>NON</strong> protégée</p>
   <hr/>
</body>
</html>
