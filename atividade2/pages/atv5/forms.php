<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Dudu </title>
</head>
<body>
    <h1>Calculadora simples</h1>
    <form action="pages/atv5/envio.php" method="post">
        <label for="n1">Número 1: </label>
        <input type="number" id="n1" name="n1" required><br><br>

        <label for="n2">Número 2: </label>
        <input type="number" id="n2" name="n2" required><br><br>

        <label for="op">Operação (soma,subtracao, divisao ou multiplicacao): </label>
        <input type="op" id="op" name="op" required><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>