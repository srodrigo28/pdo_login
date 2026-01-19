<?php
require_once '../config/conexao.php';

$usuario = 'admin';
$senha_hash = password_hash('123123', PASSWORD_ARGON2I);

$sql = "INSERT INTO usuarios (usuario, senha) VALUES (:usuario, :senha)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':usuario', $usuario, PDO::PARAM_STR);
$stmt->bindParam(':senha', $senha_hash, PDO::PARAM_STR);

if($stmt->execute()) {
    echo "Usuário criado com sucesso!";
} else {
    echo "Erro ao criar usuário.";
}