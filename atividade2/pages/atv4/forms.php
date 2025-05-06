<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Email Dudu</title>
<style>

</style>
</head>
<body>
    <h1>Email</h1>

    <form action="pages/atv4/envio.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="assunto">Assunto:</label>
        <input type="text" id="assunto" name="assunto"><br><br>

        <label for="comentario">Texto do seu Email:</label>
        <textarea id="comentario" name="comentario"></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
