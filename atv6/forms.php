<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Feedback Dudu</title>
</head>
<body>
    <h1>Feedback do produto</h1>
    <form action="pages/atv6/envio.php" method="post">
        <label for="nome">Nome do produto:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="quant">Dê a sua nota de 1 a 5 para esse produto: </label>
        <input type="number" id="quant" name="quant" required><br><br>

        <label for="comentario">comentário</label>
        <textarea id="comentario" name="comentario"></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>