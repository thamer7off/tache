<?php
require_once __DIR__ . '/../Models/Consultation.php';
require_once __DIR__ . '/../Models/Alerte.php';

class DashboardController extends Controller
{
    protected $page = 'dashboard';
    protected $title = 'Tableau de bord | The Medix';

    public function index()
    {
        $nbConsultations = count(Consultation::getAll());
        $nbAlertes = count(Alerte::getAll());
        $this->render('dashboard', [
            'nbConsultations' => $nbConsultations,
            'nbAlertes' => $nbAlertes,
        ]);
    }
}
