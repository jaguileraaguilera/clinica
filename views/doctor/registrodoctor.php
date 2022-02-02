<h1>Registrar un nuevo médico</h1>

<form action="<?=base_url?>?controller=Doctor&action=save" method="POST">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id = "nombre" required>
<!-- 
    <label for="apellidos">Apellidos</label>
    <input type="text" name="data[apellidos]" required>

    <label for="telefono">Telefono</label>
    <input type="text" name="data[telefono]" required>

    <label for="especialidad">Especialidad</label>
    <input type="text" name="data[especialidad]" required>
    
     -->
    <input type="submit" value="Registrar">
    
</form>
