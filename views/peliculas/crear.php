<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('../includes/header.php') ?>
    </head>
<body>
    <?php
        include('../includes/nav.php');
        include '../../functions/generos.php'
    ?>
    <div class="container">
        <div class="container text-center m-5">
            <h3>Crear Peliculas</h3>
        </div>
        <div class="container">
            <form action="../../functions/peliculas.php" method="POST">
                <div class="content-cell">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Nombre</label>
                                <input type="text" class="form-control" name="name" placeholder="Ingrese Nombre">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Descripción</label>
                                <input type="text" class="form-control" name="description" placeholder="Ingrese Description">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Año</label>
                                <input type="text" class="form-control" name="year" placeholder="Ingrese Año">
                            </div>
                            <div class="col-md-6">
                                <label for="generos_id">Género</label><br>
                                <select class="form-control" name="generos_id" id="">
                                    <option value=""></option>
                                </select>
                            </div>
                            <?php
                                echo getGeneros()
                            ?>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php include('../includes/footer.php') ?>
</body>
</html>