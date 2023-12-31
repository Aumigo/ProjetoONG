<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/stylecadastro.css">
    <title>Formulário</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="assets/imgs/undraw_dog_c7i6.svg" alt="">
        </div>
        <div class="form">
            <form action="processocadastro.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="#">Entrar</a></button>
                    </div>
                </div>


                <br> <label for="tipo">Tipo:</label>
                            <select id="tipo" name="tipo">
                     <option value="cliente">Cliente</option>
                     <option value="admin">Administrador</option>
</select>

                <div class="input-group">
                    <div class="input-box">
                        <label for="primeironome">Primeiro Nome</label>
                        <input id="primeironome" type="text" name="primeironome" placeholder="Digite seu primeiro nome" required>
                    </div>

                    <div class="input-box">
                        <label for="sobrenome">Sobrenome</label>
                        <input id="sobrenome" type="text" name="sobrenome" placeholder="Digite seu sobrenome" required>
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="input-box">
                        <label for="numero">Celular</label>
                        <input id="numero" type="tel" name="numero" placeholder="(xx) xxxx-xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input id="senha" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>

                    <div class="input-box">
                        <label for="confirmasenha">Confirme sua Senha</label>
                        <input id="confirmasenha" type="password" name="confirmasenha" placeholder="Digite sua senha novamente" required>
                    </div>
                </div>

                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input id="feminino" type="radio" name="gender" value="Feminino">
                            <label for="feminino">Feminino</label>
                        </div>

                        <div class="gender-input">
                            <input id="masculino" type="radio" name="gender" value="Masculino">
                            <label for="masculino">Masculino</label>
                        </div>

                        <div class="gender-input">
                            <input id="outros" type="radio" name="gender" value="Outros">
                            <label for="outros">Outros</label>
                        </div>

                        <div class="gender-input">
                            <input id="none" type="radio" name="gender" value="Prefiro não dizer">
                            <label for="none">Prefiro não dizer</label>

                        </div>
                    </div>
                </div>

                <div class="continue-button">
                    <button type="submit">Continuar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
