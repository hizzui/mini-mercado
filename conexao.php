<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "registrar";

    $conexao = mysqli_connect($servername, $username, $password, $database);

    if (!$conexao) {
        die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
    }
?>
