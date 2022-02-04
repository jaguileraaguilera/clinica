<section>
    <h2>Listado de doctores</h2>

    <table>
        <tr>
            <td>DNI</td>
            <td>Nombre</td>
            <td>Apellidos</td>
            <td>Teléfono</td>
            <td>Especialidad</td>
        </tr>
    <?php foreach($doctores as $doctor):?>
        <tr>
            <td><?=$doctor->getDni()?></td>
            <td><?=$doctor->getNombre()?></td>
            <td><?=$doctor->getApellidos()?></td>
            <td><?=$doctor->getTelefono()?></td>
            <td><?=$doctor->getEspecialidad()?></td>
        </tr>
    <?php endforeach;?>
    </table>
</section>
