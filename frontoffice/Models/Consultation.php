<?php
// Modèle : une consultation entre un patient et un médecin.
// Pour l'instant les données sont fictives (pas de base de données).
class Consultation
{
    public $id;
    public $patient;
    public $medecin;
    public $dateHeure;
    public $motif;
    public $statut;
    public $lienVideo;

    public function __construct($id, $patient, $medecin, $dateHeure, $motif, $statut, $lienVideo)
    {
        $this->id = $id;
        $this->patient = $patient;
        $this->medecin = $medecin;
        $this->dateHeure = $dateHeure;
        $this->motif = $motif;
        $this->statut = $statut;
        $this->lienVideo = $lienVideo;
    }

    // Retourne la liste de toutes les consultations (données fictives)
    public static function getAll()
    {
        return [
            new Consultation(1, 'Sami Ben Ali', 'Dr Martin', '2026-11-20 10:30', 'Suivi diabète', 'planifiée', 'https://meet.example.com/abc1'),
            new Consultation(2, 'Salma Trabelsi', 'Dr Martin', '2026-11-18 09:15', 'Résultats analyses', 'terminée', 'https://meet.example.com/abc2'),
            new Consultation(3, 'Karim Jaziri', 'Dr Dupont', '2026-11-22 14:00', 'Contrôle tension', 'planifiée', 'https://meet.example.com/abc3'),
        ];
    }
}
