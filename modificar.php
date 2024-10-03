<?php
include "conectar.inc.php";
$modifica=$_GET["modifica"];
if ($modifica==1)
	$ci=$_GET["ci"];
else 
	$ci="";

$sql = "SELECT * FROM persona WHERE ci='".$ci."'";
$resultado=mysqli_query($con,$sql);
$nombres="";
$apaterno="";
if ($fila=mysqli_fetch_array($resultado))
{
	$nombres=$fila["nombres"];
	$apaterno=$fila["apaterno"];
}
?>
<html>
	<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	</head>
	<body style="background-color:#E3E6E1;">
		<h1>Datos de la persona</h1>
		<form method="GET" action="guardarmodificar.php">
			<input class="form-control" type="hidden" name="modifica" value="<?php echo $modifica;?>">
			<label class="col-form-label">CI</label>
			<input class="form-control" type="text" name="ci" value="<?php echo $ci;?>" <?php if ($modifica==1) echo "readonly";?> >
			<label class="col-form-label">Nombres</label>
			<input class="form-control" type="text" name="nombres" value="<?php echo $nombres;?>">
			<label class="col-form-label">Apellido Paterno</label>
			<input class="form-control" type="text" name="apaterno" value="<?php echo $apaterno;?>">
			<input type="submit" class="btn btn-primary" name="Guardar" value="Guardar">
			<input type="submit" class="btn btn-danger" name="Cancelar" value="Cancelar">
		</form>

	</body>
</html>