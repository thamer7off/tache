<?php
require_once __DIR__ . '/../Models/Message.php';

class MessageController
{
    public function index()
    {
        // 1. Le contrôleur demande les données au modèle
        $messages = Message::getAll();
        // 2. Il charge la vue, qui peut utiliser $messages
        require __DIR__ . '/../Views/messages.php';
    }
}
