<?php
include 'conexion.php';

$numero_empleado = $_POST['numero_empleado'];
$fecha = $_POST['fecha'];
$tipo_examen = $_POST['tipo_examen'];
$resultado = $_POST['resultado'];


$sql = $conn->prepare("INSERT INTO examenes (numero_empleado, fecha, tipo_examen, resultado) VALUES (?, ?, ?, ?)");
$sql->bind_param("isss", $numero_empleado, $fecha, $tipo_examen, $resultado);

$success = false;
if ($sql->execute()) {
    $success = true;
} else {
    $error = $conn->error;
}

$sql->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Examen</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .message-container {
            text-align: center;
            padding: 20px;
            border: 1px solid #ddd;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .message-container h1 {
            color: black;
            font-size: 24px;
        }
        .message-container p {
            font-size: 16px;
            color: #333;
        }
        .message-container .icon {
            font-size: 50px;
            color: orange;
        }
        .message-container .button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: orange;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }
        .message-container .button:hover {
            background-color: black;
        }
    </style>
</head>
<body>
    <div class="message-container">
        <?php if ($success): ?>
            <div class="icon">&#10003;</div> <!-- Checkmark icon -->
            <h1>Nuevo examen registrado con éxito</h1>
        <?php else: ?>
            <div class="icon">&#10060;</div> <!-- Crossmark icon -->
            <h1>Error al registrar el examen</h1>
            <p><?php echo htmlspecialchars($error); ?></p>
        <?php endif; ?>
        <a href="index.html" class="button">Registrar otro examen</a>
    </div>
</body>
</html>

