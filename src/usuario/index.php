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
<a href="add.html">Add New Data</a><br/><br/>
	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Código</td>
		<td>Nombre</td>
        <td>Código Fabricante</td>
        <td>Producto</td>
        <td>Precio</td>
		<td>Imagen</td>
		<td>descripcion</td>

                
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
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
	}
	mysqli_close($msqli);
	?>
	</table>
</body>
</html>