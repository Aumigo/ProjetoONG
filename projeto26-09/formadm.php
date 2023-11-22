<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
        <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            text-align: center;
            background-color: #FF384F;
            padding: 20px;
        }
        .content {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .footer {
            text-align: center;
            background-color:#FF384F;
            padding: 10px;
        }
    </style>
    <title>Aumigo</title>
</head>
<body>
    
<?php include 'login.php'; 

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.html"); // Redirecionar para a página de login se o usuário não estiver autenticado
    exit();
}?>

<?php include 'menuadm.php'; ?>

<div style="text-align:center">
<h1 style="font:lato">Seja bem vindo ADM!</h1>
<iframe src="https://giphy.com/embed/k1Psl92gw7YPSPYFKm" width="272" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<?php include 'rodape.php'; ?>
</body>
</html>