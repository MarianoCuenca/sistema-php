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
        </div>
        
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
				<form action="../../functions/actualizarPelicula.php" method="POST">
                    <div class="content-cell">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Nombre</label>
                                    <input type="text" name="codigo" value="<?php echo $row['name']; ?>" class="form-control" placeholder="Nombre" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Descripción</label>
                                    <input type="text" name="codigo" value="<?php echo $row['description']; ?>" class="form-control" placeholder="Descripción" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Año</label>
                                    <input type="text" name="codigo" value="<?php echo $row['year']; ?>" class="form-control" placeholder="Año" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Categoría</label>
                                    <input type="text" name="codigo" value="<?php echo $row['generos_id']; ?>" class="form-control" placeholder="Categoría" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="Submit Actualizar">
                        </div>
                    </div>
				</form>
			</div>
			<!-- // echo $sql;

            // $sql = "SELECT * FROM peliculas";
            // if($result = mysqli_query($link, $sql)){
            //     if(mysqli_num_rows($result) > 0){
            //         echo "<table class='table table-striped table-hover'>";
            //             echo "<thead>";
            //                 echo "<tr>";
            //                     echo "<th>#</th>";
            //                     echo "<th>Name</th>";
            //                     echo "<th>Descripción</th>";
            //                     echo "<th>Año</th>";
            //                     echo "<th>Acciones</th>";
            //                 echo "</tr>";
            //             echo "</thead>";
            //             echo "<tbody>";
            //             while($row = mysqli_fetch_array($result)){
            //                 echo "<tr>";
            //                     echo "<td>" . $row['id'] . "</td>";
            //                     echo "<td>" . $row['name'] . "</td>";
            //                     echo "<td>" . $row['description'] . "</td>";
            //                     echo "<td>" . $row['year'] . "</td>";
            //                     // echo "<td>";
            //                     //     echo "<a href='read.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
            //                     //     echo "<a href='update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
            //                     //     echo "<a href='delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
            //                     // echo "</td>";
            //                     echo '
            //                         <td>
            //                             <a href="edit.php?id='.$row['id'].'" title="Editar datos" class="btn btn-primary btn-sm"><span class="fa fa-pencil" aria-hidden="true"></span></a>
            //                             <a href="index.php?aksi=delete&id='.$row['id'].'" title="Eliminar" onclick="return confirm(\'Esta seguro de borrar los datos '.$row['name'].'?\')" class="btn btn-danger btn-sm"><span class="fa fa-trash" aria-hidden="true"></span></a>
            //                         </td>
            //                     </tr>
            //                     ';
            //                 echo "</tr>";
            //             }
            //             echo "</tbody>";
            //         echo "</table>";
            //         // Free result set
            //         mysqli_free_result($result);
            //     } else{
            //         echo "<p class='lead'><em>Aún no existen registros.</em></p>";
            //     }
            // } else{
            //     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            // }

            // Close connection
            // mysqli_close($link); -->
        </table>
    </div>
    <?php include('../includes/footer.php') ?>
</body>
</html>