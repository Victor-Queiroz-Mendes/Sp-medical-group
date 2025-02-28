<?php
include('../includes/db.php');

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM pacientes WHERE id = ?");
$stmt->execute([$id]);
$patient = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $especialidade = $_POST['especialidade'];
    $historico_consultas = $_POST['historico_consultas'];

    $stmt = $pdo->prepare("UPDATE pacientes SET nome = ?, data_nascimento = ?, cpf = ?, endereco = ?, telefone = ?, email = ?, especialidade = ?, historico_consultas = ? WHERE id = ?");
    $stmt->execute([$nome, $data_nascimento, $cpf, $endereco, $telefone, $email, $especialidade, $historico_consultas, $id]);

    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Paciente</title>
</head>
<body>
    <h1>Editar Paciente</h1>
    <form method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="<?php echo $patient['nome']; ?>" required>
        <br>
        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" name="data_nascimento" value="<?php echo $patient['data_nascimento']; ?>" required>
        <br>
        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" value="<?php echo $patient['cpf']; ?>" required>
        <br>
        <label for="endereco">Endereço:</label>
        <textarea name="endereco"><?php echo $patient['endereco']; ?></textarea>
        <br>
        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" value="<?php echo $patient['telefone']; ?>" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $patient['email']; ?>" required>
        <br>
        <label for="especialidade">Especialidade:</label>
        <input type="text" name="especialidade" value="<?php echo $patient['especialidade']; ?>" required>
        <br>
        <label for="historico_consultas">Histórico de Consultas:</label>
        <textarea name="historico_consultas"><?php echo $patient['historico_consultas']; ?></textarea>
        <br>
        <button type="submit">Salvar Alterações</button>
    </form>
</body>
</html>
