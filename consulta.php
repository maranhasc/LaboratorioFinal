<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cursosql";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}


$sql = "SELECT * FROM formulario";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
    <title>Lista de Registros</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
        }
        
        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            text-align: center;
        }

        li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container  row justify-content-center align-items-center letra pt-3">
        <div class="caja pt-3 w-100">
    <?php

if ($result->num_rows > 0) {
    echo "<h2>Registros:</h2>";
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>Nombre: " . $row["nombre"] . ", Apellido: " . $row["primer_apellido"] . ", Email: " . $row["email"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "No se encontraron registros.";
}


$conn->close();
?>
    </div>
    </div>


</body>
</html>



