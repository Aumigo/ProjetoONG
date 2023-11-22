<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Pagamento</title>
    <!-- Inclua os arquivos CSS e JavaScript do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Dados de Pagamento</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="processar_pagamento.php" method="post">
                    <div class="mb-3">
                        <label for="numero_cartao" class="form-label">Número do Cartão:</label>
                        <input type="text" class="form-control" id="numero_cartao" name="numero_cartao" required>
                    </div>
                    <div class="mb-3">
                        <label for="data_validade" class="form-label">Data de Validade:</label>
                        <input type="text" class="form-control" id="data_validade" name="data_validade" placeholder="MM/AA" required>
                    </div>
                    <div class="mb-3">
                        <label for="codigo_seguranca" class="form-label">Código de Segurança:</label>
                        <input type="text" class="form-control" id="codigo_seguranca" name="codigo_seguranca" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Pagar</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Inclua o arquivo JavaScript do Bootstrap no final do corpo do documento -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
