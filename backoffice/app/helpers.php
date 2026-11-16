<?php
// Petite fonction utilitaire pour la sidebar :
// retourne "active" si le lien correspond à la page courante.
function isActive($page, $currentPage)
{
    return $page === $currentPage ? 'active' : '';
}
