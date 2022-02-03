</header>
<section>
    <h2>Listado de doctores</h2>

    <?php foreach($doctores as $doctor) :?>
        <?=$doctor->getDni()?>
        <?=$doctor->getNombre()?>
        <?=$doctor->getApellidos()?>
        <?=$doctor->getTelefono()?>
        <?=$doctor->getEspecialidad()?>
        <br>
    <?php endforeach;?>
</section>
