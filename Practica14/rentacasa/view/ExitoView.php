<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Reservación creada</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        body {
            background-color: #007bff;
            color: #ffffff;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1 class="mt-5">Reservación creada</h1> 
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <p class="lead mb-0">FOLIO: <?php echo $nuevareservacion['idreservacion']; ?></p>
                </div>
                <div class="mb-3">
                    <p class="lead mb-0">ANFITRIÓN: <?php echo $nuevareservacion['f_nombre']; ?></p>
                </div>
                <div class="mb-3">
                    <p class="lead mb-0">DIRECCIÓN DE LA CASA: <?php echo $nuevareservacion['c_direccion']; ?></p>
                </div>
                <div class="mb-3">
                    <p class="lead mb-0">HUESPED: <?php echo $nuevareservacion['p_nombre']; ?></p>
                </div>
                <div class="mb-3">
                    <p class="lead mb-0">FECHA DE ENTRADA: <?php echo $nuevareservacion['ingreso']; ?></p>
                </div>
                <div class="mb-3">
                    <p class="lead mb-0">FECHA DE SALIDA: <?php echo $nuevareservacion['salida']; ?></p>
                </div>
                <div class="mb-3">
                    <p class="lead mb-0">COSTO: <?php echo $nuevareservacion['costo']; ?></p>
                </div>
            </div>
        </div>

        <a href="../index.php" class="btn btn-primary mt-4">Regresar al inicio</a>
    </div>

    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>
