<?php
$pageTitle = 'Mes alertes | The Medix';
$currentPage = 'alertes';
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
    <h2>Mes alertes</h2>
    <?php foreach ($alertes as $a): ?>
        <div class="message">
            <strong><?php echo $a->type; ?></strong>
            <small><?php echo $a->dateCreation; ?></small>
            <p><?php echo $a->message; ?></p>
        </div>
    <?php endforeach; ?>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
<?php require_once __DIR__ . '/includes/scripts.php'; ?>
</body>
</html>
