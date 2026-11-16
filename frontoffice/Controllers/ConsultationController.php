<?php
require_once __DIR__ . '/../Models/Consultation.php';

class ConsultationController
{
    public function index()
    {
        // 1. Le contrôleur demande les données au modèle
        $consultations = Consultation::getAll();
        // 2. Il charge la vue, qui peut utiliser $consultations
        require __DIR__ . '/../Views/consultations.php';
    }
}
