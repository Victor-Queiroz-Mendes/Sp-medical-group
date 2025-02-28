<?php
include '../includes/db.php';

// Consulta no banco de dados
$sql = "SELECT * FROM pacientes";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pacientes</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<h1>Lista de Pacientes</h1>

<!-- Tabela para exibir pacientes -->
<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Data de Nascimento</th>
            <th>CPF</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Especialidade</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["nome"] . "</td>
                    <td>" . $row["data_nascimento"] . "</td>
                    <td>" . $row["cpf"] . "</td>
                    <td>" . $row["endereco"] . "</td>
                    <td>" . $row["telefone"] . "</td>
                    <td>" . $row["email"] . "</td>
                    <td>" . $row["especialidade_atendida"] . "</td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='7'>Nenhum paciente cadastrado.</td></tr>";
        }
        ?>
    </tbody>
</table>

<!-- Link para adicionar novo paciente -->
<a href="add.php">Adicionar Novo Paciente</a>

<script src="../js/script.js"></script>
</body>
</html>

<?php
$conn->close();
?>
