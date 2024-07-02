<?php

//função para ler e exibir o conteudo do arquivolog
//essa função recebe em parametro o caminho log
function lerLogs($caminhoArquivo) {
    //verifica se o caminho existe
    if(file_exists($caminhoArquivo)){
        //lE o conteudo do arquivo
        $conteudo = file_get_contents($caminhoArquivo);
        //exibe o conteudo do arquivo na tela
        //nl2br quebra a linha 
        //htmlspecialchars = para mostrar com acentuação correta
        echo nl2br(htmlspecialchars($conteudo));

    } else {
        echo "arquivo de log não encontrado";

    }
    
} 
//utilizando a função para ler o arquivo
$arquivoLog = 'logs/app.log';
echo"<h2 Logs de Aplicativo";
echo"<pre>";
lerLogs($arquivoLog);
echo"<prev>";


?>