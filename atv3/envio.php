<?php include '../../header.php';?> 
<?php
//Teve GPT 👍
if (isset($_GET['termo'])) {
    $termo = htmlspecialchars($_GET['termo']);
    echo "<h1>Resultado da pesquisa: $termo</h1>";
}
//dudu
?>
<?php include '../../footer.php';?>