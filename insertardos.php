<?php
include("conexiondos.php");
$con=conectar();

$Codigo=$_POST['Codigo'];
$Descripcion=$_POST['Descripcion'];
$Marca_modelo=$_POST['Marca_modelo'];
$Unidad=$_POST['Unidad'];
$Entradas=$_POST['Entradas'];
$Salidas=$_POST['Salidas'];
$Existencias=$_POST['Existencias'];
$Precio_compra=$_POST['Precio_compra'];
$Valor_estimado=$_POST['Valor_estimado'];


$sql="INSERT INTO papeleria (Codigo, Descripcion, Marca_modelo, Unidad, Entradas, Salidas, Existencias, Precio_compra, Valor_estimado)
VALUES('$Codigo','$Descripcion','$Marca_modelo','$Unidad','$Entradas','$Salidas',
'$Existencias','$Precio_compra','$Valor_estimado')";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: papeleria.php");
    
}else {
}
?>