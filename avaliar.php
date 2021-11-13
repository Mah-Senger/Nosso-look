<?php

//valor fixo temporariamente, até que exista a $_SESSION do usuario
$id = "1";
$id_produto = $_GET["id_produto"];
$avaliacao = $_POST["avaliacao"];

require_once "funcoes/conexao.php";
require_once "funcoes/funcoes_banco.php";

$conexao = conexao();
$comando = avaliar($id, $avaliacao);

$resultado = mysqli_query($conexao, $comando);

if($resultado){
    header('Location: descr_cal2.html');
}else{
    echo "deu errado!";
}



?>