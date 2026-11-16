<?php
// $currentPage est défini dans la page qui inclut ce fichier
if (!isset($currentPage)) {
    $currentPage = '';
}

function navActive($page, $currentPage)
{
    return $page === $currentPage ? 'active' : '';
}
?>
<nav class="navbar">
    <a href="index.php" class="brand">THE MEDIX</a>
    <div class="links">
        <a href="index.php?page=home"          class="<?php echo navActive('home', $currentPage); ?>">Accueil</a>
        <a href="index.php?page=consultations" class="<?php echo navActive('consultations', $currentPage); ?>">Consultations</a>
        <a href="index.php?page=messages"      class="<?php echo navActive('messages', $currentPage); ?>">Messages</a>
        <a href="index.php?page=mesures"       class="<?php echo navActive('mesures', $currentPage); ?>">Glycémie</a>
        <a href="index.php?page=alertes"       class="<?php echo navActive('alertes', $currentPage); ?>">Alertes</a>
    </div>
    <button id="theme-toggle" type="button">Clair / Sombre</button>
</nav>
