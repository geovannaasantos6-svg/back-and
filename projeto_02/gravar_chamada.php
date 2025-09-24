<?php
require_once "funcao.php";
$sala = $_POST['sala'] ?? '';
$nome = $_POST['nome'] ?? '';
$ra = $_POST['ra'] ?? '';
if ($sala && $nome && $ra) {
    $linha = "$sala | $nome | $ra";
    gravar_Chamada($linha);
    echo "<p>Presença registrada com sucesso!</p>";
} else {
    echo "<p>Erro: Preencha todos os campos.</p>";
}
echo '<p><a href="index.php">Voltar</a></p>';
echo '<p><a href="listar_chamada.php">Ver lista</a></p>';
?>

