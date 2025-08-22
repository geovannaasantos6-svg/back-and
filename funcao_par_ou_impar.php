<?php
function ParOuImpar($num){
    if ($num % 2 == 0) {
        return "par";
    }else{
        return"impar";
    }
}
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $n1 = $_POST['n1'];
    echo "O numero $n1 é: " . ParOuImpar($n1);
}
?>