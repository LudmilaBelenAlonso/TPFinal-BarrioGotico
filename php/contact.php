<?php

$actividad = $_POST['actividad'];
$fecha = $_POST['fecha'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$intereses = $_POST['intereses'];

$mensaje = "<h1>".$nombre."</h1>";
$mensaje .= "<p>La actividad seleccionada es: ".$actividad."</p>";
$mensaje .= "<p>El día elegido es: ".$fecha."</p>";
$mensaje .= "<p>Los intereses son: ".$intereses."</p>";
$mensaje .= "<br/>";

    
    
$para = 'ludmi.a.284@gmail.com';
$asunto = 'Reserva';

$headers .= "Mime-version:1.0\r\n";
$headers .= "Content-type: text/html; charset: utf-8\r\n";
$headers .= "From: ".$email."\r\n";
$headers .= "To: ".$para.";


mail ($para, $asunto,$mensaje, $headers);
header("Location: ../secciones/gracias.html");

?>