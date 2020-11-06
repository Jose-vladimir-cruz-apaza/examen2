<?php
require_once('conexion.php');
$id = $_POST['id'];
$descripcion = $_POST['descripcion'];

if($id == 0){
$sql = "insert into roles (descripcion) values ('$descripcion')";
}
else{
$sql = "update roles set descripcion = '$descripcion'";
}
$estado = $conn->query($sql);
if (!$estado) die('Error al tratar de llenar los datos');
header('location:roles.php');
 ?>