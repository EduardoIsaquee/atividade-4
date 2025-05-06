<?php include '../../header.php';?> 
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    
    $nome=htmlspecialchars($_POST['nome']);
    $email=htmlspecialchars($_POST['email']);
    $comentario=htmlspecialchars($_POST['comentario']);

    echo "<h1>Cadastro realizado com sucesso!</h1>";
    echo "<p>Nome: $nome </p>";
    echo "<p>Email: $email </p>";
    echo "<p>Preferencia: $comentario </p>";
}

    else {
    print "<h1>ERRO!</h1>";
    print "<p>Por favor, insira seus dados corretamente.</p>";

}
//Dudu
?>
<?php include '../../footer.php';?>