<?php
if (isset($_GET["Cancelar"]))
	header("Location: index.php");

include "conectar.inc.php";

$modifica=$_GET["modifica"];
$ci=$_GET["ci"];
$nombres=$_GET["nombres"];
$apaterno=$_GET["apaterno"];

if ($modifica==1)
	$sql = "update persona set nombres='$nombres', apaterno='$apaterno' where ci=$ci";
else
	$sql = "INSERT INTO persona (ci, nombres, apaterno) VALUES ('$ci', '$nombres', '$apaterno');";

mysqli_query($con, $sql);
header("Location: index.php");
?>