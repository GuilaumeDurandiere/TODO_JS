<?php

include("connection.php");

$sql = "SELECT * FROM taches";
$result = mysqli_query($con,$sql);

$array = array();
while ($row = mysqli_fetch_array($result)) {
	array_push($array, array($row["id"], $row["libelle"] , $row["terminer"]));
}
echo json_encode($array);



?>
