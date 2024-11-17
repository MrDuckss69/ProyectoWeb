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
                            <a class="nav-link" href="index.php?u=registro">Registro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?u=login">Login</a>
                        </li>
                    </ul>
                    <form>
                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?a=clientes">Mi cuenta</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?a=empleado">Empleado</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?a=admin">Administrador</a>
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
                    <a class="nav-link" href="index.php?p=mostrarPaquetes">Paquetes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?r=mostrarVuelos">Vuelos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?p=mostrarPromos">Promociones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?r=mostrarHoteles">Hoteles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?r=mostrarAlquilerDeSitio">Alquiler de sitio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?i=ayuda">Ayuda</a>
                </li>
            </ul>
        </nav>
    </header>
</body>
</html>
