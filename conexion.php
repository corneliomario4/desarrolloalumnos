<?php
    //modificar con sus credenciales de acceso a la instancia de base de datos
    $server = '';
    $port = '';
    $user = '';
    $db_name = '';
    $pwd = '';

    $conn = mysqli_connect($server, $user, $pwd, $db_name);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>
