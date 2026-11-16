<?php
require_once __DIR__ . '/../Models/Message.php';

class MessageController extends Controller
{
    protected $page = 'messages';
    protected $title = 'Messages | The Medix';

    public function index()
    {
        // 1. On demande les données au modèle
        $messages = Message::getAll();
        // 2. On envoie les données à la vue
        $this->render('messages', ['messages' => $messages]);
    }
}
