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
            <h3>Lista de Reservas</h3>
        </div>
        
            <?php
            // Include config file
            require_once "../db/conexion.php";

            // Attempt select query execution
            $sql = "SELECT * FROM peliculas";
            if($result = mysqli_query($link, $sql)){
                if(mysqli_num_rows($result) > 0){
                    echo "<table class='table table-striped'>";
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
                                // echo "<td>";
                                //     echo "<a href='read.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                //     echo "<a href='update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                //     echo "<a href='delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                // echo "</td>";
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