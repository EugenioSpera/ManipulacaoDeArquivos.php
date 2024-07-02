<?php

date_default_timezone_set('America/Sao_Paulo');
//iremos criar uma função pata registrar os eventos
function logEvento($mensagem){
//caminho onde ira salvar os arquivos de log
$caminhoLog='logs/app.log';
//formato da mensagem
$registro=date('[Y-m-d H:i:s]').' '.$mensagem.PHP_EOL;
//Salvando a mensagem dentro do arquivo LOG
file_put_contents($caminhoLog,$registro, FILE_APPEND);

}
//esta 
logEvento('Eugenio Neves Spera');
echo"evento registrado com sucesso";

?>