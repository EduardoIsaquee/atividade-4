<?php include '../../header.php';?> 
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    
    $nome=htmlspecialchars($_POST['nome']);
    $quant=htmlspecialchars($_POST['quant']);
    $comentario=htmlspecialchars($_POST['comentario']);

    echo "<h1>Feedback realizado com sucesso!</h1>";
    echo "<p>Produto: $nome </p>";
    echo "<p>Nota: $quant </p>";
    echo "<p>Comentário: $comentario </p>";
}

    else {
    print "<h1>ERRO!</h1>";
    print "<p>Por favor, insira os dados corretamente.</p>";

}
//dudu
?>
<?php include '../../footer.php';?>