<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('../includes/header.php') ?>
</head>
<body>
    <?php include('../includes/nav.php') ?>
    <div class="container">
        <div class="container text-center m-5">
            <h3>Editar Peliculas</h3>
            <div class="row pull-right">
                <a href="index.php" class="fa fa-bars btn btn-primary btn-sm"></a>
            </div>
        </div><br>
            <?php
                require_once "../../db/conexion.php";

                $id = mysqli_real_escape_string($link,(strip_tags($_GET["id"],ENT_QUOTES)));
                $sql = mysqli_query($link, "SELECT * FROM peliculas WHERE id='$id'");
                if(mysqli_num_rows($sql) == 0){
                    header("Location: index.php");
                }else{
                    $row = mysqli_fetch_assoc($sql);
                }
			?>

			<div class="container">
				<form action="../../functions/peliculas/actualizarPelicula.php" method="POST">
                    <div class="content-cell">
                        <div class="modal-body">
                            <div class="row">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <div class="col-md-6">
                                    <label for="">Nombre</label>
                                    <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control" placeholder="Nombre" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Descripción</label>
                                    <input type="text" name="description" value="<?php echo $row['description']; ?>" class="form-control" placeholder="Descripción" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Año</label>
                                    <input type="text" name="year" value="<?php echo $row['year']; ?>" class="form-control" placeholder="Año" required>
                                </div>
                                <!-- <div class="col-md-6">
                                    <label for="">Categoría</label>
                                    <input type="text" name="generos_id" value="<?php echo $row['generos_id']; ?>" class="form-control" placeholder="Categoría" required>
                                </div> -->
                                <div class="col-md-6">
                                    <label for="generos_id">Género</label><br>
                                    <select class="form-control" name="generos_id" id="">
                                        <option value="0" disabled selected>Generos</option>
                                        <?php
                                            $query="SELECT id, name FROM `generos`";
                                            $result = mysqli_query($link, $query);
                                            while (($fila = mysqli_fetch_array($result)) != NULL) {
                                                echo '<option value="'.$fila["id"].'">'.$fila["name"].'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="Actualizar">
                        </div>
                    </div>
				</form>
			</div>
        </table>
    </div>
    <?php include('../includes/footer.php') ?>
</body>
</html>