<?php
    session_start();
    require_once 'config/conexao.php';

    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';

    $sql = "SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':usuario', $usuario, PDO::PARAM_STR);
    $stmt->execute();

    if($stmt->rowCount() > 0) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if(password_verify($senha, $user['senha'])) {
            $_SESSION['usuario_id'] = $user['id'];
            $_SESSION['usuario_nome'] = $user['usuario'];
            header('Location: restrita.php');
            exit();
        
        } else {
            $_SESSION['erro_login'] = 'Senha incorreta!';
            header('Location: login.php');
            exit();
        }
    } else {
        $_SESSION['erro_login'] = 'Usuário não encontrado.';
        header('Location: login.php');
        exit();
    }   
?>