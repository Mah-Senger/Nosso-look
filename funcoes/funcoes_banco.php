<?php

// Funções do banco de dados - PRODUTO
function inserir(){

}

function editar_produto($titulo, $descricao, $preco, $categoria, $id){
    $comando = "UPDATE produto SET titulo = '$titulo', descricao = '$descricao', preco = '$preco', categoria = '$categoria' WHERE id=$id";
    return $comando;
}

function deletar($id){
    $comando = "DELETE FROM produto WHERE id = $id";
    return $comando;
}

function selecionar_tudo(){
    $comando = "SELECT * FROM produto";
    return $comando;
}

function selecionar_id($id){
    $comando = "SELECT * FROM produto WHERE id = $id";
    return $comando;
}

function busca(){

}


// Funções do banco de dados - ESTOQUE 
function editar_estoque_produto($tam_P, $tam_M, $tam_G, $tam_GG, $tam_36, $tam_38, $tam_40, $tam_42, $tam_44, $tam_46, $id){
    $comando = "UPDATE estoque SET tam_P = '$tam_P', tam_M = '$tam_M', tam_G = '$tam_G', tam_GG = '$tam_GG', tam_36 = '$tam_36', tam_38 = '$tam_38', tam_40 = '$tam_40', tam_42 = '$tam_42', tam_44 = '$tam_44', tam_46 = '$tam_46' WHERE id=$id";
    return $comando;
}

function selecionar_estoque($id){
    $comando = "SELECT * FROM estoque WHERE id_produto = $id";
    return $comando;
}


// Funções do banco de dados - CATEGORIA
function selecionar_categorias(){

}


// Funções do banco de dados - AVALIAÇÃO
function avaliar($id, $avaliacao){
    $comando = "INSERT INTO avaliacao (id_usuario, avaliacao) values ('$id', '$avaliacao')";
    return $comando;
}

?>