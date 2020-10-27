<?php


function getGeneros()
{
    require_once "../../db/conexion.php";

    $sql = "SELECT * FROM generos";

    $result = mysqli_query($link, $sql);

    return $result;
}