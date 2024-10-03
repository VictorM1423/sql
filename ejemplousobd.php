<?php 
$con = mysqli_connect("localhost","root","","bd");
$sql = "INSERT INTO persona (ci, nombres, apaterno) VALUES ('', 'seigen', 'amawaka')";
mysqli_query($con,$sql);
?>