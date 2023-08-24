<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Aumigo - Painel de Administração</title>
</head>
<body>

    <?php include 'menuadm.php'; ?>

    <div class="container mt-5">
        <h1 class="text-center">Painel de Administração - Adicionar Novo Animal</h1>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome do Animal:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição:</label>
                <textarea class="form-control" id="descricao" name="descricao" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="imagem" class="form-label">Imagem:</label>
                <input type="file" class="form-control" id="imagem" name="imagem" accept="image/*" required>
            </div>
        
            <button type="submit" class="btn btn-primary">Adicionar Animal</button>

         
        </form>

        <div class="text-center mt-5">
            <h1 class="display-4">Seja bem-vindo ADM!</h1>
        </div>
    </div>

    <?php include 'rodape.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
