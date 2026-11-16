<?php
require_once __DIR__ . '/../Models/MesureGlycemie.php';

class MesureController
{
    public function index()
    {
        // 1. Le contrôleur demande les données au modèle
        $mesures = MesureGlycemie::getAll();
        // 2. Il charge la vue, qui peut utiliser $mesures
        require __DIR__ . '/../Views/mesures.php';
    }
}
