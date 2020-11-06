<?php
require_once('conexion.php');
$id = $_POST['id'];
$id_usuario = $_POST['id_usuario'];
$id_rol = $_POST['id_rol'];

if($id == 0){
$sql = "insert into permisos (id_usuario,id_rol) values ('$id_usuario','$id_rol')";
}
else{
$sql = "update permisos set id_usuario = '$id_usuario',id_rol = '$id_rol'";
}
$estado = $conn->query($sql);
if (!$estado) die('Error al tratar de llenar los datos');
header('location:permisos.php');
 ?>