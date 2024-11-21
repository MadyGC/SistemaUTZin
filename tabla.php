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
	
	$sql = "SELECT * FROM usuarios $where";
	$resultado = $mysqli->query($sql);
	
	
?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<title>Tables - SB Admin</title>
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
                        <a class="dropdown-item" href="#">Configuración</a>
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
					<img src="utzinlogo.png" width="100" height="50" >
					</div>
					</center>
				</nav>
			</div>
			<div id="layoutSidenav_content">
				<main>
					<div class="container-fluid">
						<h1 class="mt-4">Usuarios Activos</h1>
						
						<div class="card mb-4">
							<!-- Linea superior-->
						</div>
						<div class="card mb-4">
							<div class="card-header"><i class="fas fa-table mr-1"></i>Usuarios</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
											<tr>
												<th>Usuario</th>
												<th>Password</th>
												<th>Nombre</th>
												<th>Tipo Usuario</th>
											</tr>
										</thead>
										<tfoot>
											<tr>
												<th>Usuario</th>
												<th>Password</th>
												<th>Nombre</th>
												<th>Tipo Usuario</th>
											</tr>
										</tfoot>
										<tbody>
											<?php while($row = $resultado->fetch_assoc()) { ?>
												
												<tr>
													<td><?php echo $row['usuario']; ?></td>
													<td><?php echo $row['password']; ?></td>
													<td><?php echo $row['nombre']; ?></td>
													<td><?php echo $row['tipo_usuario']; ?></td>
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
