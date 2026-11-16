<?php
// Modèle : un message échangé pendant une consultation (chat).
class Message
{
    public $id;
    public $consultationId;
    public $expediteur;
    public $contenu;
    public $dateEnvoi;

    public function __construct($id, $consultationId, $expediteur, $contenu, $dateEnvoi)
    {
        $this->id = $id;
        $this->consultationId = $consultationId;
        $this->expediteur = $expediteur;
        $this->contenu = $contenu;
        $this->dateEnvoi = $dateEnvoi;
    }

    public static function getAll()
    {
        return [
            new Message(1, 1, 'Sami Ben Ali', 'Bonjour docteur, ma glycémie est un peu haute.', '2026-11-16 08:10'),
            new Message(2, 1, 'Dr Martin', 'Bonjour, mesurez-la à nouveau ce soir.', '2026-11-16 08:25'),
            new Message(3, 2, 'Salma Trabelsi', 'Je vous envoie mes analyses.', '2026-11-15 17:40'),
        ];
    }
}
