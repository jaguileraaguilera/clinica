<section>
    <h2>Modificar doctor</h2>

    <form action="<?=base_url?>/Doctor/ver_formulario_modificar" method="POST">
        <fieldset>
        <legend>Seleccione el DNI del doctor y los campos a modificar</legend>

            <label for="dni">DNI</label>
            <select id="dni" name="dni">
            <?php foreach($doctores as $doctor):?>
                <option value="<?=$doctor->getDni()?>"><?=$doctor->getDni()?></option>
            <?php endforeach;?>
            </select>

            <label for="nombre">Nombre</label>
            <input type="checkbox" name="nombre" id="nombre" value="nombre">

            <label for="apellidos">Apellidos</label>
            <input type="checkbox" name="apellidos" id="apellidos" value="apellidos">

            <label for="telefono">Teléfono</label>
            <input type="checkbox" name="telefono" id="telefono" value="telefono">

            <label for="especialidad">Especialidad</label>
            <input type="checkbox" name="especialidad" id="especialidad" value="especialidad">
            
            <input type="submit" value="Seleccionar">
        </fieldset>
    </form>
</section>
