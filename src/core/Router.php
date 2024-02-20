<?php

namespace projet\core;

class Router
{
    // Lestes des différentes routes de l'app
    protected $routes = [];

    /**
     * Permet d'ajouter une route 
     *
     * @param string $routeName Le nom de la route
     * @param string $controllerName Le nom du controller
     * @param string $action Nom de la fonction du controller qui va gérer la requête
     * @return void
     */
    public function addRoute(string $routeName, string $controllerName, string $action): void
    {
        $this->routes[$routeName] = ["controller" => $controllerName, "action" => $action];
    }

    /**
     * Permet de rediriger avec un URL
     *
     * @param string $route Nom de la route
     * @return void
     */
    public function dispatch(string $route): void
    {
        // Check si la route existe
        if (array_key_exists($route, $this->routes)) {

            // si la route existe on récupère le controller associé
            $controller_class_name = $this->routes[$route]['controller'];

            // et l'action associée
            $action = $this->routes[$route]['action'];

            // instanciation du controller
            $controller = new $controller_class_name();

            // on effectuer l'action demandée
            $controller->$action();
        } else {

            // TODO redirection vers une page 404
            throw new \Exception("No route found for URI: $route");
        }
    }
}
