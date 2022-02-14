<section>
    <h2>Dar de alta una especialidad</h2>

    <form action="<?=base_url?>/Especialidad/crear" method="POST">
        <fieldset>
            <legend>Introduzca los datos de la nueva especialidad</legend>

            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
            
            <input type="submit" value="Registrar">
        </fieldset>
    </form>
</section>
