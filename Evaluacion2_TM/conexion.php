<?php
include("config.php");

function conexionMySql(){
    $conectar = mysqli_connect(SERVER, USER, PASS, BD);
    if(!$conectar){
        echo "Ups algo pasó ! no se pudo conectar a la base de datos".mysqli_connect_error();
    }
    mysqli_set_charset($conectar, "utf8");
    return $conectar;
}
?>