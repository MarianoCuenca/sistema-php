<?php

require_once "../../db/conexion.php";

if(count($_POST)>0) {
    $name           = $_POST['name'];
    $description    = $_POST['description'];
    $generos_id     = $_POST['generos_id'];
    $year           = $_POST['year'];

    $create = mysqli_query($link, "INSERT INTO peliculas(name, description, generos_id, year) VALUES('$name','$description', '$generos_id', '$year')");

    if($create){
        header("Location: ../../views/peliculas/index.php");
    }else{
        echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, no se pudo guardar los datos.</div>';
    }
    exit();
}