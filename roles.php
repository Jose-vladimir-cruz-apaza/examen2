<?php
require_once('conexion.php');
$sql = "select * from roles";
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
	<h1>Listado de Roles</h1>
	<a href="editar2.php">Nuevo</a>
	<table border="1">
		<tr>
			<th>Descripcion</th>
			<th></th>
			<th></th>
		</tr>
		<?php $conta = 0 ?>
			<?php foreach ($registros as $item):
			?>
		<tr>
			<td><?= ++$conta ?></td>
			<td><?=$item["descripcion"]?></td>
			<td><a href="editar2.php?id=<?=$item['id']?>">Editar</a></td>
			<td><a href="borrar2.php?id=<?=$item['id']?>" onclick="return(confirm('Se eleiminara esta seguro'))">Eliminar</a></td>
		</tr>
	<?php endforeach ?>
	</table>
	<h3><a href="index.php">inicio</a></h3>
</body>
</html>
<form action="">

</form>