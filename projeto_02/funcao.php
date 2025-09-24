<?php
// Nome do arquivo de presença
define("ARQUIVO_CHAMADA", "lista_chamada.txt");


// Gravar uma linha no arquivo
function gravarChamada($linha) {
    file_put_contents(ARQUIVO_CHAMADA, $linha, FILE_APPEND | LOCK_EX);
}

// Ler todas as presenças registradas
function lerChamada() {
    if (!file_exists(ARQUIVO_CHAMADA)) {
        return [];
    }
    $conteudo = file(ARQUIVO_CHAMADA, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    return $conteudo;
}
?>