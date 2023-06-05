<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registrar";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Inserção de dados na tabela 'cadastro'
$nome = "João";
$sobrenome = "Silva";
$usuario = "joaosilva";
$email = "joao@example.com";
$senha = "123456";

$sql_insert = "INSERT INTO cadastro (nome, sobrenome, usuario, email, senha) VALUES ('$nome', '$sobrenome', '$usuario', '$email', '$senha')";
if ($conn->query($sql_insert) === TRUE) {
    echo "Dados inseridos na tabela 'cadastro' com sucesso!";
} else {
    echo "Erro ao inserir dados: " . $conn->error;
}

// Fechamento da conexão com o banco de dados
$conn->close();
?>
