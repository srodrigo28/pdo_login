<?php
require_once 'conexao.php';
require_once './config/head.php';
session_start();
?>

<main>
    <div class="py-3 bg-primary text-center text-white">
        <h2 class="py-3">Login</h2>
    </div>
    <form action="validar_login.php" method="POST" class="container mt-5" style="max-width: 400px;">
        <div class="mb-3">
            <label for="usuario" class="form-label">Usuário</label>
            <input type="text" class="form-control" id="usuario" name="usuario" required>
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" required>
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</main>

</body>
</html>

