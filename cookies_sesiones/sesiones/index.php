<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>
<body>
    
    <?php
    # si la variable $_SESSION esta definida hay un usuario logeado
     if( isset( $_SESSION["id"] ) ): ?>
    
        <h1>¡Hola <?= $_SESSION["username"] ?>!</h1>
        <p>Tu email es <?= $_SESSION["email"] ?></p>

    <?php else: ?>

        <h1>No has iniciado sesión :(</h1>
    
    <?php endif; ?>

    <form action="login.php" method="get">
        <h2>Selector de usuario</h2>
        <label for="nombre">Nombre:</label>
        <input type="text" name="user" id="nombre" placeholder="Ingrese su id" title='id del array'>

        <input type="submit" value="Iniciar sesión">
    </form>

    <form action="logout.php" method="get">
    <button type="submit" name="button">Cerrar sesión</button>
    </form>

</body>
</html>