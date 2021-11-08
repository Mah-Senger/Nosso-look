CREATE TABLE produto {
    id int NOT NULL AUTO_INCREMENT,
    titulo varchar(255) NOT NULL,
    descrição varchar(255) NOT NULL,
    preco decimal(4, 2) NOT NULL,
    PRIMARY KEY (id)
}
