<?php include '../../header.php';?> 
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    
    $n1=htmlspecialchars($_POST['n1']);
    $n2=htmlspecialchars($_POST['n2']);
    $op=htmlspecialchars($_POST['op']);
    $soma=($n1+$n2);
    $subtracao=($n1-$n2);
    $multiplicacao=($n1*$n2);
    $divisao=($n1/$n2);
   
if($op=="soma"){
    echo"O resultado é: ".$soma;
}else{
    if ($op=="subtracao"){
        echo"O resultado é: ".$subtracao;
    }else{
        if($op=="multiplicacao"){
            echo"O resultado é: ".$multiplicacao;
        }else{
            if($op=="divisao"){
                echo"O resultado é: ".$divisao;
        }else{
            echo "ERRO!! TENTE NOVAMENTE";
        }
    }
}
}
}
//dudu
?>
<?php include '../../footer.php';?>