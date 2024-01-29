<?php
session_start();

// Verifica si el usuario ha iniciado sesión //
if (!isset($_SESSION['nombre'])) {
    header("Location: sesion.php");
    exit();
}

// Obtén la información del usuario desde la sesión //
$nombre = $_SESSION['nombre'];
$email = $_SESSION['email'];
$direccion = $_SESSION['direccion'];
$telefono = $_SESSION['telefono'];
$fecha = $_SESSION['fecha'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Usuario</title>
    <link rel="stylesheet" href="estilos1.css">
    <link rel="icon" type="image/png" sizes="16x16" href="images/G.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX" crossorigin="anonymous" />


</head>
<body>
    
    <header>
        <h1>Bienvenido, <?php echo $nombre; ?></h1>
    </header>

    <section class= "Contenedor-informacion">

        <section class="informacion-usuario">
            <h2>Información Personal</h2>
            <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Dirección:</strong> <?php echo $direccion; ?></p>
            <p><strong>Teléfono:</strong> <?php echo $telefono; ?></p>
            <p><strong>Fecha de Registro:</strong> <?php echo $fecha; ?></p>

            <form method="post" action="cerrar.php">
                <button type="submit" name="cerrar_sesion">Cerrar Sesión</button>
            </form>

        </section>

        <section class="informacion-hospital">
            <h2>Hospital</h2>
            <p><strong>¿Quiénes Somos?: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat molestiae, est velit animi asperiores, accusamus harum quisquam, assumenda exercitationem hic dignissimos quaerat omnis. Fugit odio quisquam natus aspernatur perferendis sunt? </strong></p>

            <div class="carrusel">
                <img src="images/img.png" alt="Imagen 1">
                <img src="images/img1.png" alt="Imagen 2">
                <img src="images/img2.png" alt="Imagen 3">
                <img src="images/img3.png" alt="Imagen 3">

            </div>
        </section>
    </section>


    <section class="opciones">
        <h2>Opciones predeterminadas</h2>
        <button class="icono-btn"><i class="fas fa-home"></i></button>
        <button class="icono-btn"><i class="fas fa-search"></i></button>
        <button class="icono-btn"><i class="fas fa-envelope"></i></button>
    <!-- Agrega más botones según sea necesario -->
    </section>

    <footer>
        <p><b>@Gustavo</b></p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let index = 0;
            const imagenes = document.querySelectorAll('.carrusel img');
            const intervalo = 3000; // Cambia la imagen cada 3 segundos (3000 milisegundos)

            function cambiarImagen() {
                imagenes.forEach(img => img.style.display = 'none');
                index = (index + 1) % imagenes.length;
                imagenes[index].style.display = 'block';
            }

            cambiarImagen(); // Muestra la primera imagen al cargar la página

            setInterval(cambiarImagen, intervalo); // Cambia la imagen cada intervalo de tiempo
        });
    </script>
</body>
</html>
