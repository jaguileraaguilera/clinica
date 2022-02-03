<section>
    <h2>Borrado</h2>

    <form action="<?=base_url?>/Doctor/borrar" method="POST">
    <fieldset>
        <legend>Introduzca el DNI del doctor a borrar</legend>

        <label for="dni">DNI</label>
        <input type="text" name="dni" id="dni" required>

        <input type="submit" value="Borrar">
    </fieldset>
</form>
</section>