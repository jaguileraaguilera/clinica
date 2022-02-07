<section>
    <h2>Listado de especialidades</h2>

    <table>
        <tr>
            <td>Nombre</td>
        </tr>
    <?php foreach($especialidades as $especialidad):?>
        <tr>
        <?php if($especialidad->getNombre() != 'undefined'): ?>
            <td><?=$especialidad->getNombre()?></td>
        <?php endif; ?>
        </tr>
    <?php endforeach;?>
    </table>
</section>
