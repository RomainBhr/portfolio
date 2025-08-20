<?php

//Config
require_once 'configs/c_chemins.class.php';
require_once Chemins::CONFIGS.'mysql_configs.class.php';
require_once Chemins::CONFIGS.'config-api.class.php';
require_once Chemins::CONFIGS.'variables_globales.class.php';
//require_once Chemins::VENDOR.'autoload.php';

//$dotenv = Dotenv\Dotenv::createImmutable(__DIR__. '/../');
//$dotenv->safeLoad(); // charge sans erreur fatale si le fichier n'existe pas

//Modeles
/*require_once Chemins::MODELES.'gestion_scan.class.php';*/

require_once Chemins::CONTROLEURS.'c_controleur_url.class.php';
$controleurCategories = new ControleurUrl();
$controleurCategories->url();

//controleur
/*require_once Chemins::CONTROLEURS.'c_controleur_cookie.class.php';
$controleurCookie = new ControleurCookie();
$controleurCookie->getCookie();*/

require_once Chemins::CONTROLEURS.'c_controleur_include.class.php';
$controleurCategories = new ControleurInclude();
$controleurCategories->afficherEnTete();

//aiquillage
require Chemins::CONFIGS.'redirection.class.php';

//pied de page
$controleurPied = new ControleurInclude();
$controleurPied->afficherPied();

?>