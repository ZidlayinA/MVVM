<?php
include ("cnn.php");
$nombre=$_POST["nombre"];
$sms=$_POST["sms"];


$insertar="INSERT INTO coment (nombre,coment) VALUES ('$nombre','$sms')";

$resultado=mysqli_query($conect,$insertar);

if (!$resultado) {
	header("location:index.php");
}else{
	header("location:index.php");
}
mysqli_close($conect);
?>