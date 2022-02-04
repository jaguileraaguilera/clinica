<section>
    <h2>Listado de citas</h2>

    <table>
        <tr>
            <td>ID</td>
            <td>DNI del paciente</td>
            <td>DNI del doctor</td>
            <td>Fecha</td>
            <td>Hora</td>
        </tr>
    <?php foreach($citas as $cita):?>
        <tr>
            <td><?=$cita->getId()?></td>
            <td><?=$cita->getPacienteDni()?></td>
            <td><?=$cita->getDoctorDni()?></td>
            <td><?=$cita->getFecha()?></td>
            <td><?=$cita->getHora()?></td>
        </tr>
    <?php endforeach;?>
    </table>
</section>
