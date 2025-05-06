<?php include '../../header.php';?> 
<?php
//Teve GPT 👍
$respostas = [
    'q1' => 'c',
    'q2' => 'b',
    'q3' => 'c'
];

$pontuacao = 0;

foreach ($respostas as $pergunta => $resposta_correta) {
    if (isset($_POST[$pergunta]) && $_POST[$pergunta] === $resposta_correta) {
        $pontuacao++;
    }
}


echo "<h1>Resultado do Quiz</h1>";
echo "<p>Sua pontuação: $pontuacao de " . count($respostas) . "</p>";
//dudu
?>
<?php include '../../footer.php';?>
