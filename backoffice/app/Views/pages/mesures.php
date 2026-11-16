<h2>Mesures de glycémie</h2>
<table>
    <tr><th>#</th><th>Patient</th><th>Valeur (g/L)</th><th>Date</th><th>Contexte</th></tr>
    <?php foreach ($mesures as $m): ?>
    <tr>
        <td><?= $m->id ?></td>
        <td><?= $m->patient ?></td>
        <td><?= $m->valeur ?></td>
        <td><?= $m->dateMesure ?></td>
        <td><?= $m->contexte ?></td>
    </tr>
    <?php endforeach; ?>
</table>
