<?php

$conexion = mysqli_connect("localhost", "root", "","opcional");

if(isset($_POST['save_task'])){
    $nombre = $_POST['nombre'];
    $autor = $_POST['autor'];
    $link = $_POST['link'];
    $nombre_tema = $_POST['nombre_tema'];
    $psinopsis = $_POST['psinopsis'];
    $consulta="INSERT INTO `datos` (`id`, `nombre`, `autor`, `link`, `nombre_tema`, `psinopsis`) VALUES ('', '$nombre', '$autor', '$link', '$nombre_tema', '$psinopsis')";
    $resultado = mysqli_query($conexion,$consulta);

    if($resultado){
        echo "<span class='msnExito'>Datos Guardados Correctamente :) </span>";
            }else{
                echo "<span class='msnError'>Datos no pudieron ser Guardados :( </span>";
            } 

}


?>