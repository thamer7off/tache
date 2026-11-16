<?php
// Modèle : une alerte créée quand une mesure dépasse un seuil.
class Alerte
{
    public $id;
    public $mesureId;
    public $patient;
    public $type;      // hypoglycémie ou hyperglycémie
    public $message;
    public $statut;    // envoyée ou lue
    public $dateCreation;

    public function __construct($id, $mesureId, $patient, $type, $message, $statut, $dateCreation)
    {
        $this->id = $id;
        $this->mesureId = $mesureId;
        $this->patient = $patient;
        $this->type = $type;
        $this->message = $message;
        $this->statut = $statut;
        $this->dateCreation = $dateCreation;
    }

    // Règle simple : retourne le type d'alerte selon la valeur (ou "" si normal)
    public static function typePourValeur($valeur)
    {
        $seuilBas = 0.70;   // g/L
        $seuilHaut = 1.80;  // g/L
        if ($valeur < $seuilBas) {
            return 'hypoglycémie';
        }
        if ($valeur > $seuilHaut) {
            return 'hyperglycémie';
        }
        return '';
    }

    public static function getAll()
    {
        return [
            new Alerte(1, 1, 'Sami Ben Ali', 'hypoglycémie', 'Glycémie trop basse : prenez du sucre.', 'lue', '2026-11-16 07:31'),
            new Alerte(2, 3, 'Salma Trabelsi', 'hyperglycémie', 'Glycémie élevée : recontrôlez dans 1 heure.', 'envoyée', '2026-11-16 14:01'),
        ];
    }
}
