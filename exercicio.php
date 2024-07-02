<?php

$file = fopen("exemplo.txt", "a"); 
if($file){
    echo"Arquivo aberto com sucesso<br>";
    fclose($file);

}
else {
    echo"Falha ao abrir o arquivo"; 
}

?>




<?php
$file = fopen("exemplo.txt", "a+"); //a+ coloca um dado novo ao final do arquivo
fwrite($file,'Aula de PHP - Manipulação de arquivos<br>');
$abrir=fread($file, filesize('exemplo.txt'));
fclose($file);
echo $abrir;
?>



<?php

$file = fopen("exemplo.txt", "r"); 
if($file){
    echo"Arquivo aberto com sucesso<br>";
    $abrir=fread($file, filesize('exemplo.txt'));
    fclose($file);
    echo $abrir;
}
else {
    echo"Falha ao abrir o arquivo";
}

?>