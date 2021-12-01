<div class="container mt-5">
    <h1 class="text-center">Inicia sesión</h1>
    <form action="index.php" class="text-center">
        <div class="container py-3 text-center">
            <label for="username">Usuario</label>
            <input type="text" id="username" name="username" placeholder="Username">
        </div>
        <div class="container py-3 text-center">
            <label for="password">Password</label>
            <input type="text" id="password" placeholder="Contrasena" name="password">
        </div>
        <input type="hidden" name="controller" value="login">
        <input type="hidden" name="action" value="doLogin">
        <button class="btn btn-success px-5 py-1" type="submit">Log In</button>
    </form>
</div>