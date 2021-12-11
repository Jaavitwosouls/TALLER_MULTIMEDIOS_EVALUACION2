<?php include "logica.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    

    <link rel="stylesheet" href="assets/css/style_2.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style_admin.css">
    <script src="https://kit.fontawesome.com/7e5b2d153f.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Los Frikeros TEMAS</title>
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

<center><h1>Los Frikeros</h1></center>
    <div class="container mt-5">

        <div class="text-center">
            <a href="creacion.php" class="btn btn-success">Agregar un nuevo Tema</a><br><br><br>
            <p>Los siguientes temas entraran a votación, los mismos visitantes pueden votar por su favorito. Se espera integrarlo próximamente dentro de la página</p>
        </div>

        <div class="row" >
            <?php foreach($query as $q){ ?>
                <div class="col-12 col-lg-4 d-flex justify-content-center">
                    <div class="card text-dark bg-light mt-5" style="width: 22rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $q['tema'];?></h5><br><br><br>
                            <p class="card-text"><?php echo substr($q['informacion'], 0, 50);?></p><br><br><br>
                            <p class="card-text"><a href="<?php echo substr($q['url'], 0, 255);?>"><?php echo substr($q['url'], 0, 255);?></a></p>

                            <a href="votacion.php?n=si&id=<?php echo $_REQUEST['id']; ?>" class="btn btn-light"><i class="far fa-thumbs-up"></i>Mi voto<span class="text-danger">&rarr;</span></a>
                    
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>

        <?php if(isset($_REQUEST['info'])){ ?>
            <?php if($_REQUEST['info'] == "added"){?>
                <div class="alert alert-success" role="alert">

                </div>
            <?php }?>
        <?php } ?>

</div>
                
    </div>

    
    <script defer src="assets/js/index.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>
</html>