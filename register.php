



<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $primer_apellido = $_POST['primer_apellido'];
    $segundo_apellido = $_POST['segundo_apellido'];
    $email = $_POST['correo'];
    $login = $_POST['Login'];
    $password = $_POST['password'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("El email no tiene un formato válido.");
    } elseif (strlen($password) < 4 || strlen($password) > 8) {
        die("La contraseña debe tener entre 4 y 8 caracteres.");
    } 
        
    

    $servername = "localhost";
    $username = "root";
    $dbpassword = ""; 
    $dbname = "cursosql";

    $conn = new mysqli($servername, $username, $dbpassword, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM formulario WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        die("El correo electrónico ya está registrado.");
    }

    $sql = "INSERT INTO formulario (nombre, primer_apellido, segundo_apellido, email, login, password)
            VALUES ('$nombre', '$primer_apellido', '$segundo_apellido', '$email', '$login', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    echo "<h1>Formulario enviado correctamente</h1>";

    $conn->close();
}

?>
