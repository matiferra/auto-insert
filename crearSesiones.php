<?php
session_start();
require( __DIR__ . '/functions.php');

$fecha_actual = strtotime(date('Y-m-d H:i:s' ));

$cantidadDe = 60;
$iteracionEn = 'minutes';

$fechas = cargarAlmanaque($cantidadDe, $iteracionEn);

$nueva_tarea = encontrarTarget($fecha_actual, $fechas); 


if(isset($_SESSION['alertas'])){
    if($nueva_tarea != null){
        if(isset($_SESSION['tareaRealizada'])){
            if($fecha_actual <= $nueva_tarea && $_SESSION['tareaRealizada'] != $nueva_tarea){
                ejecutarQuery($nueva_tarea);
            } else {
                $_SESSION['alertas'] = "Proxima tarea programada para el dia " .  date("Y-m-d H:i:s", $nueva_tarea );;
            }
        } else {
            $_SESSION['tareaRealizada'] = $nueva_tarea;
            $_SESSION['alertas'] = "GENERANDO INSTRUCCIONES";
            header('Location: index.php');
        }
    } else {
        $_SESSION['alertas'] = "El tiempo de tareas programadas ha caducado";
    }

} else {
    $_SESSION['alertas'] = 'SISTEMA CARGADO';
}

header("refresh:3;url=index.php");
