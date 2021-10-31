
<?php

$conexion = mysqli_connect("localhost", "root", "","tiles_application");

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $consulta = "DELETE FROM `videos` WHERE `videos`.`id` = $id";
    $resultado = mysqli_query($conexion,$consulta);
    
    if($resultado){
        echo "<span class='msnExito'>Video ELIMINADO Correctamente :) </span>";
    }else{
        echo "<span class='msnError'>Video No Pudo Ser ELIMINADO :( </span>";
    }
    header('Location: admin.php');
}

?>
