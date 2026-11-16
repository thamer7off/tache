<h2>Messages</h2>
<table>
    <tr><th>Consultation</th><th>Expéditeur</th><th>Message</th><th>Date</th></tr>
    <?php foreach ($messages as $m): ?>
    <tr>
        <td>#<?= $m->consultationId ?></td>
        <td><?= $m->expediteur ?></td>
        <td><?= $m->contenu ?></td>
        <td><?= $m->dateEnvoi ?></td>
    </tr>
    <?php endforeach; ?>
</table>
