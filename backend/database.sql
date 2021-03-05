create schema recoleta;

use recoleta;

create table tbl_cadastro(
    id_usuario int not null AUTO_INCREMENT PRIMARY KEY,
    nome_usuario varchar(60) not null,
    email varchar(80) not null,
    telefone varchar(11) not null,
    senha varchar(32)
    );

create table contato (
    id int not null AUTO_INCREMENT PRIMARY KEY,
    email varchar(80) not null,
    telefone varchar(12) not null,
    mensagem varchar(500) not null
    );
