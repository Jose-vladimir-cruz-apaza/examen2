<?php
require_once('conexion.php');
$id = $_GET	['id'];
$sql = "delete from permisos where id = $id";
$estado = $conn->query($sql);
if(!$estado) die("Error al eliminar");
header("location: permisos.php");
 ?>