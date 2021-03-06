<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="CSS/style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
  
    <script type="text/javascript" src="JS/jquery.min.js"></script>
    <script type="text/javascript" src="JS/Chart.min.js"></script>
    <script type="text/javascript" src="JS/buscar.js"></script>
    <script type="text/javascript" src="JS/agregar.js"></script>
</head>
<title>Hotelux</title>
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Hotelux</h3>
            </div>

            <ul class="list-unstyled components">
                <?php
                session_start();
                if (isset($_SESSION["nombre"])) {
                    print "<p>Bienvenido, " . strtoupper($_SESSION['nombre']) . "</p>";
                } else {
                    print "<p>ERROR IN LOGIN </p>";
                }
                ?>
                <li>
                    <a href="clientes.php">Clientes</a>
                </li>
                <li>
                    <a href="calendar.php">Calendario</a>
                </li>
                <li>
                    <a href="habitaciones_reservadas.php">Habitaciones Reservadas</a>
                </li>
                <li>
                    <a href="habitaciones_disponibles.php">Habitaciones Disponibles</a>
                </li>
                <li>
                    <a href="reservas.php">Multiples Reservas</a>
                </li>
                <li>
                    <a href="valoraciones.php">Valoraciones de Clientes</a>
                </li>
                <li>
                    <a href="graficas.php">Estadisticas/Graficas</a>
                </li>
                <li>
                    <a href="trabajadores.php">Trabajadores (Administración)</a>
                </li>
            </ul>
            <ul class="list-unstyled components ">
                <li>
                    <a href="cerrar.php">Cerrar Sesion</a>
                </li>
            </ul>
        </nav>
        <div class="container">