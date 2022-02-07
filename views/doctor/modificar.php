<section>
    <h2>Modificar doctor</h2>

    <form action="<?=base_url?>/Doctor/modificar" method="POST">
        <fieldset>
            <legend>Rescriba los nuevos valores a guardar (DNI está deshabilitado)</legend>

            <label for="dni">DNI</label>
            <input type="text" name="dni" id="dni" value="<?=$dni?>" readonly>

            <?php foreach($opciones_procesar as $campo): ?>

                <?php if($campo == 'especialidad'): ?> <!--La especialidad aparece como desplegable en vez de caja de texto-->

                    <label for="<?=$campo?>">Nueva <?=$campo?></label>
                    <select id="<?=$campo?>" name="<?=$campo?>">
                    <?php foreach($especialidades as $especialidad): ?>
                        <option value="<?=$especialidad -> getNombre()?>"><?=$especialidad -> getNombre()?></option>
                    <?php endforeach; ?>
                    </select>

                <?php else: ?>

                    <label for="<?=$campo?>">Nuevo/s <?=$campo?></label>
                    <input type="text" name="<?=$campo?>" id="<?=$campo?>">

                <?php endif; ?>

            <?php endforeach; ?>
            
            <input type="submit" value="Guardar modificaciones">
        </fieldset>
    </form>
</section>
