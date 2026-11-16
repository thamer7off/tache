<?php
$pageTitle = 'Accueil | The Medix';
$currentPage = 'home';
?>
<!DOCTYPE html>
<html lang="fr" data-theme="light">
<head>
    <?php require_once __DIR__ . '/includes/head.php'; ?>
</head>
<body>
<?php require_once __DIR__ . '/includes/spinner.php'; ?>
<?php require_once __DIR__ . '/includes/navbar.php'; ?>

<!-- Contenu propre à la page -->
<div class="container">
    <h1>Téléconsultation et suivi de la glycémie</h1>
    <p>Consultez votre médecin à distance et suivez votre glycémie.</p>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
<?php require_once __DIR__ . '/includes/scripts.php'; ?>
</body>
</html>
