<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/stylerecuperar.css">
<html>
    <title>Recuperar Senha</title>
</head>
<body>
    <h2>Recuperar Senha</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required>
        <br><br>
        <div class="continue-button">
                    <button><a href="recuperarsenha.php">Enviar</a> </button>
                </div>
    </form>
</body>
</html>
