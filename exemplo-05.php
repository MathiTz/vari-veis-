<?php
/* Não funciona porque não estão nos mesmo escopos
$nome = "Glaucio";

function teste(){

    echo $nome;

}

*/
//Assim que deve ser feito
$nome = "Glaucio";

function teste(){
    global $nome;
    echo $nome;

}
// Dessa forma também funciona
function teste2(){
    $nome = "João";
    echo $nome." agora no teste 2";
}

teste();

teste2();

?>