<?php
$pageTitle = 'Mes mesures | The Medix';
$currentPage = 'mesures';
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
    <h2>Mes mesures de glycémie</h2>
    <table>
        <tr><th>Date</th><th>Valeur (g/L)</th><th>Contexte</th></tr>
        <?php foreach ($mesures as $m): ?>
        <tr>
            <td><?php echo $m->dateMesure; ?></td>
            <td><?php echo $m->valeur; ?></td>
            <td><?php echo $m->contexte; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
<?php require_once __DIR__ . '/includes/scripts.php'; ?>
</body>
</html>
