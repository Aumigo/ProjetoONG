<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Aumigo - Painel de Administração</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Aumigo Admin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#adminNavbar"
            aria-controls="adminNavbar" aria-expanded="false" aria-label="Alternar navegação">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="adminNavbar">
        <ul class="navbar-nav ml-auto">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            
            $conexao = mysqli_connect($servername, $username, $password, "sistemas_adms");
            
            if (!$conexao) {
                die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
            }

            $query = "SELECT * FROM usuarios"; // Correção na sintaxe da consulta SQL
            $result = mysqli_query($conexao, $query);

            if (!$result) {
                die("Erro na consulta: " . mysqli_error($conexao));
            }

            while ($usuario = mysqli_fetch_assoc($result)) {
                echo '<li class="nav-item"><a class="nav-link" href="' . $usuario['senha'] . '">' . $usuario['nome'] . '</a></li>';
            }

            mysqli_close($conexao);
            ?>
        </ul>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
