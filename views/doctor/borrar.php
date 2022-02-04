<section>
    <h2>Borrado</h2>

    <form action="<?=base_url?>/Doctor/borrar" method="POST">
        <fieldset>
            <legend>Seleccione el DNI del doctor a borrar</legend>

            <label for="dni">DNI</label>
            <select id="dni" name="dni">
            <?php foreach($doctores as $doctor):?>
                <option value="<?=$doctor->getDni()?>"><?=$doctor->getDni()?></option>
            <?php endforeach;?>
            </select>

            <input type="submit" value="Borrar">
        </fieldset>
    </form>
</section>