<?php

include 'ejercicio1.html';

$asistencia = null;
$calificacion = null;

define("CLASES",30);

//$validacion = isset($asistencia);


if(isset($_POST['calificacion']) && isset($_POST['asistencia'])){

    $asistencia = $_POST['asistencia'];
    $calificacion  =  $_POST['calificacion'];



    if($calificacion<=5 or $asistencia < (CLASES*0.8)){

        echo"No Aprobado";
    }
    else{
        echo"Aprobado";
    }

}




?>