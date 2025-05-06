<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário Dudu</title>
</head>
<body>
    <h1>Qual é o seu filme favorito?</h1>
    <form action="pages/atv10/envio.php" method="POST">
        <label><input type="radio" name="filme" value="Matrix" required> Matrix</label><br>
        <label><input type="radio" name="filme" value="Vingadores"> Vingadores</label><br>
        <label><input type="radio" name="filme" value="Titanic"> Titanic</label><br>
        <label><input type="radio" name="filme" value="Interestelar"> Interestelar</label><br><br>
        <button type="submit">Votar</button>
    </form>
</body>
</html>