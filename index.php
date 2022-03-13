<?php
session_start();

header("refresh:3;url=crearSesiones.php");

if(isset($_SESSION['alertas'])){
    echo $_SESSION['alertas'];
} else {
    echo "CARGANDO SISTEMA";
}
