<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Registro eventos Dudu</title>
</head>
<body>
    <h1>Registro eventos</h1>
    <form action="pages/atv7/envio.php" method="post">

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="comentario">Qual seu interesse?</label>
        <textarea id="comentario" name="comentario"></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>

</body>
</html>