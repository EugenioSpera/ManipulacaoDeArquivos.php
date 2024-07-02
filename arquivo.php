<?php

$file = fopen("exemplo.txt", "r"); // "r" Abre o arquivo para leitura
if($file){
    echo"Arquivo aberto com sucesso<br>";
    fclose($file);

}
else {
    echo"Falha ao abrir o arquivo"; 
}

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




<?php

$file = fopen("exemplo.txt", "a+"); //a+ coloca um dado novo ao final do arquivo
fwrite($file,'Escrevendo dados no arquivo txt<br>');
$abrir=fread($file, filesize('exemplo.txt'));
fclose($file);
echo $abrir;
?>

<?php
$content = file_get_contents('exemplo.txt');
echo $content;
?>


<?php
echo "<h1>fgets</h1>";
$file = fopen("exemplo.txt","r");
$arquivo=fgets($file,3);
echo $arquivo;
?>



<?php
unlink("exemplo.txt");
echo "Arquivo deletado com sucesso";

?>



