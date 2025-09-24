<?php
function conecta ($usuario,$senha){
    if ($usuario === "admin" && $senha === "1234"){
        header("Location:painel.php");
        exit;
    } else {
        //Codifica a mensagem para evitar problemas com acentuação
        $msg = urlencode ("Usuario ou senha invalidos");
        header("Location:index.php?msg=$msg");
        exit;

    }
}
?>