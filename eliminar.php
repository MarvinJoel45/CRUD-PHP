<?php 
    include 'connection.php';
    $id = $_GET['id'];
    $sql = "delete from persona where id='".$id."'";
    $result = mysqli_query($conexion,$sql);
    header('location:Index.php');
?>