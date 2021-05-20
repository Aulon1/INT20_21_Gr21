<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "xyz1";

$conn = new mysqli($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}