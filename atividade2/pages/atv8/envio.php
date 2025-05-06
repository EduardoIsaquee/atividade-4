<?php include '../../header.php';?> 
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    
    $nome=htmlspecialchars($_POST['nome']);
    $email=htmlspecialchars($_POST['email']);

    echo "<h1>Cadastro realizado com sucesso!</h1>";
    echo "Recebemos sua inscrição! Fique atento em sua caixa de mensagens, em até 7 dias aprovaremos sua inscrição.<p>Não Responda</p>";
}

    else {
    print "<h1>ERRO!</h1>";
    print "<p>Por favor, insira seus dados corretamente.</p>";

}
//dudu
?>
<?php include '../../footer.php';?>