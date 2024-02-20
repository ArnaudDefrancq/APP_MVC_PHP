<?php
// Chargement de l'autoloader créé par composer (situé dans le sous dossier "vendor")

use Dotenv\Dotenv;

require_once __DIR__ . '/../vendor/autoload.php';


// chargement des variables d'environnement à partir du dossier racine
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$uri = $_SERVER['REQUEST_URI'];

require __DIR__ . "/../src/Routes.php";

$route->dispatch($uri);
