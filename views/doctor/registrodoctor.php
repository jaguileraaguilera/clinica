<h2>Registrar un nuevo doctor</h2>

<form action="<?=base_url?>/Doctor/dar_alta" method="POST">
    <fieldset>
        <legend>Introduzca los datos del nuevo doctor</legend>
        
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id = "nombre" required>

        <label for="apellidos">Apellidos</label>
        <input type="text" name="data[apellidos]" required>

        <label for="telefono">Telefono</label>
        <input type="text" name="data[telefono]" required>

        <label for="especialidad">Especialidad</label>
        <input type="text" name="data[especialidad]" required>
        
        <input type="submit" value="Registrar">
    </fieldset>
</form>
