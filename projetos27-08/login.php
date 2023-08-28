<?php
session_start();
include('conexao.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="assets/CSS/style.css">

    
    <title>Login</title>
</head>
<body>   
    <main id="container">
        <form id="login_form">
            <div id="form_header">
                <h1>Login</h1>
                <i id="mode_icon" class="fa-solid fa-moon"></i>
            </div>

            <div id="social_media">
                <!-- FACEBOOK -->
                <a href="https://pt-br.facebook.com/login/">
                    <img src="assets/imgs/facebook.png" alt="Facebook logo">
                </a>

                <!-- GOOGLE -->
                <a href="https://accounts.google.com/InteractiveLogin/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&ffgf=1&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&osid=1&passive=1209600&service=mail&ifkv=Af_xneFcPwjv-tn0nZl8baLuq_nE_LITOHhHao94DclMgyddn9_HVEbkXu3htfYFPorGRdutqAeNPQ&flowName=GlifWebSignIn&flowEntry=ServiceLogin">
                    <img src="assets/imgs/google.png" alt="Google logo">
                </a>
                
                <!-- E-mail -->
                <a href="#">
                    <img src="assets/imgs/gmail.png" alt="Gmail logo">
                </a>
            </div>

            <div id="inputs">

                <div class="input-box">
                    <label for="nome">
                        Nome
                        <div class="input-field">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" id="nome" name="nome">
                        </div>
                    </label>
                </div>
                
                <div class="input-box">
                    <label for="email">
                        E-mail
                        <div class="input-field">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" id="email" name="email">
                        </div>
                    </label>
                </div>
                
                <div class="input-box">
                    <label for="senha">
                        Senha
                        <div class="input-field">
                            <i class="fa-solid fa-key"></i>
                            <input type="senha" id="senha" name="senha">
                        </div>
                    </label>
                    
                    <div id="esqueceusenha">
                        <a href="esqueceusenha.php">
                            Esqueceu sua senha?
                        </a>
                    </div>
                    <div id="cadastro">
                        <p>Ainda não tem uma conta?<a href="cadastro.html">Criar conta</a></p>
                    </div>
                </div>
            </div>

            <div class="continue-button">
                <button><a href="login2.php">Login</a> </button>
        </form>
    </main>

    <script type="text/javascript" src="assets/js/script1.js"></script>
</body>
</html>
