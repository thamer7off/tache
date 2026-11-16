<?php
require_once __DIR__ . '/../Models/Alerte.php';

class AlerteController
{
    public function index()
    {
        // 1. Le contrôleur demande les données au modèle
        $alertes = Alerte::getAll();
        // 2. Il charge la vue, qui peut utiliser $alertes
        require __DIR__ . '/../Views/alertes.php';
    }
}
