</header>
<section>
    <h1>Panel de usuario administrador</h1>

    <h2>Doctores</h2>
    <nav>
        <ul>
        <li><a href="<?=base_url."/Doctor/Listar"?>">Ver todos</a></li>
            <li><a href="<?=base_url."/Doctor/dar_alta" ?>">Registrar un nuevo doctor</a></li>
            
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

