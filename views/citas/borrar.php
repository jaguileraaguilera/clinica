<section>
    <h2>Borrado</h2>

    <form action="<?=base_url?>/Cita/borrar" method="POST">
        <fieldset>
            <legend>Seleccione el identificador de la cita a borrar</legend>

            <label for="id">ID</label>
            <select id="id" name="id">
            <?php foreach($citas as $cita):?>
                <option value="<?=$cita->getId()?>"><?=$cita->getId()?></option>
            <?php endforeach;?>
            </select>

            <input type="submit" value="Borrar">
        </fieldset>
    </form>
</section>