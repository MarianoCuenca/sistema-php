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
            <h3>Lista de Peliculas</h3>
            <div class="row pull-right">
                <a href="crear.php" class="fa fa-plus btn btn-primary btn-sm"> CREAR</a>
            </div>
        </div>
        
            <?php
                require_once "../../db/conexion.php";

                $sql = "SELECT * FROM peliculas";
                if($result = mysqli_query($link, $sql)){
                    if(mysqli_num_rows($result) > 0){
                        echo "<table class='table table-striped table-hover'>";
                            echo "<thead>";
                                echo "<tr>";
                                    echo "<th>#</th>";
                                    echo "<th>Name</th>";
                                    echo "<th>Descripción</th>";
                                    echo "<th>Año</th>";
                                    echo "<th>Acciones</th>";
                                echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while($row = mysqli_fetch_array($result)){
                                echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td>" . $row['name'] . "</td>";
                                    echo "<td>" . $row['description'] . "</td>";
                                    echo "<td>" . $row['year'] . "</td>";
                                    echo '
                                        <td>
                                            <a href="edit.php?id='.$row['id'].'" title="Editar datos" class="btn btn-primary btn-sm"><span class="fa fa-pencil" aria-hidden="true"></span></a>
                                            <a href="../../functions/peliculas/deletePelicula.php?id='.$row['id'].'" title="Eliminar" onclick="return confirm(\'Esta seguro de borrar los datos '.$row['name'].'?\')" class="btn btn-danger btn-sm"><span class="fa fa-trash" aria-hidden="true"></span></a>
                                        </td>
                                    </tr>
                                    ';
                                echo "</tr>";
                            }
                            echo "</tbody>";
                        echo "</table>";
                        // Free result set
                        mysqli_free_result($result);
                    } else{
                        echo "<p class='lead'><em>Aún no existen registros.</em></p>";
                    }
                } else{
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                }

                // Close connection
                mysqli_close($link);
            ?>
        </table>
    </div>
    <?php include('../includes/footer.php') ?>
</body>
</html>