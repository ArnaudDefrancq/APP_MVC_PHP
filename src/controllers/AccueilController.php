<?php

namespace projet\controllers;

use projet\Core\Controller;

class AccueilController extends Controller
{
    public function Accueil()
    {
        // appel à la méthode de rendu provenant de la classe mère "Controller"
        $this->render('Accueil');
    }
}
