<h2>Mis pacientes</h2>

<?php foreach ($todos_mis_pacientes as $fila): ?>
    <?php foreach ($fila as $campo => $valor): ?>
        <?="$campo : $valor <br><br>" ?>
    <?php endforeach; ?>
<?php endforeach; ?>
