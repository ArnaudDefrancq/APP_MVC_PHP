<?php

namespace projet;

use projet\controllers\AccueilController;
use projet\core\Router;

// instanciation de la class Router
$route = new Router();

// On définit les routes disponibles
$route->addRoute('/', AccueilController::class, 'Accueil');
