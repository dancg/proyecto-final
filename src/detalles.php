<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Album example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="admin/css/album.css" rel="stylesheet">
  </head>

  <body>

    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Follow on Twitter</a></li>
                <li><a href="#" class="text-white">Like on Facebook</a></li>
                <li><a href="#" class="text-white">Email me</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>Detalles</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Productos</h1>
        </div>
      </section>
      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
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
	include_once("config.php");
	
	$codigo = $_GET['codigo'];
	
	$result = mysqli_query($mysqli, "SELECT * FROM producto JOIN fabricante ON (producto.codigo_fabricante=fabricante.codigo) WHERE producto.codigo='$codigo'");
	while($res = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$res[0]."</td>";
		echo "<td>".$res[7]."</td>";
        echo "<td>".$res[6]."</td>";
        echo "<td>".$res[1]."</td>";
		echo "<td>".$res['precio']."</td>";
		echo "<td><img src=\"".$res['imagen']."\" width=\"200\" height=\"200\" /</td>";
        echo "<td>".$res['descripcion']."</td>";
        echo "<td><a href=\"productos.php\">Volver a productos</a></td>";
	}
	mysqli_close($mysqli);
	?>
	</table>
          </div>
        </div>
      </div>
    </main>
    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
      </div>
    </footer>
  </body>
</html>
