<?php
require_once __DIR__ . '/../Models/MesureGlycemie.php';

class MesureController extends Controller
{
    protected $page = 'mesures';
    protected $title = 'Mesures de glycémie | The Medix';

    public function index()
    {
        // 1. On demande les données au modèle
        $mesures = MesureGlycemie::getAll();
        // 2. On envoie les données à la vue
        $this->render('mesures', ['mesures' => $mesures]);
    }
}
