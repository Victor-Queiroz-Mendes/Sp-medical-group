<?php
$servername = "localhost";
$username = "root"; // Usuário do MySQL
$password = ""; // Senha do MySQL (deixe em branco se não houver senha)
$dbname = "sp_medical_group"; // Nome do banco de dados

// Criando a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando se houve erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
