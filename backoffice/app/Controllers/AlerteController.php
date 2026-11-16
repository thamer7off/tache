<?php
require_once __DIR__ . '/../Models/Alerte.php';

class AlerteController extends Controller
{
    protected $page = 'alertes';
    protected $title = 'Alertes | The Medix';

    public function index()
    {
        // 1. On demande les données au modèle
        $alertes = Alerte::getAll();
        // 2. On envoie les données à la vue
        $this->render('alertes', ['alertes' => $alertes]);
    }
}
