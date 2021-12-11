<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "los_frikis");

if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    $voto_a_favor = $_REQUEST['voto_a_favor'];
    
    $sql = "UPDATE datos SET voto_a_favor = voto_a_favor + 1 WHERE id = id";
    mysqli_query($conn, $sql);


    header("Location: contenido.php");
    exit();
}