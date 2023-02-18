<!DOCTYPE html>
<html>

<head>
	<title>Tabla Cargo</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Agrega los enlaces para los archivos CSS de Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!--Centrar H1 sin div-->
				<h1 style="text-align:center">Registro de empleado</h1>
				<!-- Formulario para agregar un nuevo registro -->
				<form method="post" action="agregar_cargo.php">
					<div class="form-group">
						<label for="idempleado">ID Empleado:</label>
						<input type="text" class="form-control" id="id_empleado" name="id_empleado" required>
					</div>
					<div class="form-group">
						<label for="nombre">Nombres:</label>
						<input type="text" class="form-control" id="nombre" name="nombre" required>
					</div>
					<div class="form-group">
						<label for="nombre">Nombres:</label>
						<input type="text" class="form-control" id="nombre" name="nombre" required>
					</div>
					<div class="form-group">
						<label for="sueldo_min">Sueldo Mínimo:</label>
						<input type="number" class="form-control" id="sueldo_minimo" name="sueldo_minimo" required>
					</div>
					<div class="form-group">
						<label for="sueldo_max">Sueldo Máximo:</label>
						<input type="number" class="form-control" id="sueldo_maximo" name="sueldo_maximo" required>
					</div>
					<button type="submit" class="btn btn-primary">Agregar</button>
				</form>

				<hr>

				<!-- tabla para mostrar los registros de la tabla "cargo" -->
				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID Cargo</th>
							<th>Nombre</th>
							<th>Sueldo Mínimo</th>
							<th>Sueldo Máximo</th>
						</tr>
					</thead>
					<tbody>
						<?php
						include 'conexion.php';

						// Select de los registros de la tabla "cargo"
						$sql = "SELECT * FROM cargo";
						$resultado = mysqli_query($conn, $sql); //conn viene de conexion.php

						// Concatena y muestra los registros en la tabla html
						if (mysqli_num_rows($resultado) > 0) {
							while ($fila = mysqli_fetch_assoc($resultado)) {
								echo "<tr>";
								echo "<td>" . $fila["id_cargo"] . "</td>";
								echo "<td>" . $fila["nombre"] . "</td>";
								echo "<td>" . $fila["sueldo_minimo"] . "</td>";
								echo "<td>" . $fila["sueldo_maximo"] . "</td>";
								echo "</tr>";
							}
						} else {
							echo "0 resultados";
						}
						// Cierra la conexión a la base de datos
						mysqli_close($conn);
						?>
					</tbody>
				</table>

			</div>
		</div>
	</div>

	<!-- Agrega los scripts de Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>