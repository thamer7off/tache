<?php
require_once __DIR__ . '/../Models/Consultation.php';

class ConsultationController extends Controller
{
    protected $page = 'consultations';
    protected $title = 'Consultations | The Medix';

    public function index()
    {
        // 1. On demande les données au modèle
        $consultations = Consultation::getAll();
        // 2. On envoie les données à la vue
        $this->render('consultations', ['consultations' => $consultations]);
    }
}
