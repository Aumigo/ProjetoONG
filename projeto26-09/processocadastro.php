<link rel="stylesheet" type="text/css" href="assets/CSS/styleprocessacadastro.css">

<?php
include('conexaocadastro.php');
include('menu.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Receber dados do formulário
$primeironome = $_POST['primeironome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$numero = $_POST['numero'];
$senha = $_POST['senha'];
$confirmasenha = $_POST['confirmasenha'];
$tipo = $_POST['tipo']; // cliente ou admin

// Verificar se a senha e a confirmação de senha coincidem
if ($senha != $confirmasenha) {
    echo "As senhas não coincidem.";
    exit;
}

// Hash da senha
$password = "senha_original";
$hashed_password = password_hash($password, PASSWORD_DEFAULT);



// Salve $hashed_password no banco de dados

// Consulta SQL para inserir o novo usuário no banco de dados
$sql = "INSERT INTO usuarios (primeironome, sobrenome, email, numero, senha, tipo)
        VALUES ('$primeironome', '$sobrenome', '$email', '$numero', '$hashed_password', '$tipo')";

echo "<h2>Dados Inseridos:</h2>";
echo "Primeiro Nome: " . $primeironome . "<br>";
echo "Sobrenome: " . $sobrenome . "<br>";
echo "Email: " . $email . "<br>";
echo "Número: " . $numero . "<br>";
// Lembre-se de NÃO exibir senhas dessa maneira em uma aplicação real, isso é apenas para fins de demonstração
echo "Senha: " . $senha . "<br>";
echo "Tipo: " . $tipo . "<br>";
        

if ($conn->query($sql) === TRUE) {
    // Cadastro bem-sucedido
    header("Location: login.php"); // Redirecionar para a página de login

}

?>
