
<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexão com o banco de dados (substitua pelas suas próprias credenciais)
    $servername = "localhost";
    $username = "seu_usuario";
    $password = "sua_senha";
    $dbname = "seu_banco_de_dados";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica erros de conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Obtém o e-mail submetido no formulário
    $email = $_POST["email"];

    // Verifica se o e-mail existe no banco de dados
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Gera uma nova senha aleatória
        $novaSenha = substr(md5(time()), 0, 8);

        // Atualiza a senha do usuário no banco de dados
        $sql = "UPDATE usuarios SET senha = '$novaSenha' WHERE email = '$email'";
        if ($conn->query($sql) === TRUE) {
            // Envia a nova senha por e-mail (neste exemplo, você precisará de uma biblioteca de envio de e-mails)
            $mensagem = "Sua nova senha é: $novaSenha";
            // Envie o e-mail usando a biblioteca de envio de e-mails de sua escolha

            echo "Uma nova senha foi enviada para o seu e-mail.";
        } else {
            echo "Erro ao atualizar a senha: " . $conn->error;
        }
    } else {
        echo "E-mail não encontrado.";
    }

    $conn->close();
}
?>
