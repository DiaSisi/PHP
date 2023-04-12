<!DOCTYPE html> 
<?php
	include '../BasedeDatos/conexion.php';
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.min.css">
    <script src="../Bootstrap/js/bootstrap.min.js"></script>
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="../style.css">

	<title>ProChile</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<img src="https://cdn-icons-png.flaticon.com/512/323/323284.png" width="35" height="35">
			<span class="text">ProChile</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="../index.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">ProChile Dashboard</span>
				</a>
			</li>
			<li>
				<a href="../contactos.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Contactos</span>
				</a>
			</li>
			<li>
				<a href="empresas.php">
					<i class='bx bxs-buildings'></i>
					<span class="text">Empresas</span>
				</a>
			</li>
			<li>
				<a href="productos.php">
					<i class='bx bxs-shopping-bag-alt'></i>
					<span class="text">Productos</span>
				</a>
			</li>
			<li>
				<a href="visitascomerciales.php">
					<i class='bx bxs-message-dots'></i>
					<span class="text">Visitas Comerciales</span>
				</a>
			</li>
			<li>
				<a href="cotizaciones.php">
					<i class='bx bxs-dollar-circle'></i>
					<span class="text">Cotizaciones</span>
				</a>
			</li>
			<li>
				<a href="eventos.php">
					<i class='bx bxs-calendar-event'></i>
					<span class="text">Eventos</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Ajustes</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categorias</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/landscape.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
            <div style="display: grid; place-items: center;">
                <h4>Creación de Empresa</h4>
            </div>
            <br>
            <form method="POST" action="../BasedeDatos/crearEmpresas.php">
                <div class="row">
                    <div class="col-6 col-sm-3">
                        <label>Nombre</label>
                        <input type="text" class="form-control" placeholder="Nombre" name="Nombre">
                    </div>
                    <div class="col-6 col-sm-3">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="Email" name="Email">
                    </div>
                    <div class="col-6 col-sm-3">
                        <label>Teléfono</label>
                        <input type="text" class="form-control" placeholder="Teléfono" name="Teléfono">
                    </div>
                    <div class="col-6 col-sm-3">
                        <label>Dirección</label>
                        <input type="text" class="form-control" placeholder="Dirección" name="Dirección">
                    </div>
                    <div class="col-6 col-sm-3">
                        <label>Notas</label>
                        <input type="text" class="form-control" placeholder="Notas" name="Notas">
                    </div>
                </div>
				<br>
                <div style="display: grid; place-items: center;">
                    <button type="submit" class="btn btn-outline-success">Guardar</button>
                </div>
            </form>
		</main>
		
        <a href="../empresas.php" type="button" class="btn btn-outline-secondary">Volver</button>
    
        
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>