<?php
// Assemble tous les blocs communs, dans le bon ordre.
// Variables reçues du contrôleur : $title, $currentPage, $content
require_once __DIR__ . '/partials/head.php';
require_once __DIR__ . '/partials/sidebar.php';
?>
<main class="main-wrapper">
    <?php require_once __DIR__ . '/partials/header.php'; ?>

    <section class="content">
        <?= $content ?>
    </section>

    <?php require_once __DIR__ . '/partials/footer.php'; ?>
</main>
<?php require_once __DIR__ . '/partials/scripts.php'; ?>
