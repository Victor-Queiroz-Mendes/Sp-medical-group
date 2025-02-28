<?php
// Conectar ao banco de dados
include '../includes/db.php';

// Verifica se o formulário foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Exibe os dados enviados para testar
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    die(); // Interrompe a execução para testar a saída dos dados
}
?>
