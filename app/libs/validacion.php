<!DOCTYPE html>
<html lang="en">
<?php

if (isset($_POST['enviar'])) {
    $ciudad = $_POST['ciudad'];
    $usoinmueble = $_POST['usoinmueble'];
    $duracioncontrato = $_POST['duracioncontrato'];
    $valorarriendo = $_POST['valorarriendo'];
    $valoriadmin = $_POST['valoriadmin'];


    $totalseguro = $valorarriendo + $valoriadmin * 0.1 *  $duracioncontrato;
} ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>SEGURO DE ARRIENDO DIGITAL</h2>
    TOTAL SEGURO: <?php echo $totalseguro ?><br>
    <p>Incluye</p>
    <li>Pago mensual del arrendamiento, en caso de incumplimiento.</li>
    <li>Pago mensual del arrendamiento, en caso de incumplimiento.</li>
    <li>Asistencia juridica telefonica.</li>
    <li>Estudio financiero de inquilino sin costo.</li>
    <a href="viviendas.php">Continuar</a>

</body>

</html>