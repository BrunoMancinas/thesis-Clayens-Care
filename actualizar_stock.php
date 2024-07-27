<?php
include 'conexion.php';

$id = $_POST['id'];
$stock = $_POST['stock'];

$sql = "UPDATE medicamentos SET stock = '$stock' WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error actualizando el stock: " . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizacion de stock de medicamentos</title>
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
        <div class="icon">&#10003;</div> <!-- Checkmark icon -->
        <h1><?php echo "Stock Actualizado" ?></h1>
        <a href="index.html" class="button">Registrar otro medicamento</a>
    </div>
</body>
</html>"

