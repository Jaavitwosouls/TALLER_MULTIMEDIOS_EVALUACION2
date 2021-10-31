<?php
$conexion = mysqli_connect("localhost", "root", "","tiles_application");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $consulta = "SELECT * FROM `videos` WHERE `id` = $id";
    $resultado = mysqli_query($conexion,$consulta);
    if(mysqli_num_rows($resultado) == 1){
        $fila = mysqli_fetch_array($resultado);
        $nombre = $fila['nombre'];
        $url = $fila['url'];


    }
}

?>

<?php
$conexion = mysqli_connect("localhost", "root", "","tiles_application");

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $url = $_POST['url'];
    $nombre= $_POST['nombre'];
    
    $consulta = "UPDATE `videos` SET `nombre` = '$nombre', `url` = '$url' WHERE `id` = '$id'";
    $resultado = mysqli_query($conexion, $consulta);

    if($resultado){
        echo "<span class='msnExito'>Video EDITADO Correctamente :) </span>";
    }else{
        echo "<span class='msnError'>Video No Pudo Ser EDITADO :( </span>";
    }
    header('Location: admin.php');
}



?>

<?php include("includes/header.php"); ?>

<div class="containe p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?=<?php echo $_GET['id'] ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre" value="<?php echo $nombre; ?>" class="form-control" placeholder="Actualice el nombre">
                    </div>
                    <div class="form-group">
                        <textarea name="url" rows="2" class="form-control" placeholder="Actualice la url"><?php echo $url; ?></textarea>
                    </div>
                    <button class="btn btn-sucess" name="update">
                        Actualizar        
                    </button>

                </form>

            </div>

        </div>

    </div>
</div>


