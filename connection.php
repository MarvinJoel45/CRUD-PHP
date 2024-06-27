<?php

$servername = "192.168.137.19";
$username = "marvinj";
$password = "123456";
$db_name = "db_marvin";

$conexion = mysqli_connect($servername,$username,$password,$db_name);
$conexion->set_charset("utf8");