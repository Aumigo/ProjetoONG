<?php
session_start();
include('conexaocadastro.php'); // Faça a conexão com o banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Consulta SQL para verificar as credenciais
    $sql = "SELECT id, email, senha FROM usuarios WHERE email = ?";

    // Preparar a consulta
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($senha, $row['senha'])) {
            $_SESSION['user_id'] = $row['id'];
            header("Location: formadm.php"); // Redirecionar para a área restrita
        } else {
            echo "Senha incorreta. Tente novamente.";
        }
    } else {
        echo "Usuário não encontrado. Tente novamente.";
    }
}
?>
