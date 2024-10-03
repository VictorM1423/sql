<?php
$ci=$_GET["ci"];
$con = mysqli_connect("localhost","root","","bd");
$sql = "delete from persona where ci='$ci'";
mysqli_query($con,$sql);
header("Location: index.php");
?>