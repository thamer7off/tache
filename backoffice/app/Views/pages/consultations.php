<h2>Consultations</h2>
<table>
    <tr><th>#</th><th>Patient</th><th>Médecin</th><th>Date</th><th>Motif</th><th>Statut</th></tr>
    <?php foreach ($consultations as $c): ?>
    <tr>
        <td><?= $c->id ?></td>
        <td><?= $c->patient ?></td>
        <td><?= $c->medecin ?></td>
        <td><?= $c->dateHeure ?></td>
        <td><?= $c->motif ?></td>
        <td><?= $c->statut ?></td>
    </tr>
    <?php endforeach; ?>
</table>
