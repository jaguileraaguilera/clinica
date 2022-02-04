<main>
<h2>Iniciar sesión</h2>
    <form action="<?=base_url?>/Usuario/login" method="POST">
        <fieldset>
            <legend>Introduzca sus credenciales</legend>

            <label for="correo">Correo</label>
            <input type="text" name="correo">

            <label for="password">Contraseña</label>
            <input type="password" name="password">

            <input type="submit" value="Iniciar sesion">
        </fieldset>
    </form>
</main>
