<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
  <title>Aumigo</title>
</head>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aumigo</title>
    <style>
     img{
      width: 300px;
       height: 200px;
     }

     
    </style>
</head>
<body>

<?php
include('conexao2.php');
$diretorio = "img/";

// Fazer uma consulta SQL para obter todos os produtos
$sql = "SELECT id, nome, sexo, idade,porte, descricao,preco, nome_arq, ext_arq FROM cachorro";
$stmt = $conn->prepare($sql);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $id = $row['id'];
    $nome = $row['nome'];
    $sexo = $row['sexo'];
    $idade = $row['idade'];
    $porte = $row['porte'];
    $descricao = $row['descricao'];
    $preco = $row['preco'];
    $nome_arq = $row['nome_arq'];
    $ext_arq = $row['ext_arq'];

    $imagemPath = $diretorio . $nome_arq . $ext_arq;

    
        echo '
        <div class="card" style="width: 18rem; display: inline-block; ">
            <img src="' . $imagemPath . '" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">Título: ' . $nome . '</h5>
                <h6 class="card-text">Sexo: ' . $sexo . '</h6>
                <p class="card-text">Idade: ' . $idade . '</p>
                <p class="card-text">porte: ' . $porte . '</p>
                <p class="card-text">Descrição: ' . $descricao . '</p>
                <p class="card-text">Preço: ' . $preco . '</p>
                  <a href="adicionar.php">
                <button type="button" class="btn btn-danger">Adotar!</button>
            </a>
            </div>
        </div>';
    
        
}

$stmt->closeCursor();
?>

</html>