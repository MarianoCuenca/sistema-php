<?php
    require_once "../../db/conexion.php";
    
    if(count($_POST)>0) {
        $id             = $_POST['id'];
        $name           = $_POST['name'];
        $description    = $_POST['description'];
        $generos_id     = $_POST['generos_id'];
        $year           = $_POST['year'];

        $update = mysqli_query($link, "UPDATE peliculas SET name='$name', description='$description', generos_id='$generos_id', year='$year' WHERE id='$id'");
				if($update){
					header("Location: ../../views/peliculas/edit.php?id=".$id."&pesan=sukses");
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, no se pudo guardar los datos.</div>';
				}
        exit();
    }