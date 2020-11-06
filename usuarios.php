<?php
require_once('conexion.php');
$sql = "select * from usuarios";
$result = $conn -> query($sql);
$registros = array();
while ($fila = $result -> fetch_array()) {
$registros[] = $fila;
}
?>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1>Listado de Usuarios</h1>
	<a href="editar.php">Nuevo</a>
	<table border="1">
		<tr>
			<th>Id</th>
			<th>Usuario</th>
			<th>Correo</th>
			<th>Clave</th>
			<th></th>
			<th></th>
		</tr>
		<?php $conta = 0 ?>
			<?php foreach ($registros as $item):
			?>
		<tr>
			<td><?= ++$conta ?></td>
			<td><?=$item["usuario"]?></td>
			<td><?=$item["correo"]?></td>
			<?php $clave=md5($item["clave"]); ?>
			<td><?=$clave?></td>
			<td><a href="editar.php?id=<?=$item['id']?>">Editar</a></td>
			<td><a href="borrar.php?id=<?=$item['id']?>" onclick="return(confirm('Se eleiminara esta seguro'))">Eliminar</a></td>
		</tr>
	<?php endforeach ?>
	</table>
	<h3><a href="index.php">inicio</a></h3>
</body>
</html>
<form action="">

</form>