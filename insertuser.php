<?php

include('connection.php');


$id_usuario = null;
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];

$con = connection();

$sql = "INSERT INTO usuario VALUES ('$id_usuario','$nombre','$apellido', '$email','$contraseña')";

$query = mysqli_query($con,$sql);


if($query){
    header("Location: login.php");
};

?>

