<?php include '../../header.php';?> 
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    
    $nome=htmlspecialchars($_POST['nome']);
    $email=htmlspecialchars($_POST['email']);
    $assunto=htmlspecialchars($_POST['assunto']);
    $comentario=htmlspecialchars($_POST['comentario']);

    echo "<h1>Email enviado com sucesso!</h1>";
    echo "<p>Nome: $nome </p>";
    echo "<p>Email: $email </p>";
    echo "<p>Assunto: $assunto </p>";
    echo "<p>Texto do Email: $comentario </p>";
}

    else {
    print "<h1>ERRO!</h1>";
    print "<p>Por favor, insira seus dados corretamente.</p>";

}
//duds
?>
<?php include '../../footer.php';?>