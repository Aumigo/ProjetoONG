<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aumigo</title>
    <link rel="stylesheet" href="assets/CSS/stylecoes.css">
</head>
<body>
    <h1>Aumigo</h1>

    <div class="filters">
        <label for="sexo">Sexo:</label>
        <select id="sexo">
            <option value="">Todos</option>
            <option value="masculino">Macho</option>
            <option value="feminino">Fêmea</option>
        </select>

        <label for="idade">Idade:</label>
        <select id="idade">
            <option value="">Todas</option>
            <option value="filhote">Filhote</option>
            <option value="adulto">Adulto</option>
            <option value="idoso">Idoso</option>
        </select>

        <label for="raca">Raça:</label>
        <input type="text" id="raca" placeholder="Digite a raça...">
    </div>

    <div class="dogs-list" id="dogsList">
    </div>

    <script src="assets/js/scriptcaes.js"></script>
</body>
</html>
