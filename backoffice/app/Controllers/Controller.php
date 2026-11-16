<?php
// Contrôleur de base : tous les autres contrôleurs en héritent.
class Controller
{
    protected $page = 'dashboard';        // clé de la page (pour la sidebar)
    protected $title = 'The Medix';       // titre de l'onglet

    // Charge une vue de contenu, puis l'insère dans le layout
    protected function render($view, $data = [])
    {
        // Transforme ['consultations' => ...] en variable $consultations
        extract($data);

        // On "capture" le HTML de la page dans $content au lieu de l'afficher
        ob_start();
        require __DIR__ . '/../Views/pages/' . $view . '.php';
        $content = ob_get_clean();

        // Variables utilisées par le layout
        $title = $this->title;
        $currentPage = $this->page;

        require __DIR__ . '/../Views/layout.php';
    }
}
