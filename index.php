<?php
    require_once './config/config.php';
    require_once './config/parameters.php';
    require_once "autoloader.php";

    use controllers\FrontController;
?>

<?php require_once 'views/header.php';?>

<?php if (!empty($_GET['controller'])): ?>
    <?php FrontController::main() ?>
<?php else: ?>
    <?php require_once('views/usuario/iniciar_sesion.php')?>
<?php endif; ?>

<?php require_once 'views/footer.php' ?>

<!-- <nav>
        <ul>
            <li><a href="<?=base_url."/Usuario/iniciar_sesion"?>">Iniciar Sesión</a></li>
            <li><a href="<?=base_url."/Paciente/mostrarTodos"?>">Mostrar todos los pacientes</a></li>
            <li><a href="<?=base_url."/Doctor/Listar"?>">Listar Doctores</a></li>
            <li><a href="<?=base_url."/Doctor/registro" ?>">Registrar un nuevo médico</a></li>
        </ul>
    </nav> -->


