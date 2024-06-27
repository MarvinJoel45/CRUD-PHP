<?php

$servername = "192.168.232.3";
$username = "marvin";
$password = "123456";
$db_name = "db_marvin";

$conexion = mysqli_connect($servername,$username,$password,$db_name);
$conexion->set_charset("utf8");