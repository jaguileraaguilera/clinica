<h2>Bienvenido/a <?=$usuario->getNombre()?></h2>

<?php if ($usuario->getEsAdmin()== 1): ?>
    <?php require_once('panel_administrador.php')?>
<?php else :?>
    <?php require_once('panel_paciente.php')?>
<?php endif;?>

<?php require_once('cerrar_sesion.php')?>
