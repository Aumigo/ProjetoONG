<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $primeironome = $_POST["primeiro_nome"];
    $sobrenome=$_POST["sobrenome"];
    $email = $_POST["email"];
    $celular = $_POST["celular"];
    $endereco = $_POST["endereco"];
    $senha = $_POST["senha"];
    $confirsenha=$_POST["confirsenha"];
    $genero=$_POST["genero"];

    // Aqui você pode realizar o processamento do cadastro, como inserir os dados em um banco de dados, enviar emails, etc.

    // Exemplo de exibição dos dados cadastrados:
    echo "Cadastro realizado com sucesso!<br>";
    echo " Primeiro Nome: $primeironome<br>";
    echo " Sobrenome: $sobrenome<br>";
    echo "E-mail: $email<br>";
    echo "Celular: $celular<br>";
    echo "Endereço: $endereco<br>";
    echo "Senha: $senha<br>";
    echo " Confirme Senha: $corfirsenha<br>";
    echo " Genero:: $genero<br>";
}
?>
