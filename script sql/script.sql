CREATE TABLE produto (
    id int NOT NULL AUTO_INCREMENT,
    titulo varchar(255) NOT NULL,
    descricao varchar(255) NOT NULL,
    preco decimal(4, 2) NOT NULL,
    imagem varchar(200),
    PRIMARY KEY (id)
);

/*CREATE TABLE categoria (
    id int NOT NULL AUTO_INCREMENT,
    id_produto varchar(255) NOT NULL,
    categoria varchar(255) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id) REFERENCES produto (id) ON
    DELETE CASCADE ON UPDATE CASCADE
);*/

CREATE TABLE administrador (
    id int NOT NULL AUTO_INCREMENT,
    usuario varchar(255) NOT NULL,
    senha int(10) NOT NULL,
    PRIMARY KEY (id)
);

create table usuario (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    cpf int(11) NOT NULL,
    data_nascimento date NOT NULL,
    sexo varchar(9) NOT NULL,
    telefone int(13) NOT NULL,
    senha varchar(20) NOT NULL,
    endereco varchar(255) NOT NULL,
    PRIMARY KEY (id)
);

create table estoque (
    id int NOT NULL AUTO_INCREMENT,
    id_produto int NOT NULL,
    tam_P int(4),
    tam_M int(4),
    tam_G int(4),
    tam_GG int(4),
    tam_36 int(4),
    tam_38 int(4),
    tam_40 int(4),
    tam_42 int(4),
    tam_44 int(4),
    tam_46 int(4),
    PRIMARY KEY (id),
    FOREIGN KEY (id_produto) REFERENCES produto (id) ON
    DELETE CASCADE ON UPDATE CASCADE
);

create table avaliacao (
    id int NOT NULL AUTO_INCREMENT,
    id_usuario int NOT NULL,
    avaliacao text NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_usuario) REFERENCES usuario(id) ON
    DELETE CASCADE ON UPDATE CASCADE
);