<?php
    // Include database connection file
    require_once "../db/conexion.php";
    
    if(count($_POST)>0) {
        echo 'Mariano Cuenca';
        // mysqli_query($link, "UPDATE users set
        //                                     name ='" . $_POST['name'] . "',
        //                                     description ='" . $_POST['description'] . "',
        //                                     generos_id ='" . $_POST['generos_id'] . "',
        //                                     year ='" . $_POST['year'] . "'
        //                                     WHERE id='" . $_POST['id'] . "'");
        // header("location: index.php");
        // exit();
    }