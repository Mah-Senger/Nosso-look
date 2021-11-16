<?php

//Funções do banco de dados - USUARIO
function inserir_usuario($nome, $email, $cpf, $data_nascimento, $sexo, $telefone, $endereco, $senha){
    $comando= "INSERT INTO usuario(nome,email,cpf,data_nascimento,sexo,telefone,endereco,senha) values ('$nome','$email','$cpf','$data_nascimento','$sexo','$telefone','$endereco','$senha')";
    return $comando;
}

function inserir(){

}

function editar(){

}

function deletar($id){
    $comando = "DELETE FROM produto WHERE id = $id";
    return $comando;
}

function selecionar_tudo(){

}

function selecionar_categorias(){

}

function busca(){

}

?>