<?php

include("conexiondos.php");
$con=conectar();

$Codigo=$_GET['id'];

$sql="DELETE FROM almacen WHERE Codigo='$Codigo'";
$query=mysqli_query($con,$sql);


    if($query){
        Header("Location: bebidas.php");
    }
?>