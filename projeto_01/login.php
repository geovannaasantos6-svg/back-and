<?php
    require_once("funcoes.php");//inclui o arquivo com a funçao

    $usuario = $_POST["usuario"]??'';
    $senha = $_POST["senha"]??'';

    conecta($usuario, $senha);//chama a funçao
?>