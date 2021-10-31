<?php

$conexion = mysqli_connect("localhost", "root", "","tiles_application");
if(isset($_POST['save_task'])){
    $nombre = $_POST['nombre'];
    $url = $_POST['url'];
    $tipo = $_POST['tipo'];
    $consulta="INSERT INTO `videos` (`id`, `url`, `nombre`, `fecha`, `tipo`) VALUES ('', '$url', '$nombre', current_timestamp(), '$tipo' )";
    $resultado = mysqli_query($conexion,$consulta);



    if($resultado){
        echo "<span class='msnExito'>Video Guardado Correctamente :) </span>";
            }else{
                echo "<span class='msnError'>Video No Pudo Ser Guardado :( </span>";
            } 
            header('Location: admin.php');      
}


?>



