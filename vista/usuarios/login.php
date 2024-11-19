<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="vista/css/style.css">

</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center mt-5">Login</h2>
                <!-- Formulario para el inicio de sesión -->
                <form action="process_login.php" method="POST">
                    <div class="form-group">
                        <label for="correo">Correo Electrónico</label>
                        <!-- Cambié "email" a "correo" para que coincida con `process_login.php` -->
                        <input type="email" class="form-control" id="correo" name="correo" required>
                    </div>
                    <div class="form-group">
                        <label for="contrasena">Contraseña</label>
                        <!-- Cambié "password" a "contrasena" para que coincida con `process_login.php` -->
                        <input type="password" class="form-control" id="contrasena" name="contrasena" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
                </form>
                <a href="index.php" class="btn btn-secondary btn-block mt-3">Regresar al Inicio</a>
                <a href="index.php?u=registro" class="btn btn-info btn-block mt-3">Registrarse</a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>