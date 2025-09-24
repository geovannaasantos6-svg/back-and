<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chamada de aula</title>
</head>
<body>
    <h1>REGISTRO DE PRESENÇA</h1>
    <form action="gravar_chamada.php" method="POST">
        <label for="sala">sala:</label>
        <input type="text" name="sala" id="sala" required><br><br>

        <label for="nome">nome:</label>
        <input type="text" name="nome" id="nome" required><br><br>

        <label for="ra">RA:</label>
        <input type="text" name="ra" id="ra" required><br><br>
        <button type="submit">REGISTRAR PRESENÇA </button>
</form>
<p><a href="listar_chamada.php"> ver lista de presença</a></p>
</body>
</html>