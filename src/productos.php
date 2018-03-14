<?php
// including the database connection file
include_once("config.php");

// fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM producto JOIN fabricante ON (producto.codigo=fabricante.codigo)");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Homepage</title>
</head>

<body>
	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Código Producto</td>
		<td>Nombre Fabriicante</td>
        <td>Código Fabricante</td>
        <td>Producto</td>
        <td>Precio(€)</td>
		<td>Imagen</td>
		<td>Descripcion</td>

                
	</tr>

	<?php
	while($res = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$res['codigo']."</td>";
		echo "<td>".$res['nombre']."</td>";
        echo "<td>".$res['codigo_fabricante']."</td>";
        echo "<td>".$res['producto']."</td>";
		echo "<td>".$res['precio']."</td>";
		echo "<td><img src=\"".$res['imagen']."\" width=\"50\" height=\"50\" /</td>";
		echo "<td>".$res['descripcion']."</td>";
	}
	mysqli_close($msqli);
	?>
	</table>
</body>
</html>