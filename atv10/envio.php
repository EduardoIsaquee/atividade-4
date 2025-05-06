<?php include '../../header.php';?> 
<?php
//Teve MUITO GPT 👍
session_start();

if (!isset($_SESSION['votos'])) {
    $_SESSION['votos'] = [
        'Matrix' => 0,
        'Vingadores' => 0,
        'Titanic' => 0,
        'Interestelar' => 0
    ];
}

if (isset($_POST['filme'])) {
    $filmeEscolhido = $_POST['filme'];

    // Valida o voto
    if (array_key_exists($filmeEscolhido, $_SESSION['votos'])) {
        $_SESSION['votos'][$filmeEscolhido]++;
        echo "<h1>Você votou em: <strong>$filmeEscolhido</strong></h1>";
    } else {
        echo "<h1>Opção inválida.</h1>";
    }

    echo "<h2>Resultados atuais:</h2>";
    echo "<ul>";
    foreach ($_SESSION['votos'] as $filme => $total) {
        echo "<li>$filme: $total voto(s)</li>";
    }
    echo "</ul>";

    echo '<a href="pages/atv10/forms.php">Voltar à enquete</a>';
} else {
    echo "<p>Nenhum voto foi enviado.</p>";
}
//dudu
?>
<?php include '../../footer.php';?>