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

$sql="UPDATE papeleria SET  Codigo='$Codigo',Descripcion='$Descripcion',Marca_modelo='$Marca_modelo',Unidad='$Unidad',Entradas='$Entradas',
                          Salidas='$Salidas', Existencias='$Existencias', Precio_compra='$Precio_compra', Valor_estimado='$Valor_estimado'
WHERE Codigo='$Codigo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: papeleria.php");
    }
?>