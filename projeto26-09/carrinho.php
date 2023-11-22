
<!DOCTYPE html>
<html>
<head>
    <style>
        .carrinho-vazio {
            font-size: 18px;
            color: red;
        }

        .carrinho-titulo {
            background-color: #f1f1f1;
            padding: 10px;
        }

        .carrinho-lista {
            list-style-type: none;
            padding: 0;
        }

        .carrinho-item {
            margin: 10px 0;
        }

        .carrinho-total {
            font-weight: bold;
            text-align: center;
            margin-top: 30px;
        }

        .carrinho-botao-finalizar {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            margin-right: 10px;
        }

        .carrinho-botao-limpar {
            display: inline-block;
            background-color: #ff0000;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            margin-right: 10px;
        }

        .carrinho-botao-voltar {
            display: inline-block;
            background-color: #337ab7;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            margin-right: 10px;
        }
    </style>
</head>
<body>
<?php
session_start();

if (!isset($_SESSION['carrinho']) || empty($_SESSION['carrinho'])) {
    echo '<div class="carrinho-vazio">Seu carrinho está vazio.</div>';
} else {
    echo '<div class="carrinho-titulo"><h1>Seu Carrinho de Compras</h1></div>';
    echo '<ul class="carrinho-lista">';
    $total = 0;

    foreach ($_SESSION['carrinho'] as $produto) {
        echo '<li class="carrinho-item">';
        if (isset($produto['nome'])) {
            echo "{$produto['nome']} - R$" . number_format($produto['preco'], 2);
            $total += $produto['preco'];
        } else {
            echo "Produto sem nome";
        }
        echo '</li>';
    }

    echo '</ul>';
    echo "<p class='carrinho-total'>Total: R$" . number_format($total, 2) . "</p>";
    echo '<a href="finalizar.php" class="carrinho-botao-finalizar">Finalizar Compra</a><br>';
    echo '<a href="limpar_carrinho.php" class="carrinho-botao-limpar">Limpar Carrinho</a><br>';
    echo '<a href="carrinho1.php" class="carrinho-botao-voltar">Voltar às Compras</a>';
}
?>
</body>
</html>
