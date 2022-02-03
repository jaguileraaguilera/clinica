</header>
<section>
    <h1>Panel de usuario administrador</h1>

    <h2>Doctores</h2>
    <nav>
        <ul>
            <li><a href="<?=base_url."/Doctor/listar"?>">Ver todos</a></li>
            <li><a href="<?=base_url."/Doctor/ver_formulario_alta" ?>">Registrar un nuevo doctor</a></li>
            <li><a href="<?=base_url."/Doctor/ver_formulario_modificacion" ?>">Modificar los datos de un doctor</a></li>
            <li><a href="<?=base_url."/Doctor/ver_opciones_borrado" ?>">Borrar</a></li>
        </ul>
    </nav>

    <h2>Usuarios / Pacientes</h2>
    <nav>
        <ul>
            <li><a href="<?=base_url."/Usuario/dar_alta" ?>">Registrar un nuevo usuario</a></li>
            <li><a href="<?=base_url."/Paciente/mostrarTodos"?>">Mostrar todos los pacientes</a></li>
        </ul>
    </nav>

    <h2>Citas</h2>
    <nav>
        <ul>
            
        </ul>
    </nav>
</section>

