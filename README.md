# PHP-connexion-cookie-session

#### PARTIE A

Le protocole http prévoit un champ correspondant à une demande d'identification : WWW-Authenticate.

Le client, lors d'une demande d'envoi de page (protégée) reçoit une trame en retour contenant cette directive.

Cette dernière est ajoutée (coté serveur donc)

·        soit explicitement dans le code (php dans notre cas) de la page,

·        soit, dans le cas de l'utilisation d'un serveur apache, automatiquement par celui-ci. Ce mécanisme est mis en place si apache détecte dans le dossier de la page, la présence du fichier .htaccess.

Dans les exercices suivants, nous mettrons en œuvre ces deux aspects.
##### Sécuriser avec .htaccess

Lorsque le fichier .htaccess est placé dans le répertoire du serveur contenant le code des pages, celles-ci sont protégées. Idem pour le contenu des sous-répertoires, tant qu'il n'y a pas un autre fichier .htaccess.
Par défault la commande dir n'est pas activé sous apache2

D'abord nous allons créer un répertoire nommer `protect-htaccess`
```
AuthName "Page d'administration protegee"
AuthBasicProvider file
AuthType Basic
Require valid-user
AuthUserFile /var/www/fourneur/tp2-3-authentification-cookie-session/www/.htpasswd // `ce trouve en faisant phpinfo()`
```
Voici le contenu de .htpassd
Générer un utilisateur 
https://www.infowebmaster.fr/outils/crypter-htpasswd.php

```
ronan:$1$0Qzi.EqP$77ZixswnfnL7YoHRda1Id. //ronan & ronan
```
####### VOIR LE CODE DOSSIER EXO1-HTACCESS

##### Sécuriser dans le code 
Pour cela on va décommenter les lignes

Nous allons créer un dossier EXO2-CODE

Nous allons ajouter notre fichier MaPage.php
avec le code suivant
```
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
```
Cela va chercher la fonction 
Autorise dans le fichier de fonction
Lorsque je rentre dans l'url je dois rentrer les mots de passe suivant `root` & `admin74`présent dans la fonction `Existence_Utilisateur`

##### Persistance d'indentification

Revenir sur l'authentification avec htaccess
Avec cette methodes l'identfication est conservé
Ouvrir les outils réseaux
![image](https://github.com/ronanfrnv/PHP-connexion-cookie-session/assets/65066876/cffc5905-ef97-4cc0-b945-ffc2d08b5fea)

Nous allons décoder le code `cm9uYW46cm9uYW4=` sur le site suivant https://www.base64decode.org/

On retrouve les identifiants et le mot de passe présent dans le `.htpasswd`

Pour conclure ce n'est pas le serveur qui coserve l'identification mais le navigateurs qui le place dans chaques échanges



