<?php
session_start();

if (isset($_GET['id'])) {
    $produto_id = $_GET['id'];

    // obtenção do produto do banco de dados com base no ID
    include 'conexao2.php';
    
    $produtos = array(); 
    
    $sql = "SELECT * FROM cachorro where id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $produto_id, PDO::PARAM_INT);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
           echo 'entrou aqui'; 
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $produto = array(
                "id" => $row['id'],
                "nome" => $row['nome'],
                "preco" => $row['preco'],
                "imagem" => $row['imagem']
            );
            // Adicione o produto individualmente ao carrinho
            if (!isset($_SESSION['carrinho'])) {
                $_SESSION['carrinho'] = array();
            }
            
            $_SESSION['carrinho'][] = $produto;
        }
    } else {
        echo "Nenhum resultado encontrado.";
    }

    

   // Redirecione para a página index.php com um parâmetro de consulta
   header("Location: carrinho1.php?produto_adicionado=true");
} else {
    echo "ID de produto inválido.";
}
