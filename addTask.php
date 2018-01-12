<?php

include("connection.php");

$rep = $_POST["task"];

var_dump($rep);

$sql = "INSERT INTO taches(libelle) VALUES ('$rep')";
$result = mysqli_query($con,$sql);

?>
