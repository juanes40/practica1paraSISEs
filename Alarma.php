<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiempo temperatura</title>
</head>
<body>
    <h1>Tiempo temperatura</h1>
    <?php
        $servername = "localhost";
        $dbname = "practica1";
        $username = "juanes";
        $password = "";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Verifica si se ha enviado el formulario
            $newTiempo = $_POST["valor_modificado"];
            $sql = "UPDATE sensordata SET tiempo = '$newTiempo' ORDER BY id DESC LIMIT 1";
            if ($conn->query($sql) === TRUE) {
                echo "Valor actualizado correctamente";
            } else {
                echo "Error al actualizar el valor: " . $conn->error;
            }
        }

        $sql = "SELECT id, alarma, tiempo, value1 FROM sensordata ORDER BY id DESC LIMIT 1";
        echo '<a href="/Practica1DHT11/esp-data.php">volver</a>';
        if ($result = $conn->query($sql)) {
            if ($row = $result->fetch_assoc()) {
                echo '<form method="POST">'; // Agregamos un formulario para enviar los datos
                echo '<p>alarma: ' . $row["alarma"] . '</p>';
                echo '<p>tiempo:</p>';
                echo '<input type="text" id="valor_modificado" name="valor_modificado" value="' . $row["tiempo"] . '">';
                echo '<input type="submit" value="Guardar">';
                echo '</form>';
            }
            $result->free();
        }
        $conn->close();
    ?>
</body>
</html>
