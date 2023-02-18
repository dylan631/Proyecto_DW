<?php
include 'conexion.php';

// Obtiene los valores del formulario
$idcargo = $_POST['idcargo'];
$nombre = $_POST['nombre'];
$sueldo_min = $_POST['sueldo_minimo'];
$sueldo_max = $_POST['sueldo_maximo'];

// Inserta el nuevo registro en la tabla "cargo"
$sql = "INSERT INTO cargo (id_cargo, nombre, sueldo_minimo, sueldo_maximo) VALUES ('$idcargo', '$nombre', '$sueldo_min', '$sueldo_max')";

if (mysqli_query($conn, $sql)) {
    echo "Nuevo registro agregado";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Cierra la conexión a la base de datos
mysqli_close($conn);

// Redirecciona al usuario a la página principal después de agregar un registro
//sleep(1);
header("Location: http://localhost/phpmyadmin/index.php");
exit();
