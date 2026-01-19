<?php
require_once '../config/head.php';
require_once '../config/auth.php';
?>

<script defer>
    function sair() {
        if (confirm("Deseja realmente sair?")) {
            window.location.href = '../login.php';
            session_destroy();
        }
    }
</script>

<style>
    .ctx {
        position: relative;
    }

    .btn-sair {
        position: absolute;
        right: 15px;
        top: 15px;
    }
</style>

<main>
    <div class="py-3 bg-primary text-center text-white ctx">
        <h2 class="py-3">Área Restrita</h2>
        <button onclick="sair()" class="btn-sair btn btn-danger">X</button>
    </div>
    <div class="container mt-5">
        <h3>Bem-vindo à área restrita!</h3>
        <p>Somente usuários autenticados podem acessar esta página.</p>
    </div>
</main>
</body>

</html>