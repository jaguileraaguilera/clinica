<section>
    <h1>Panel de usuario administrador</h1>

    <h2>Doctores</h2>
    <nav>
        <ul>
            <li><a href="<?=base_url."/Doctor/listar" ?>">Ver todos</a></li>
            <li><a href="<?=base_url."/Doctor/ver_formulario_alta" ?>">Registrar un nuevo doctor</a></li>
            <li><a href="<?=base_url."/Doctor/ver_opciones_modificar" ?>">Modificar los datos de un doctor</a></li>
            <li><a href="<?=base_url."/Doctor/ver_opciones_borrado" ?>">Borrar</a></li>
        </ul>
    </nav>

    <h2>Usuarios / Pacientes</h2>
    <nav>
        <ul>
            <li><a href="<?=base_url."/Usuario/listar" ?>">Ver todos</a></li>
            <li><a href="<?=base_url."/Usuario/dar_alta" ?>">Registrar un nuevo usuario</a></li>
            <li><a href="#">Modificar los datos de un usuario</a></li>
            <li><a href="#">Borrar</a></li>
        </ul>
    </nav>

    <h2>Citas</h2>
    <nav>
        <ul>
            <li><a href="<?=base_url."/Cita/listar"?>">Ver todas</a></li>
            <li><a href="#">Crear cita</a></li>
            <li><a href="<?=base_url."/Cita/ver_opciones_borrado" ?>">Borrar</a></li>
        </ul>
    </nav>

    <h2>Especialidades</h2>
    <nav>
        <ul>
            <li><a href="#">Ver todas</a></li>
            <li><a href="#">Registrar una nueva especialidad</a></li>
            <li><a href="#">Modificar los datos de una especialidad</a></li>
            <li><a href="#">Borrar</a></li>
        </ul>
    </nav>
</section>
