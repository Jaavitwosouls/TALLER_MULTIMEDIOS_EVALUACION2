<?php include "logica.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/style_2.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7e5b2d153f.js" crossorigin="anonymous"></script>
    <title>LosFrikeros AGREGAR TEMAS</title>
</head>
<body>
<header class="header">
            <nav class="nav">
                <a href="#" class="logo nav-link">LosFrikeros</a>
                <button class="nav-toggle" aria-label="Abrir menú">
                <i class="fas fa-bars"></i>
                </button>
                <ul class="nav-menu">
                <li class="nav-menu-item">
                    <a href="index.php" class="nav-menu-link nav-link">inicio</a>
                </li>
                <li class="nav-menu-item">
                    <a href="dc_marvel.html" class="nav-menu-link nav-link">TEMAS/POPULARES</a>
                </li>
                <li class="nav-menu-item">
                    <a href="contenido.php" class="nav-menu-link nav-link">Temas/SUGERIDOS</a>
                </li>
                <li class="nav-menu-item">
                    <a href="creacion.php" class="nav-menu-link nav-link">Agregar Tema</a>
                </li>
                <li class="nav-menu-item">
                    <a href="admin.php" class="nav-menu-link nav-link">Admin</a>
                </li>
            </nav>
            </header>
            <br><br><br><br>
        <br>
        <div class="text-center">
            <a href="contenido.php" class="btn btn-success">Volver a temas</a>
        </div>

<div class="container mt-5">
        <form method="POST" action="contenido.php"><br>
            <input type="text" placeholder="Ingrese el nuevo tema que le gustaría encontrar en la plataforma próximamente / descripción corta" class="form-control my-3 text-dark bg-light text-center" name="tema"><br>
            <textarea name="informacion" class="form-control my-3 text-dark bg-light text-center" placeholder="Algun comentario, de ¿Por qué eligió este tema?" cols="30" rows="10"></textarea><br><br><br>
            <textarea type="text" name="url" class="form-control text-center" placeholder="Ingrese URL de información de respaldo a su idea de tema" autofocus></textarea><br><br><br>
            <h6 class="btn-success">"" Los temas agregados por los visitantes entraran a votación y dependiendo de sus votos, serán agregados próximamente "" </h6><br><br>

            <center><button class="btn btn-success" name="new_post" type="submit">enviar</a></button></center>
            </div>
        </form>
</div>


<?php
    $conn = mysqli_connect("localhost", "root", "", "los_frikis");

if(isset($_REQUEST['new_comentario'])){
        $usuario = $_REQUEST['usuario'];
        $comenatio = $_REQUEST['comenatio'];
    
        $sql = "INSERT INTO datos (usuario, comenatio, url) VALUES('$usuario', '$comenatio')";
        mysqli_query($conn, $sql);

        echo $sql;

        header("Location: contenido.php");
        exit();
    }

?>


<br><br><br><br><br>

    <center><form action="" method="POST">
    <input type="text" name="usuario" placeholder="usuario">
    <input type="text" name="comentario" placeholder="comentario">
    <input type="submit" name="enviar" value="Enviar comentario">
    </form></center>
    <br><br><br><br><br>
    <?php

    if(isset($_POST['enviar']))
    {
        $usuario = utf8_decode(mysqli_escape_string($conn,$_POST['usuario']));
        $comentario = utf8_decode(mysqli_escape_string($conn,$_POST['comentario']));
        if($usuario == '' or $comentario == '')
        {
            echo "Lo sentimos, pero no se puede dejar los campos sin rellenar.";
        }
        else
        {
            $insertar = mysqli_query($conn, "INSERT INTO comentarios(usuario,comentario) VALUES ('".$usuario."', '".$comentario."')")or die (mysqli_error($conexion));
            echo "El comentario ha sido introducido correctamente.";
        }
    }

    ?>
<center>
<?php

$consulta = mysqli_query($conn, "SELECT * FROM comentarios")or die(mysqli_error($conn));
while($row = mysqli_fetch_assoc($consulta))
{
    echo "<div class='comentario'>Usuario : ".$row['usuario']."<br><br>".$row['comentario']."
    
    </div>";
}


?>
</center>

<script defer src="assets/js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>