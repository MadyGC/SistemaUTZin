<?php 
    include("conexiondos.php");
    $con=conectar();

    $sql="SELECT *  FROM almacen";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA ALUMNO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="varchar" class="form-control mb-3" name="Codigo" placeholder="Codigo">
                                    <input type="varchar" class="form-control mb-3" name="Descripcion" placeholder="Descripcion">
                                    <input type="varchar" class="form-control mb-3" name="Codigo_modelo" placeholder="Marca_modelo">
                                    <input type="varchar" class="form-control mb-3" name="Unidad" placeholder="Unidad">
                                    <input type="int" class="form-control mb-3" name="Entradas" placeholder="Entradas">
                                    <input type="int" class="form-control mb-3" name="Salidas" placeholder="Salidas">
                                    <input type="int" class="form-control mb-3" name="Existencias" placeholder="Existencias">
                                    <input type="decimal" class="form-control mb-3" name="Precio_compra" placeholder="Precio_compra">
                                    <input type="decimal" class="form-control mb-3" name="Valor_estimado" placeholder="Valor_estimado">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                                <th>Codigo</th>
												<th>Descripción</th>
												<th>Marca o Modelo</th>
												<th>Unidad</th>
                                                <th>Entradas</th>
                                                <th>Salidas</th>
                                                <th>Existencias</th>
                                                <th>Precio de Compra</th>
                                                <th>Valor Estimado</th>
                                                <th></th>
                                                <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                    <th><?php echo $row['Codigo']; ?></th>
													<th><?php echo $row['Descripcion']; ?></th>
													<th><?php echo $row['Marca_modelo']; ?></th>
													<th><?php echo $row['Unidad']; ?></th>
                                                    <th><?php echo $row['Entradas']; ?></th>
													<th><?php echo $row['Salidas']; ?></th>
													<th><?php echo $row['Existencias']; ?></th>
													<th><?php echo $row['Precio_compra']; ?></th>
                                                    <th><?php echo $row['Valor_estimado']; ?></th>
                                                <th><a href="actualizar.php?id=<?php echo $row['Codigo'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['Codigo'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>