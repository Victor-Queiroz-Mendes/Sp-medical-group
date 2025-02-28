<?php
include('../includes/db.php');

$id = $_GET['id'];

$stmt = $pdo->prepare("DELETE FROM pacientes WHERE id = ?");
$stmt->execute([$id]);

header('Location: index.php');
