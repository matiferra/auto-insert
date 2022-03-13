
<?php

require(__DIR__ . '/conection/DB.php');
require(__DIR__ . '/modelos/Modelo.php');
require(__DIR__ . '/modelos/Archivo.php');



function comprobarArchivosNuevos($numeroCargasMasiva)
{
    $listoArchivos = array();

    for ($i = 0; $i < $numeroCargasMasiva; $i++) {

        $file = "./archivos/cargaMasiva" . $i . ".txt";

        if (file_exists($file) == true) {
            if (!archivoExiste($file)) {
                array_push($listoArchivos, $file);
            }
        }
    }
    return $listoArchivos;
}

function archivoExiste($nombreArchivo){

    $archivosExistentes = Archivo::getAll();

    foreach ($archivosExistentes as $archivo) {
        if($archivo->NOMBRE == $nombreArchivo){
            return true;
        }
    }

    return false;
}




/**************************
  otros
 ***************************/

 
date_default_timezone_set("America/Argentina/Buenos_Aires");

function cargarAlmanaque($cantidadDe, $iteracionEn){
    $semanal = array();

    for ($i=1; $i <= $cantidadDe; $i++) { 
        $desde= "2022-03-13 20:00:00"; 
        $sumado = date("Y-m-d H:i:s ",strtotime("$desde + $i $iteracionEn")); 
        $sumado = strtotime($sumado);
        array_push($semanal, $sumado);
    }

    return $semanal;
}


function ejecutarQuery($nueva_tarea, $numeroCargasMasiva = 100){

    $archivos = new Archivo;

    $listado = comprobarArchivosNuevos($numeroCargasMasiva);


    if($listado != null){
        foreach ($listado as $archivo) {
            $archivos->setAtributo('NOMBRE', $archivo);
            $archivos->insert();
        }
    }

    $_SESSION['alertas'] = "La tarea fue ejecutada con exito";
    $_SESSION['tareaRealizada'] = $nueva_tarea;
    

}

function encontrarTarget($fecha_actual, $fechas){

    $nuevoTarget = 0;
    $encontrado = false;
    $i = 0;

    while ($i < count($fechas) - 1 && $encontrado == false) {
        if ($fecha_actual >= $fechas[$i] && $fecha_actual <= $fechas[$i + 1]) {
            $nuevoTarget = $fechas[$i+1];
            $encontrado = true;
        } 
            $i++;
    }

    return $nuevoTarget;
}

?>