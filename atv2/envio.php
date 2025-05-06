<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>

<style>
    h2{
    display: flex;
    justify-content: center;
    align-items: center; 
    height: 70vh; 
    color:rgb(255, 0, 0);
    font-size: 80px;
    }
    h1 {
    color:rgb(47, 192, 18);
    font-size: 70px;
    height: 70vh; 
    display: flex;
    justify-content: center;
    align-items: center;
    }    
</style>
</head>
<body>
<div class="centralizado">
<p class="texto">
<?php include '../../header.php';?> 
<?php
    if ($_SERVER["REQUEST_METHOD"]=="POST") {

    $usuario=htmlspecialchars($_POST['usuario']);
    $senha=htmlspecialchars($_POST['senha']);

    $usuarioCerto = "admin";
    $senhaCerta = "1234";

if  ($usuario==$usuarioCerto && $senha==$senhaCerta) {
    echo "<h1>Login efetuado com sucesso!</h1>";

}
    else {
    
     echo "<h2>ACESSO NEGADO HAHAHA!!</h2>";
    }
}
//dudu
?>

<?php include '../../footer.php';?>
</p>
</div>
</body>
</html>
