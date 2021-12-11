<?php
$conn = mysqli_connect("localhost", "root", "", "los_frikis");
$datos = "SELECT * FROM datos";
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Los Frikeros Admin</title>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style_admin.css">
    

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script
    src="https://kit.fontawesome.com/7e5b2d153f.js"
    crossorigin="anonymous"></script>

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


            <div class="container-table">
                <div class="table__title"> Datos ingresados por visitantes</div>
                <div class="table__header">ID</div>
                <div class="table__header">TEMA</div>
                <div class="table__header">INFORMACION</div>
                <div class="table__header">URL</div>
                <div class="table__header">A_FAVOR</div>
                <?php $resultado = mysqli_query($conn,$datos);
                while($fila=mysqli_fetch_assoc($resultado)){ ?>
                    <div class="table__item"><?php echo $fila["id"];?></div>
                    <div class="table__item"><?php echo $fila["tema"];?></div>
                    <div class="table__item"><?php echo $fila["informacion"];?></div>
                    <div class="table__item"><?php echo $fila["url"];?></div>
                    <div class="table__item"><?php echo $fila["voto_a_favor"];?></div>
                <?php
                }
                ?>
                
            </div>




        <script defer src="assets/js/index.js"></script>
    </body>
    </html>
