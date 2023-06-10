<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Reservación</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        body {
            background-color: #1746a0;
        }
        
        .form-control {
            background-color: #e3f2fd;
            color: #1746a0;
            border-color: #1746a0;
        }
        
        .form-control:focus {
            background-color: #fff;
            color: #1746a0;
            border-color: #4285f4;
            box-shadow: 0 0 0 0.25rem rgba(66, 133, 244, 0.25);
        }
        
        .btn-primary {
            background-color: #1746a0;
            border-color: #1746a0;
        }
        
        .btn-primary:hover, .btn-primary:focus {
            background-color: #4285f4;
            border-color: #4285f4;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1 style="color: #fff;">Reservación</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <form action="../controller/ConfirmacionController.php" method="POST" style="background-color: #fff; padding: 20px; border-radius: 5px;">
                <input type="hidden"  name="idpersona" id="persona" value="<?php echo $usuario['idpersona']; ?>">
                <input type="hidden"  name="idcasa" id="casa" value="<?php echo $rentar['idcasa']; ?>">
                <input type="hidden"  name="idanfitrion" id="anfitrion" value="<?php echo $rentar['idanfitrion']; ?>">

                <div class="form-group">
                    <label for="email">Correo</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" value="<?php echo $usuario['email']; ?>">
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Nombre" value="<?php echo $usuario['nombre']; ?>">
                </div>
                <div class="form-group">
                    <label for="inputAddress">Dirección</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="" value="<?php echo $usuario['direccion']; ?>">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Dirección de la casa</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Departamento, estudio, piso" value="<?php echo $rentar['colonia'] . ' ' . $rentar['calle'] . ' ' . $rentar['numero']; ?>">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Municipio/Delegación</label>
                        <input type="text" class="form-control" id="inputCity" value="<?php echo $rentar['municipio']; ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Estado</label>
                        <input type="text" class="form-control" id="inputState" value="<?php echo $rentar['estado']; ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputZip">Código Postal</label>
                        <input type="text" class="form-control" id="inputZip" value="<?php echo $rentar['cp']; ?>">
                    </div>

                    <div class="form-group col-md-2">
                        <label for="costo">Costo</label>
                        <input type="text" class="form-control" id="costo" name="costo" value="<?php echo $rentar['costo']; ?>">
                    </div>                  
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="fechaini">Fecha de inicio</label>
                        <input type="date" class="form-control" id="fechainicio" name="fechainicio" required="true">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="fechafin">FechaFin</label>
                        <input type="date" class="form-control" id="fechafin" name="fechafin" required="true">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck" style="color: #1746a0;">
                            Aceptar
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Reservar</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
