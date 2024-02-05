<?php 
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "qvision";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, 3308);
//parametros basicos de conexion a la base de datos, el ultimo parametro es el cambio de puerto, para otros equipos, este debe borrarse//

if (!$conn) {
    die("No hay conexión: " . mysqli_connect_error());
}
// Verificar la conexión
$name = mysqli_real_escape_string($conn, $_POST["name"]);
$lastname = mysqli_real_escape_string($conn, $_POST["lastname"]);
$emai = mysqli_real_escape_string($conn, $_POST["email"]);
$password = mysqli_real_escape_string($conn, $_POST["password"]);

// Parametros de insercion de datos
$data = "INSERT INTO qvision (name, lastname, email, password, ) VALUES ('$name', '$lastname', '$email', '$password')";

if (mysqli_query($conn, $data)) {
    header('Location: index.html');
} else {
    echo "Error al insertar los datos: " . mysqli_error($conn);
}

mysqli_close($conn);
?>