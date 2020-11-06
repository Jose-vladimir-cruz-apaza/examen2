<?php
require_once('conexion.php');
$id=0;
$id_usuario='';
$id_rol='';
if(isset($_GET['id'])){
 	$sql="select * from permisos where id = ".$_GET['id'];
 	$result = $conn->query($sql);
 	$fila = $result->fetch_array();
 	$id = $fila['id'];
 	$id_usuario = $fila['id_usuario'];
 	$id_rol = $fila['id_rol'];
 }
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1><?=($id>0) ? 'Editar' :'Nuevo ' ?> Permiso</h1>
	<form action="insersion3.php" method="POST">
		<table>
			<input type="hidden" name="id" value="<?=$id?>">
			<tr>
				<td>Id del usuario</td>
				<td><input type="text" name="id_usuario" value="<?=$id_usuario?>" required="" placeholder="ingrese el id del usuario"></td>
			</tr>
			<tr>
				<td>ID de la desripcion</td>
				<td><input type="text" name="id_rol" value="<?=$id_rol?>" required="" placeholder="ingrese ID del rol"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Enviar"></td>
			</tr>
		</table>
	</form>
</body>
</html>