<?php
require_once('conexion.php');
$id=0;
$descripcion='';
if(isset($_GET['id'])){
 	$sql="select * from roles where id = ".$_GET['id'];
 	$result = $conn->query($sql);
 	$fila = $result->fetch_array();
 	$id = $fila['id'];
 	$descripcion = $fila['descripcion'];
 }
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1><?=($id>0) ? 'Editar' :'Nueva ' ?> Descripcion</h1>
	<form action="insersion2.php" method="POST">
		<table>
			<input type="hidden" name="id" value="<?=$id?>">
			<tr>
				<td>Descripcion</td>
				<td><input type="text" name="descripcion" value="<?=$descripcion?>" required="" placeholder="Ingresa la descripcion"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Enviar"></td>
			</tr>
		</table>
	</form>
</body>
</html>