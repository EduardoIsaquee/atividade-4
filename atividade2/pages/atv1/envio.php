<?php include '../../header.php';?>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    
    $nome=htmlspecialchars($_POST['nome']);
    $email=htmlspecialchars($_POST['email']);
    $idade=htmlspecialchars($_POST['idade']);

    echo "<h1>Cadastro realizado com sucesso!</h1>";
    //echo "<p>Nome: $nome </p>";
    //echo "<p>Email: $email </p>";
    ;;echo "<p>Idade: $idade </p>";
}

    else {
    print "<h1>ERRO!</h1>";
    print "<p>Por favor, insira seus dados corretamente.</p>";

}
//dudu
?>

<?php include '../../footer.php';?>