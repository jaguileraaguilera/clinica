<h2>Registrar un nuevo doctor</h2>

<form action="<?=base_url?>/Doctor/registro" method="POST">
    <fieldset>
        <legend>Introduzca los datos del nuevo doctor</legend>

        <label for="dni">DNI</label>
        <input type="text" name="dni" id="dni" required>
        
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" required>

        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" id="apellidos" required>

        <label for="telefono">Teléfono</label>
        <input type="text" name="telefono" id="telefono" required>

        <label for="especialidad">Especialidad</label>
        <input type="text" name="especialidad" id="especialidad" required>
        
        <input type="submit" value="Registrar">
    </fieldset>
</form>
