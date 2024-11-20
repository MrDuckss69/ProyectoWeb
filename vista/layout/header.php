<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="vista/css/style.css">
</head>
<body>
    <header>
        <!-- Navbar principal -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">Inicio</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <!-- Enlace al formulario de registro -->
                                <a class="nav-link" href="index.php?ruta=usuarios&metodo=registro">Registro</a>
                            </li>
                            <li class="nav-item">
                                <!-- Enlace al formulario de login -->
                                <a class="nav-link" href="index.php?ruta=usuarios&metodo=login">Login</a>
                            </li>
                            <li class="nav-item">
                                <!-- Enlace al formulario para agregar paquetes -->
                                <a class="nav-link" href="index.php?ruta=paquetes&metodo=crear">Agregar Paquete</a>
                            </li>
                            <li class="nav-item">
                                <!-- Enlace para listar paquetes -->
                                <a class="nav-link" href="index.php?ruta=paquetes&metodo=listarPaquetes">Ver Paquetes</a>
                            </li>
                        </ul>
                    </div>
                    <form>
                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <!-- Enlace a la sección Mi Cuenta -->
                                <a class="nav-link" href="index.php?ruta=admin&metodo=clientes">Mi cuenta</a>
                            </li>
                            <li class="nav-item">
                                <!-- Enlace a la sección Empleado -->
                                <a class="nav-link" href="index.php?ruta=admin&metodo=empleado">Empleado</a>
                            </li>
                            <li class="nav-item">
                                <!-- Enlace a la sección Administrador -->
                                <a class="nav-link" href="index.php?ruta=admin&metodo=admin">Administrador</a>
                            </li>
                        </ul>
                    </form>
                </div>         
            </div>
        </nav>
        <!-- Imagen -->
        <nav>
            <img src="https://i.imgur.com/vmoBtSz.jpeg" alt="" class="img-fluid mx-auto d-block" style="width: 2000px; height: 300px;">
        </nav>
        <!-- Navegación -->
        <nav>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <!-- Enlace a la sección de paquetes -->
            <a class="nav-link" href="index.php?ruta=paquetes&metodo=listarPaquetes">Paquetes</a>
        </li>
        <li class="nav-item">
            <!-- Enlace a la sección de vuelos -->
            <a class="nav-link" href="index.php?ruta=reservas&metodo=mostrarVuelos">Vuelos</a>
        </li>
        <li class="nav-item">
            <!-- Enlace a la sección de promociones -->
            <a class="nav-link" href="index.php?ruta=paquetes&metodo=mostrarPromos">Promociones</a>
        </li>
        <li class="nav-item">
            <!-- Enlace a la sección de hoteles -->
            <a class="nav-link" href="index.php?ruta=reservas&metodo=mostrarHoteles">Hoteles</a>
        </li>
        <li class="nav-item">
            <!-- Enlace a la sección de alquiler de sitio -->
            <a class="nav-link" href="index.php?ruta=reservas&metodo=mostrarAlquilerDeSitio">Alquiler de sitio</a>
        </li>
        <li class="nav-item">
            <!-- Enlace a la sección de ayuda -->
            <a class="nav-link" href="index.php?ruta=ayuda&metodo=index">Ayuda</a>
        </li>
    </ul>
</nav>

    </header>
</body>
</html>