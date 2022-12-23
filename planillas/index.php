<?php
    require_once("clsColaboradores.php");
    $area = $_GET['txtArea'];
    $aniosServicio = $_GET['txtAniosServicio'];
    $colaborador=new Colaboradores($area,$aniosServicio);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLANILLA DE COLABORADORES</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="css/styles.css">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    <h1>PLANILLA DE COLABORADORES</h1>
    <form action="index.php" method="GET" class="border p-3 form">
        <div class="mb-3">
            <label for="txtArea" class="form-label">AREA</label>
            <input type="text" class="form-control" id="txtArea" name="txtArea">
        </div>
        <div class="mb-3">
            <label for="txtAniosServicio" class="form-label">AÑOS DE SERVICIO</label>
            <input type="text" class="form-control" id="txtAniosServicio" name="txtAniosServicio">
        </div>
        <button type="submit" class="btn btn-primary">Calcular</button>
    </form>

    <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <h2>LA REMUNERACIÓN DE EMPLEADO ES: <?php echo $colaborador->calcularRemuneracionPorArea($area)?></h2>
    </div>

    <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <h2>LA BONIFICACIÓN POR AÑOS DE SERVICIO DEL EMPLEADO ES: <?php echo $colaborador->calcularBonificacionPorAniosDeServicio($aniosServicio)?></h2>
    </div>

    <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <h2>EL SUELDO A PAGAR AL EMPLEADO ES: <?php echo $colaborador->sueldoApagar()?></h2>
    </div>
</body>
</html>