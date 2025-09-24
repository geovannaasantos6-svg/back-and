<?php
require_once "funcao.php";

$alunos = lerChamada();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Presença</title>
</head>
<body>
    <h1>Alunos Presentes</h1>
    <ul>
        <?php foreach ($alunos as $linha): ?>
            <li><?php echo htmlspecialchars($linha); ?></li>
        <?php endforeach; ?>
    </ul>

    <p><a href="index.php">Registrar nova presença</a></p>
</body>
</html>
