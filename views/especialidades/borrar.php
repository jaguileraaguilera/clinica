<section>
    <h2>Borrado</h2>

    <form action="<?=base_url?>/Especialidad/borrar" method="POST">
        <fieldset>
            <legend>Seleccione el nombre de la especialidad a borrar</legend>

            <label for="nombre">Nombre</label>
            <select id="nombre" name="nombre">
            <?php foreach($especialidades as $especialidad):?>
                <?php if($especialidad->getNombre() != 'undefined'): ?>
                    <option value="<?=$especialidad->getNombre()?>"><?=$especialidad->getNombre()?></option>
                <?php endif; ?>
            <?php endforeach;?>
            </select>

            <input type="submit" value="Borrar">
        </fieldset>
    </form>
</section>
