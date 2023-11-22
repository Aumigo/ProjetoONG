<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Doação</title>
    <!-- Inclua os arquivos CSS e JavaScript do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Faça sua doação</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="processar_doacao.php" method="post">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="tipo_doacao" class="form-label">Tipo de doação:</label>
                        <select class="form-select" id="tipo_doacao" name="tipo_doacao" required>
                            <option value="racao">Ração</option>
                            <option value="dinheiro">Dinheiro</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="quantidade" class="form-label">Quantidade (em kg ou R$):</label>
                        <input type="text" class="form-control" id="quantidade" name="quantidade" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Doar</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Inclua o arquivo JavaScript do Bootstrap no final do corpo do documento -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
