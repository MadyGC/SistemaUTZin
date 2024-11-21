<?php
	session_start();
	require 'conexion.php';
	
	if(!isset($_SESSION['id'])){
		header("Location: index.php");
	}
	
	$id = $_SESSION['id'];
	$tipo_usuario = $_SESSION['tipo_usuario'];
	
	if($tipo_usuario == 1){
		$where = "";
		} else if($tipo_usuario == 2){
		$where = "WHERE id=$id";
	}
	
	$sql = "SELECT * FROM papeleria $where";
	$resultado = $mysqli->query($sql);
	
	
?>



<?php 
    include("conexiondos.php");
    $con=conectar();

    $sql="SELECT *  FROM papeleria";
    $query=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<title>Sistema de Inventario </title>
		<link href="css/styles.css" rel="stylesheet" />
		<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
	</head>
	<body class="sb-nav-fixed">
		<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
			<a class="navbar-brand" href="principal.php">Sistema de Inventario</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
			><!-- Navbar Search-->
			<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
				<div class="input-group">
					
				</div>
			</form>
			<!-- Navbar-->
			<ul class="navbar-nav ml-auto ml-md-0">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
						
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="logout.php">Salir</a>
					</div>
				</li>
			</ul>
		</nav>
		<div id="layoutSidenav">
			<div id="layoutSidenav_nav">
				<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
					<div class="sb-sidenav-menu">
						<div class="nav">
							<div class="sb-sidenav-menu-heading">Inventarios</div>
							    <a class="nav-link" href="bebidas.php">
								<div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
								Bebidas/cafeteria</a>


								<a class="nav-link" href="papeleria.php"
							><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Papeleria</a>
							<a class="nav-link" href="bebidas.php"
							><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Oficina</a>
							
							<a class="nav-link" href="bebidas.php"
							><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Laboratorio</a>



							
								
									<div class="sb-sidenav-menu-heading">USUARIOS</div>
										<a class="nav-link" href="tabla.php"
									><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
										Usuarios activos</a
									>
						</div>
					</div>
					<center>
					<div class="sb-sidenav-footer">
					<img src="utzinlogog.png" width="100" height="50" >
					</div>
					</center>
				</nav>
			</div>

			<!-- Inicio-->

			<div id="layoutSidenav_content">
				<main>
					<div class="container-fluid">
						<h1 class="mt-4">Papeleria</h1>
						<ol class="breadcrumb mb-4">
							
						</ol>
						<div class="card mb-4">
							<!-- Linea superior-->
							<table class="table table-bordered" >
							<tr>
								<th>NOMBRE: </th>
								<th> RESPONSABLE:  </th>
							</tr>
							<tr>
								<th>DIRECCIÓN: </th>
								<th> LIBRAMIENTO UNIVERSIDAD NO.106, SAN BARTOLO EL LLANO, C.P.51361, SANTA MARÍA DEL MONTE, ZINACANTEPEC, MEX. </th>
							</tr>
							<tr>
								<th>TELEFONO: </th>
								<th> 722 000 0000 </th>
							</tr>

							</table>


<!-- ventana emergente-->
<a href="#ventana1" class="btn btn-primary btn- lg" data-toggle="modal" > INSERTAR </a>
<div class="container text-center">

	<div class="modal fade" id="ventana1"> 
		<div class="modal-diaolog" >
		<div class="modal-content">
		

		<div class="container mt-5">
		
		
                    
                        
                            <h1>Ingrese datos</h1>
                                <form action="insertardos.php" method="POST">

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
									<a href="papeleria.php" class="btn btn-primary btn- lg" data-bs-dismiss="modal" > Cerrar </a>
                                </form>
                        

                    

            </div>
			
		</div>
		
	</div>
</div>


<!-- fin de ventana emergente-->


						</div>
						<div class="card mb-4">
							<div class="card-header"><i class="fas fa-table mr-1"></i>Papeleria</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
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
											</tr>
										</thead>
										<tfoot>
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
											</tr>
										</tfoot>
										<tbody>
											<?php while($row = $resultado->fetch_assoc()) { ?>
												
												<tr>
													<td><?php echo $row['Codigo']; ?></td>
													<td><?php echo $row['Descripcion']; ?></td>
													<td><?php echo $row['Marca_modelo']; ?></td>
													<td><?php echo $row['Unidad']; ?></td>
                                                    <td><?php echo $row['Entradas']; ?></td>
													<td><?php echo $row['Salidas']; ?></td>
													<td><?php echo $row['Existencias']; ?></td>
													<td><?php echo $row['Precio_compra']; ?></td>
                                                    <td><?php echo $row['Valor_estimado']; ?></td>
													<td><a href="actualizardos.php?id=<?php echo $row['Codigo'] ?>" class="btn btn-info">Editar</a></td>
                                                <td><a href="deletedos.php?id=<?php echo $row['Codigo'] ?>" class="btn btn-danger">Eliminar</a></td>  
												</tr>

												 

												
											<?php } ?>
										</tbody>
									</table>
								</div>
								</div>
								</div>
											</div>

											
					</main>
					<footer class="py-4 bg-light mt-auto">
						<div class="container-fluid">
						<div class="d-flex align-items-center justify-content-between small">
					
					</div>
					</div>
				</footer>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
		<script src="js/scripts.js"></script>
		<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
		<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
		<script src="assets/demo/datatables-demo.js"></script>
	</body>
</html>