<?php
// including the database connection file
include_once("config.php");

$codigo = $_GET['codigo'];


// fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM producto JOIN fabricante ON (producto.codigo_fabricante=fabricante.codigo) WHERE producto.codigo='$codigo'");
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
		<td>Nombre Fabricante</td>
        <td>Código Fabricante</td>
        <td>Producto</td>
        <td>Precio(€)</td>
		<td>Imagen</td>
		<td>Descripcion</td>

                
	</tr>

	<?php
	while($res = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$res[0]."</td>";
		echo "<td>".$res[7]."</td>";
        echo "<td>".$res[6]."</td>";
        echo "<td>".$res[1]."</td>";
		echo "<td>".$res['precio']."</td>";
		echo "<td><img src=\"".$res['imagen']."\" width=\"100\" height=\"100\" /</td>";
        echo "<td>".$res['descripcion']."</td>";
        echo "<td><a href=\"productos.php\">Volver a productos</a></td>";
	}
	mysqli_close($mysqli);
	?>
	</table>
</body>
</html>