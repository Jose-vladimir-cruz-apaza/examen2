<?php
require_once('conexion.php');
$sql = "select a1.id,a2.usuario , a3.descripcion  from permisos a1,usuarios a2, roles a3 where  a2.id = id_usuario and a3.id = a1.id_rol;";
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
	<h1>Listado de Permisos</h1>
	<a href="editar3.php">Nuevo</a>
	<table border="1">
		<tr>
			<th>Id</th>
			<th>Usuario</th>
			<th>Descripcion</th>
			<th></th>
			<th></th>
		</tr>
		<?php $conta = 0 ?>
			<?php foreach ($registros as $item):
			?>
		<tr>
			<td><?= ++$conta ?></td>
			<td><?=$item["usuario"]?></td>
			<td><?=$item["descripcion"]?></td>
			<td><a href="editar3.php?id=<?=$item['id']?>">Editar</a></td>
			<td><a href="borrar3.php?id=<?=$item['id']?>" onclick="return(confirm('Se eleiminara esta seguro'))">Eliminar</a></td>
		</tr>
	<?php endforeach ?>
	</table>
	<h3><a href="index.php">inicio</a></h3>
</body>
</html>
<form action="">
</form>