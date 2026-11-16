<?php
$pageTitle = 'Mes consultations | The Medix';
$currentPage = 'consultations';
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
    <h2>Mes consultations</h2>
    <table>
        <tr><th>Date</th><th>Médecin</th><th>Motif</th><th>Statut</th><th>Vidéo</th></tr>
        <?php foreach ($consultations as $c): ?>
        <tr>
            <td><?php echo $c->dateHeure; ?></td>
            <td><?php echo $c->medecin; ?></td>
            <td><?php echo $c->motif; ?></td>
            <td><?php echo $c->statut; ?></td>
            <td><a href="<?php echo $c->lienVideo; ?>">Rejoindre</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
<?php require_once __DIR__ . '/includes/scripts.php'; ?>
</body>
</html>
