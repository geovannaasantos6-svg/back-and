<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Verificação de Nota</title>
</head>
<body>

  <h2>Informe a Nota e a Disciplina</h2>

  <form action="nota.php" method="POST">
    <label for="disciplina">Disciplina:</label>
    <input type="text" name="disciplina" id="disciplina" required><br><br>

    <label for="nota">Nota:</label>
    <input type="number" name="nota" id="nota" step="0.1" min="0" max="10" required><br><br>

    <input type="submit" value="Enviar">
  </form>

</body>
</html>