<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "logintabel";

$conn = mysqli_connect($sname, $unmae, $passward, $db_name);

if (!$conn) {
    echo "Connection failed!";
}
?>