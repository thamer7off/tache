<?php
// $currentPage est fourni par le contrôleur
$currentPage = $currentPage ?? 'dashboard';
?>
<aside class="sidebar">
    <div class="logo">THE MEDIX</div>
    <nav>
        <a href="index.php?page=dashboard"     class="<?= isActive('dashboard', $currentPage) ?>">Accueil</a>
        <a href="index.php?page=consultations" class="<?= isActive('consultations', $currentPage) ?>">Consultations</a>
        <a href="index.php?page=messages"      class="<?= isActive('messages', $currentPage) ?>">Messages</a>
        <a href="index.php?page=mesures"       class="<?= isActive('mesures', $currentPage) ?>">Mesures glycémie</a>
        <a href="index.php?page=alertes"       class="<?= isActive('alertes', $currentPage) ?>">Alertes</a>
    </nav>
</aside>
