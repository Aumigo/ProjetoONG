<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aumigo</title>
</head>
<body>
    <h1>Gatos para Adoção</h1>

    <form action="" method="get">
        <label for="name">Nome:</label>
        <input type="text" name="name"><br>
        <label for="age">Idade:</label>
        <input type="number" name="age"><br>
        <label for="health_status">Estado de Saúde:</label>
        <input type="text" name="health_status"><br>
        <label for="description">Descrição:</label>
        <input type="text" name="description"><br>
        <label for="sex">Sexo:</label>
        <select name="sex">
            <option value="">Qualquer</option>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
        </select><br>
        <button type="submit">Filtrar</button>
    </form>

    <?php
    include 'conexao3.php';
    

    // Filtros
    $nameFilter = isset($_GET['name']) ? $_GET['name'] : '';
    $ageFilter = isset($_GET['age']) ? intval($_GET['age']) : 0;
    $healthStatusFilter = isset($_GET['health_status']) ? $_GET['health_status'] : '';
    $descriptionFilter = isset($_GET['description']) ? $_GET['description'] : '';
    $sexFilter = isset($_GET['sex']) ? $_GET['sex'] : '';

    foreach ($catsData as $gatos) {
        // Aplicar filtros
        if (
            (empty($nameFilter) || stripos($cat['name'], $nameFilter) !== false) &&
            ($ageFilter === 0 || $cat['age'] == $ageFilter) &&
            (empty($healthStatusFilter) || stripos($cat['health_status'], $healthStatusFilter) !== false) &&
            (empty($descriptionFilter) || stripos($cat['description'], $descriptionFilter) !== false) &&
            (empty($sexFilter) || $cat['sex'] === $sexFilter)
        ) {
            echo '<div>';
            echo '<h2>' . $cat['name'] . '</h2>';
            echo '<p><strong>Idade:</strong> ' . $cat['age'] . '</p>';
            echo '<p><strong>Estado de Saúde:</strong> ' . $cat['health_status'] . '</p>';
            echo '<p><strong>Descrição:</strong> ' . $cat['description'] . '</p>';
            echo '<p><strong>Sexo:</strong> ' . $cat['sex'] . '</p>';
            echo '</div>';
        }
    }
    ?>
</body>
</html>

