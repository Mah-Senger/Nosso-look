<?php

$titulo=$_POST["titulo"];
$preco=$_POST["preco"];
$descricao=$_POST["descricao"];
$categoria=$_POST["categoria"];


if ($categoria == "Blusas"){
    $categoria = "1";
}else if($categoria == "Vestidos/saias"){
    $categoria = "2";
}else if($categoria == "Calças/shorts"){
    $categoria = "3";
}

echo $categoria;

require_once  "funcoes/conexao.php" ;
require_once  "funcoes/funcoes_banco.php" ;

$conexao = conexao();
$comando = inserir_produto($titulo, $preco, $descricao, $categoria);
$resultado = mysqli_query($conexao, $comando);

if($resultado == true ){
    header("Location: administrador.php");
}else{
    die ("Erro ao inserir no banco". mysqli_error($conexao));
}

?>