<?php
include 'conexion.php';

$numero_seguro_social = $_POST['numero_seguro_social'];
$nombre = $_POST['nombre'];
$dni = $_POST['dni'];
$celular = $_POST['celular'];
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];
$supervisor = $_POST['supervisor'];
$planta = $_POST['planta'];

$sql = "INSERT INTO pacientes (numero_seguro_social, nombre, dni, celular, edad, sexo, supervisor, planta) 
        VALUES ('$numero_seguro_social', '$nombre', '$dni', '$celular', '$edad', '$sexo', '$supervisor', '$planta')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo paciente registrado con éxito";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
