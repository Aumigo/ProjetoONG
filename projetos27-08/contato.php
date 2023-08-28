<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Aumigo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e15747;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        textarea {
            resize: vertical;
        }
        button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Entre em Contato com o Aumigo</h1>
        <p>Tem alguma pergunta ou sugestão? Preencha o formulário abaixo para entrar em contato conosco.</p>
        <form action="processar_contato.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone" required>
            
            <label for="assunto">Assunto:</label>
            <input type="text" id="assunto" name="assunto" required>
            
            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" rows="4" required></textarea>
            
            <p><h3>Se interessou por algum Animal?</h3>
                        <form>
                        <input type="checkbox"name="opcao1" value="op1">Sim!Quero Adotar!
                        <input type="checkbox"name="opcao2" value="op2">Não tenho interrese no momento!
                        <input type="checkbox"name="opcao3" value="op3">Tenho interrese em apadrinhar ou fazer doações!
                        <input type="checkbox"name="opcao4" value="op4">Outros motivos!</p>
                    </div>
                    <div> <p>Quer adotar?  <a href="formulario.php">Prencher formulário</a></p></div>

            <button type="submit">Enviar Mensagem</button>
            <div id="cadastro">
                
        </form>
    </div>
</body>
</html>
