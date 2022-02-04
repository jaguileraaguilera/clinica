<section>
    <h2>Listado de especialidades</h2>

    <table>
        <tr>
            <td>Nombre</td>
        </tr>
    <?php foreach($especialidades as $especialidad):?>
        <tr>
            <td><?=$especialidad->getNombre()?></td>
        </tr>
    <?php endforeach;?>
    </table>
</section>
