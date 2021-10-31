<?php
$user=$_POST['user'];
$password=$_POST['password'];
session_start();
$_SESSION['user']=$user;

$conexion=mysqli_connect("localhost", "root", "", "tiles_application");

$consulta="SELECT * FROM usuarios where user='$user' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location: home.php");
}else{
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACIÓN</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);


