<?php
require_once('conexion.php');
$id=0;
$usuario='';
$correo= '' ;
$clave= '' ;
if(isset($_GET['id'])){
 	$sql="select * from usuarios where id = ".$_GET['id'];
 	$result = $conn->query($sql);
 	$fila = $result->fetch_array();
 	$id = $fila['id'];
 	$usuario = $fila['usuario'];
 	$correo = $fila['correo'];
 	$clave = $fila['clave'];
 }
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1><?=($id>0) ? 'Editar' :'Nuevo ' ?> Usuario</h1>
	<form action="insersion.php" method="POST">
		<table>
			<input type="hidden" name="id" value="<?=$id?>">
			<tr>
				<td>Nombre del Usuario</td>
				<td><input type="text" name="usuario" value="<?=$usuario?>" required="" placeholder="ingrese su usuario"></td>
			</tr>
			<tr>
				<td>Correo</td>
				<td><input type="email" name="correo" value="<?=$correo?>" required="" placeholder="ingrese su correo"></td>
			</tr>
			<tr>
				<td>Clave</td>
				<td><input type="password" name="clave" value="<?=$clave?>" required="" placeholder="ingrese su contraseña"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Enviar"></td>
			</tr>
		</table>
	</form>
</body>
</html>