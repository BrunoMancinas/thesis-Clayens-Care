<?php
include 'conexion.php';

$id = $_POST['id'];
$medico = $_POST['medico'];
$turno = $_POST['turno'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$numero_empleado = $_POST['numero_empleado'];
$nombre_empleado = $_POST['nombre_empleado'];
$rfc = $_POST['rfc'];
$edad = $_POST['edad'];
$area = $_POST['area'];
$puesto = $_POST['puesto'];
$supervisor = $_POST['supervisor'];
$diagnostico = $_POST['diagnostico'];
$observaciones = $_POST['observaciones'];
$medicamento = $_POST['medicamento'];
$numero_medicamento = $_POST['numero_medicamento'];

$sql = "UPDATE pacientes SET medico='$medico', turno='$turno', fecha='$fecha', hora='$hora', numero_empleado='$numero_empleado', nombre_empleado='$nombre_empleado', rfc='$rfc', edad='$edad', area='$area', puesto='$puesto', supervisor='$supervisor', diagnostico='$diagnostico', observaciones='$observaciones', medicamento='$medicamento', numero_medicamento='$numero_medicamento' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Registro actualizado con éxito";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: editar.php");
?>
