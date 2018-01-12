<?php

$con = mysqli_connect('localhost','root','lpdip:17','todo');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"todo");

?>