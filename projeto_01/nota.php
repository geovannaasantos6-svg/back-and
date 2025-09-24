<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $disciplina = $_POST["disciplina"];
    $nota = floatval($_POST["nota"]);

    echo "<h2>Resultado</h2>";
    echo "Disciplina: <strong>$disciplina</strong><br>";
    echo "Nota: <strong>$nota</strong><br>";

    if ($nota > 7) {
        echo "<p style='color: green;'>✅ Aprovado</p>";
    } elseif ($nota >= 5 && $nota <= 7) {
        echo "<p style='color: orange;'>⚠️ Em recuperação</p>";
    } else {
        echo "<p style='color: red;'>❌ Reprovado</p>";
    }
} else {
    echo "Método inválido.";
}
?>
