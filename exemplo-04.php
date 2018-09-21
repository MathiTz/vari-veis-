<?php
//                          Variáveis Pré-Definidas ou Arrays super globais

//entra com ?a=(VALOR) no url
$nome = (int)$_GET["a"];


//var_dump($nome);


//$ip = $_SERVER["SCRIPT_NAME"] - da a localização da pasta;
//$ip = $_SERVER["REMOTE_ADDR"] - mostra o IP do local;
$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;

?>

