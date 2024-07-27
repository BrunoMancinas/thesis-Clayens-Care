<?php
include 'conexion.php';

$sql = "SELECT id, medico, turno, fecha, hora, numero_empleado, nombre_empleado, rfc, edad, area, puesto, supervisor, diagnostico, observaciones, medicamento, numero_medicamento FROM pacientes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Médico</th><th>Turno</th><th>Fecha</th><th>Hora</th><th>Número de Empleado</th><th>Nombre del Empleado</th><th>RFC</th><th>Edad</th><th>Área</th><th>Puesto</th><th>Supervisor</th><th>Diagnóstico</th><th>Observaciones</th><th>Medicamento</th><th>Número de Medicamento</th><th>Acciones</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <form action='actualizar.php' method='POST'>
                    <td><input type='hidden' name='id' value='" . $row["id"] . "'>" . $row["id"] . "</td>
                    <td><input type='text' name='medico' value='" . $row["medico"] . "'></td>
                    <td><input type='text' name='turno' value='" . $row["turno"] . "'></td>
                    <td><input type='date' name='fecha' value='" . $row["fecha"] . "'></td>
                    <td><input type='time' name='hora' value='" . $row["hora"] . "'></td>
                    <td><input type='text' name='numero_empleado' value='" . $row["numero_empleado"] . "'></td>
                    <td><input type='text' name='nombre_empleado' value='" . $row["nombre_empleado"] . "'></td>
                    <td><input type='text' name='rfc' value='" . $row["rfc"] . "'></td>
                    <td><input type='number' name='edad' value='" . $row["edad"] . "'></td>
                    <td><input type='text' name='area' value='" . $row["area"] . "'></td>
                    <td><input type='text' name='puesto' value='" . $row["puesto"] . "'></td>
                    <td><input type='text' name='supervisor' value='" . $row["supervisor"] . "'></td>
                    <td><textarea name='diagnostico'>" . $row["diagnostico"] . "</textarea></td>
                    <td><textarea name='observaciones'>" . $row["observaciones"] . "</textarea></td>
                    <td><input type='text' name='medicamento' value='" . $row["medicamento"] . "'></td>
                    <td><input type='text' name='numero_medicamento' value='" . $row["numero_medicamento"] . "'></td>
                    <td><input type='submit' value='Actualizar'></td>
                </form>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}

$conn->close();
?>
