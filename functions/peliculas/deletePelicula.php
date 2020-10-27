<?php
    require_once "../../db/conexion.php";
    
    if(count($_GET)>0) {
        $id             = $_GET['id'];

        $delete = mysqli_query($link, "DELETE FROM peliculas WHERE id='$id'");

		header("Location: ../../views/peliculas/index.php");

        exit();
    }