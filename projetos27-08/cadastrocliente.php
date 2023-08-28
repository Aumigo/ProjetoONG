<!DOCTYPE html>
<html>
<head>
    <title>Aumigo</title>
</head>
<body>
    <h2>Dados do Cliente</h2>
    <?php
    // Recupere os dados do cliente do banco de dados e exiba na página
    $conexao = mysqli_connect("localhost", "usuario", "senha", "banco_de_dados");

    if (!$conexao) {
        die("Erro na conexão: " . mysqli_connect_error());
    }

    $cliente_id = $_GET["id"]; // Obtém o ID do cliente da URL

    $sql = "SELECT * FROM clientes WHERE id = $cliente_id";
    $resultado = mysqli_query($conexao, $sql);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $cliente = mysqli_fetch_assoc($resultado);
        echo "Nome: " . $cliente["nome"] . "<br>";
        echo "Email: " . $cliente["email"] . "<br>";
        echo "Telefone: " . $cliente["telefone"] . "<br>";
    } else {
        echo "Cliente não encontrado.";
    }

    mysqli_close($conexao);
    ?>
    <br>
    <a href="lista_clientes.php">Voltar para a lista de clientes</a>
</body>
</html>
