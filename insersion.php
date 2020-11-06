<?php
require_once('conexion.php');
$id = $_POST['id'];
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$clave = $_POST['clave'];

if($id == 0){
$sql = "insert into usuarios (usuario,correo,clave) values ('$usuario','$correo','$clave')";
}
else{
$sql = "update usuarios set usuario = '$usuario',correo='$correo',clave='$clave' where id=$id" ;
}
$estado = $conn->query($sql);
if (!$estado) die('Error al tratar de llenar los datos');
header('location: usuarios.php');
 ?>