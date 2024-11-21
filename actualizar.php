<?php 
    include("conexiondos.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM almacen WHERE Codigo='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">

                    
                                <input type="text" class="form-control mb-3" name="Codigo" placeholder="Codigo" value="<?php echo $row['Codigo']  ?>">    
                                <input type="text" class="form-control mb-3" name="Descripcion" placeholder="Descripcion" value="<?php echo $row['Descripcion']  ?>">
                                <input type="text" class="form-control mb-3" name="Marca_modelo" placeholder="Marca_modelo" value="<?php echo $row['Marca_modelo']  ?>">
                                <input type="text" class="form-control mb-3" name="Unidad" placeholder="Unidad" value="<?php echo $row['Unidad']  ?>">
                                <input type="text" class="form-control mb-3" name="Entradas" placeholder="Entradas" value="<?php echo $row['Entradas']  ?>">
                                <input type="text" class="form-control mb-3" name="Salidas" placeholder="Salidas" value="<?php echo $row['Salidas']  ?>">   
                                <input type="text" class="form-control mb-3" name="Existencias" placeholder="Existencias" value="<?php echo $row['Existencias']  ?>">
                                <input type="text" class="form-control mb-3" name="Precio_compra" placeholder="Precio_compra" value="<?php echo $row['Precio_compra']  ?>">
                                <input type="text" class="form-control mb-3" name="Valor_estimado" placeholder="Valor_estimado" value="<?php echo $row['Valor_estimado']  ?>">
                           
                         <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>