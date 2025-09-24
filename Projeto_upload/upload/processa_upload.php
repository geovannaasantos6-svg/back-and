<?php
$pastaDestino = "uploads/";

if(isset($_FILES["arquivo"])&& $_FILES["arquivo"]["error"] === 0){
    $nomeArquivo = basename($_FILES["arquivo"]["name"]);
    $caminhoCompleto = $pastaDestino . $nomeArquivo;

    // Verifica se o arquivo é uma imagem
    $tipoArquivo = strtolower(pathinfo($caminhoCompleto, PATHINFO_EXTENSION));
    $tiposPermitidos = ["jpg","jpeg","png","gif"];

    if(in_array($tipoArquivo, $tiposPermitidos)){
        if(move_uploaded_file($_FILES["arquivo"]["tmp_name"], $caminhoCompleto)){
            echo "✅ Upload enviado com sucesso!<br>";
            echo "<a href='index.php'>Ver Galeria</a>";
        }else{
            echo "❌ Erro ao enviar o arquivo.";
        }
    }else{
        echo "❌ Erro. Envie apenas imagens (JPG,PNG e GIF).";
    }
}else{
    echo "❌ Nenhum arquivo enviado.";
}
?>