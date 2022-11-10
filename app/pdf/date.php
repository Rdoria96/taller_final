<?php
// Introducimos HTML de prueba
$ciudad = $_GET['ciudad'];
$duracioncontrato = $_GET['duracioncontrato'];
$totalseguro = $_GET['totalseguro'];
$correo = $_GET['mail'];
$fecha = date('Y-m-d');
$fecha_inicio = date_create($fecha);
$f = explode('-', $fecha);
$f[1] = $f[1] + $duracioncontrato;
if ($f[1] < 12) {
    echo 'Todo Nice';
} else {
    $f[0] = $f[0] + 1;
    $f[1] = 12;
    $f[1] = $duracioncontrato - 1;
}

$html = "
<body>
    <div class='page-wrapper bg-gra-03 p-t-45 p-b-50'>
        <div class='wrapper wrapper--w790'>
            <div class='card card-5'>
                <div class='card-heading'>
                    <h2 class='title'>FACTURA SEGURO DE VIVIENDA</h2>
                </div>
                <div class='card-body'>

                    <div class='form-row m-b-55'>
                        <div class='name'>Total seguro: " . $totalseguro . "</div>
                        <div class='value'>
                            <div class='col-9'>
                                <div class='input-group-desc'>
                                    <p class='input--style-5'>
                                        </p>

	<div class=' form-row m-b-55'>
    <div class='name'>DATOS DEL PROPIETARIO</div>
    <div class='value'>
        <div class='row row-space'>
            <div class='col-2'>
                <div class='input-group-desc'>
                    <p class='input--style-5'></p>
                </div>            </div>
            
        </div>
    </div>
	</div>
	<div class='form-row'>
    <div class='name'>Ciudad:" . $ciudad . "</p>
	</div>
	</div>
	</div>
	
	<div class='form-row'>
    <div class='name'>Correo: " . $correo . "</p>
        </div>
    </div>
	</div>
	<div class='form-row'>
    <div class='name'></p>
        </div>
    </div>
	</div>
	<div class='form-row'>
    <div class='name'>Duracion del contrato:" . $duracioncontrato . "</p>
            </div>
        </div>
    </div>
	</div>
	<div class='form-row'>
    <div class='name'>Fecha de vencimiento del contrato: " . $f[2] . ' - ' . $f[1] . ' - ' . $f[0] . "</p>
            </div>
        </div>
    </div>
	</div>

";
echo $html;