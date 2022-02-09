<section>
    <h2>Pedir cita</h2>

    <form action="<?=base_url?>/Cita/pedir" method="POST">
        <fieldset>
            <legend>Rellene los datos del formulario</legend>

            <label for="paciente_dni">DNI del paciente</label>
            <?php if (isset($paciente)): ?> <!--Si el usuario es un paciente cambiamos la vista-->

                <input type="text" name="paciente_dni" id="paciente_dni" value="<?=$paciente->getDni()?>" readonly>

            <?php else: ?>

                <select id="paciente_dni" name="paciente_dni">
                <?php foreach($usuarios as $usuario): ?>
                    <option value="<?=$usuario->getDni()?>"><?=$usuario->getDni()?></option>
                <?php endforeach; ?>
                </select>

            <?php endif; ?>

            <label for="doctor_dni">DNI del doctor</label>
            <select id="doctor_dni" name="doctor_dni">
            <?php foreach($doctores as $doctor): ?>
                <option value="<?=$doctor->getDni()?>"><?=$doctor->getDni()?></option>
            <?php endforeach;?>
            </select>
            
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" id="fecha" required>

            <label for="hora">Hora</label>
            <input type="time" name="hora" id="hora" required>
            
            <input type="submit" value="Solicitar">
        </fieldset>
    </form>
</section>
