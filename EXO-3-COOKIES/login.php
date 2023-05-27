<!DOCTYPE html>
<html>
<head>
  <title>Formulaire de connexion</title>
</head>
<body>
  <h2>Connexion</h2>
  <form action="identification.php" method="POST">
    <div>
      <label for="login">Nom d'utilisateur:</label>
      <input type="text" id="login" name="login" required>
    </div>
    <div>
      <label for="password">Mot de passe:</label>
      <input type="password" id="password" name="password" required>
    </div>
    <div>
      <input type="submit" value="Se connecter">
    </div>
  </form>
</body>
</html>
