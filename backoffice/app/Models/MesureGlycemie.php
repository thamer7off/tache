<?php
// Modèle : une mesure de glycémie d'un patient.
class MesureGlycemie
{
    public $id;
    public $patient;
    public $valeur;      // en g/L
    public $dateMesure;
    public $contexte;    // à jeun, après repas...

    public function __construct($id, $patient, $valeur, $dateMesure, $contexte)
    {
        $this->id = $id;
        $this->patient = $patient;
        $this->valeur = $valeur;
        $this->dateMesure = $dateMesure;
        $this->contexte = $contexte;
    }

    public static function getAll()
    {
        return [
            new MesureGlycemie(1, 'Sami Ben Ali', 0.55, '2026-11-16 07:30', 'à jeun'),
            new MesureGlycemie(2, 'Sami Ben Ali', 1.00, '2026-11-16 12:30', 'avant repas'),
            new MesureGlycemie(3, 'Salma Trabelsi', 2.10, '2026-11-16 14:00', 'après repas'),
        ];
    }
}
