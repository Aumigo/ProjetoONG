<?php
include("conexao2.php");

$consulta = mysql_query("SELECT * FROM `arquivos` ORDER BY `arquivo_nome` ASC");
if ($consulta) {
    while ($resultado = mysql_fetch_array($consulta)) {
        $caminhoCompleto = "C:\\wamp64\\www\\projeto\\Imagens\\" . $resultado["arquivo_nome"];
        echo "<a href=\"Imagens/" . $resultado["arquivo_nome"] . "\">" . $resultado["arquivo_nome"] . "</a><br />";
    }
} else {
    echo "Erro na consulta: " . mysql_error();
}
?>
