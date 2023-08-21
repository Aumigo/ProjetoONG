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
        <label for="sex">Sexo:</label>
        <select id="sex">
            <option value="">Todos</option>
            <option value="male">Macho</option>
            <option value="female">Fêmea</option>
        </select>

        <label for="age">Idade:</label>
        <select id="age">
            <option value="">Todas</option>
            <option value="puppy">Filhote</option>
            <option value="adult">Adulto</option>
            <option value="senior">Idoso</option>
        </select>

        <label for="breed">Raça:</label>
        <input type="text" id="breed" placeholder="Digite a raça...">
    </div>

    <div class="dogs-list" id="dogsList">
    </div>

    <script src="assets/js/scriptcaes.js"></script>
</body>
</html>
