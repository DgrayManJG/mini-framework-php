<?php
session_start();

//va chercher notre fichier de configuration
include('config.php');

//charge nos classes automatiquement
include('vendor/autoload.php');
//  cette fonctione st appeler par php, en nous passant le nom de la classe qu'il cherche
// c'est notre derniere chance de faire l'include

spl_autoload_register(function($className){
  $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
  include($className . ".php");
});

$page = (empty($_GET['page'])) ? 'accueil' : $_GET['page'];

//le routeur se chargera d'appeler la méthode associer a la page actuelle
$router = new \Controller\Router();
$router->execute($page);

// j'efface la session errors pour qu'elle devienne éphémere, pareille pour session success
$security = new \Controller\Security();
$security->unsetSession(array('errors','success'));
?>
