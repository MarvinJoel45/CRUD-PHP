<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Servidor web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container col-sm-6 mt-3">
        <div class="card">
            <div class="card-header text-center">
                <h3>Registre una persona</h2>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="mb-2">
                        <label for="" class="form-label">Nombre</label>
                        <input type="text" name="txtnombre" class="form-control" placeholder="Registre el nombre" required>
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Apellido</label>
                        <input type="text" name="txtapellido" class="form-control" placeholder="Registre el apellido" required>
                    </div>
                    <div class="mb-2">
                        <label for="sexo" class="form-label">Sexo</label>
                        <div class="form-check">
                            <input type="radio" name="sexo" value="M" class="form-check-input">
                            <label for="masculino" class="form-check-label">Masculino</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="sexo" value="F" class="form-check-input">
                            <label for="femenino" class="form-check-label">Femenino</label>
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Edad</label>
                        <input type="number" name="edad" min="1" max="100" class="form-control" required>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a href="index.php" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php

    include 'connection.php';

    $nombre = $_GET['txtnombre'];
    $apellido = $_GET['txtapellido'];
    $sexo = $_GET['sexo'];
    $edad = $_GET['edad'];

    if ($nombre != null && $apellido != null && $sexo != null && $edad != null) {
        $sql = "insert into persona(nombre,apellido,sexo,edad) values('" . $nombre . "','" . $apellido . "','" . $sexo . "','" . $edad . "')";
        mysqli_query($conexion, $sql);
        if ($nombre = 1) {
            header("location:index.php");
        }
    } ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>