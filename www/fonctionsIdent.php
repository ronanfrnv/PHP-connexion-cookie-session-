<?php
/**************** function Authentification *********************
    header d'authentification();
 ******************************************************************/
function Authentification()
{
    header('WWW-Authenticate: Basic realm="Site protégé"');
    include("fichier_erreur.html");
    exit;
}

/************** function Existence_Utilisateur *******************
    V1 simple controle du login et du mot de passe
******************************************************************/
function Existence_Utilisateur($login, $passwd)
{
    return ( ($login == "root") && ($passwd == "admin74") );
}

/********************* function Autorise **************************
    V1 simple controle du login et du mot de passe
******************************************************************/
function Autorise()
{
  if (!isset($_SERVER["PHP_AUTH_USER"])) Authentification();
  else if (!(Existence_Utilisateur($_SERVER["PHP_AUTH_USER"], $_SERVER["PHP_AUTH_PW"]) ) )
       {
          unset($_SERVER["PHP_AUTH_USER"]);
          unset($_SERVER["PHP_AUTH_PW"]);
          Authentification();
       }
}
?>