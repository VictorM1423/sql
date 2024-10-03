<?php
include "conectar.inc.php";
$sql = "SELECT * FROM persona";
$resultado=mysqli_query($con,$sql);
//include("ejemplousobd.php");
//print_r($resultado);  //lectura simple de filas y columnas
//--- Un dato
//$fila=mysqli_fetch_array($resultado); // Ver fila de toda la matriz
//print_r($fila);
//echo $fila["nombres"];
//--- Todos los datos
// Pero solo una vez por eso va abajo y se comenta
//while($fila=mysqli_fetch_array($resultado))
//{
//	echo $fila["nombres"]."<br>";
//}
?>
<html>
	<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	</head>
	<body style="background-color:#595B58;">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
		<h1>Estudiantes</h1>
		<table border="1px" class="table table-dark table-striped">
			<tr>
				<td>CI</td>
				<td>Nombre</td>
				<td>Ap.Paterno</td>
				<td>Ap.Materno</td>
				<td>Opraciones</td>
			</tr>
			<?php
			while($fila=mysqli_fetch_array($resultado))
			{
			?>
			<tr>
				<td><?php echo $fila["ci"]; ?></td>
				<td><?php echo $fila["nombres"]; ?></td>
				<td><?php echo $fila["apaterno"]; ?></td>
				<td></td>
				<td>
					<a href="modificar.php?ci=<?php echo $fila['ci']; ?>&modifica=1" class="btn btn-secondary">Modificar</a>
					<a href="eliminar.php?ci=<?php echo $fila['ci']; ?>" class="btn btn-danger">Eliminar</a>
				</td>
			</tr>
			<?php
			}
			?>
		</table>
		<a href="modificar.php?modifica=0" class="btn btn-primary">Adicionar</a>
	</body>
</html>