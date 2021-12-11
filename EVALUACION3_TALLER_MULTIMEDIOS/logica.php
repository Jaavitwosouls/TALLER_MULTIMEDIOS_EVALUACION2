<?php

    // Don't display server errors 
    ini_set("display_errors", "off");

    // Initialize a database connection
    $conn = mysqli_connect("localhost", "root", "", "los_frikis");

    // Destroy if not possible to create a connection
    if(!$conn){
        echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
    }

    // Get data to display on index page
    $sql = "SELECT * FROM datos";
    $query = mysqli_query($conn, $sql);

    // Create a new post
    if(isset($_REQUEST['new_post'])){
        $tema = $_REQUEST['tema'];
        $informacion = $_REQUEST['informacion'];
        $url = $_POST['url'];
    

        $sql = "INSERT INTO datos (tema, informacion, url) VALUES('$tema', '$informacion', '$url')";
        mysqli_query($conn, $sql);

        echo $sql;

        header("Location: contenido.php?info=added");
        exit();
    }

    // Get post data based on id
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM datos WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }

    // Delete a post
    if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM datos WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: contenido.php");
        exit();
    }

    if(isset($_REQUEST['update'])){
        $id = $_REQUEST['id'];
        $tema = $_REQUEST['tema'];
        $informacion = $_REQUEST['informacion'];

        $sql = "UPDATE datos SET tema = '$tema', informacion = '$informacion' WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: contenido.php");
        exit();
    }



?>