<?php
$pageTitle = 'Messages | The Medix';
$currentPage = 'messages';
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
    <h2>Ma conversation</h2>
    <?php foreach ($messages as $m): ?>
        <div class="message">
            <strong><?php echo $m->expediteur; ?></strong>
            <small><?php echo $m->dateEnvoi; ?></small>
            <p><?php echo $m->contenu; ?></p>
        </div>
    <?php endforeach; ?>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
<?php require_once __DIR__ . '/includes/scripts.php'; ?>
</body>
</html>
