<?php
// Table de routage : clé de page => [Contrôleur, méthode]
$routes = [
    'dashboard'     => ['DashboardController', 'index'],
    'consultations' => ['ConsultationController', 'index'],
    'messages'      => ['MessageController', 'index'],
    'mesures'       => ['MesureController', 'index'],
    'alertes'       => ['AlerteController', 'index'],
];
