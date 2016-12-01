<?php
include 'conexion.php';
//Envio de consultas

$name = $_POST['Name'];
$email = $_POST['Email'];
$subject = $_POST['Subject'];
$message = $_POST['Message'];

conectarDB('localhost:3306','root','admin','hotelDB');

$sql = "INSERT INTO emails (email, name, subject,body,date)
		VALUES ('$email', '$name', '$subject','$message',Now())";

insertarDatos($sql);

echo 'DATOS INSERTADOS CORRECTAMENTE';
?>