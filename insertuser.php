<?php

include('conexion.php');

$con = connection();

$id = null;
$nombres = $_POST['nombres'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

$sql = "INSERT INTO usuario VALUES ('$id','$nombres', '$correo','$contraseña')";
$query =mysqli_query($con, $sql);

if($query ){
    header("Location: index.html");
};

?>

