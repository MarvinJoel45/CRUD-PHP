<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Servidor web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <?php
    include 'connection.php';
    $id = $_GET['id'];
    $sql = "select * from persona where id='" . $id . "'";
    $result = mysqli_query($conexion, $sql);
    while ($persona = mysqli_fetch_assoc($result)) {
        $sexo = $persona['sexo'];
    ?>

        <div class="container col-sm-6 mt-3">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Editar persona</h3>
                </div>
                <div class="card-body">
                    <form action="">
                        <input type="hidden" name="txtid" value="<?php echo $persona['id'] ?>">
                        <div class="mb-2">
                            <label for="" class="form-label">Nombre</label>
                            <input type="text" name="txtnombre" value="<?php echo $persona['nombre'] ?>" placeholder="Registre el nombre" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Apellido</label>
                            <input type="text" name="txtapellido" value="<?php echo $persona['apellido'] ?>" placeholder="Registre el apellido" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="sexo" class="form-label">Sexo</label>
                            <div>
                                <div class="form-check">
                                    <input type="radio" name="sexo" value="M" <?php if (isset($sexo) && $sexo == 'M') echo 'checked'; ?> class="form-check-input">
                                    <label for="masculino" class="form-check-label">Masculino</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="sexo" value="F" <?php if (isset($sexo) && $sexo == 'F') echo 'checked'; ?> class="form-check-input">
                                    <label for="femenino" class="form-check-label">Femenino</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Edad</label>
                            <input type="number" name="edad" min="1" max="100" value="<?php echo $persona['edad'] ?>" class="form-control">
                        </div>
                        <div class="mb-2">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="Index.php" class="btn btn-secondary">Cancelar</a>
                        </div>
                    <?php } ?>
                    </form>
                </div>

                <?php

                include 'connection.php';

                $idpersona = $_GET['txtid'];
                $nombre = $_GET['txtnombre'];
                $apellido = $_GET['txtapellido'];
                $sexo = $_GET['sexo'];
                $edad = $_GET['edad'];

                if ($nombre != null && $apellido != null && $sexo != null && $edad != null) {
                    $sql = "update persona set nombre='" . $nombre . "',apellido='" . $apellido . "',sexo='" . $sexo . "',edad='" . $edad . "' where id='" . $idpersona . "'";
                    mysqli_query($conexion, $sql);
                    if ($nombre = 1) {
                        header("location:Index.php");
                    }
                }
                ?>
            </div>
        </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>