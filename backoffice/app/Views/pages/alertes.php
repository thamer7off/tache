<h2>Alertes glycémie</h2>
<table>
    <tr><th>#</th><th>Patient</th><th>Type</th><th>Message</th><th>Statut</th><th>Date</th></tr>
    <?php foreach ($alertes as $a): ?>
    <tr>
        <td><?= $a->id ?></td>
        <td><?= $a->patient ?></td>
        <td><?= $a->type ?></td>
        <td><?= $a->message ?></td>
        <td><?= $a->statut ?></td>
        <td><?= $a->dateCreation ?></td>
    </tr>
    <?php endforeach; ?>
</table>
