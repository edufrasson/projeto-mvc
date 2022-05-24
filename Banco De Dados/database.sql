drop database db_sistema;

create database db_sistema;
use db_sistema;
create table pessoa(
	id int auto_increment not null,
    nome varchar(100) not null,
    cpf char(11) not null,    
    data_nascimento date not null,    
    primary key(id)
);

create table funcionario(
	id int auto_increment not null,
    nome varchar(100) not null,
    cpf char(11) not null,  
    data_nascimento date not null,    
    primary key(id)
);

 create table categoria_produto(
   id int auto_increment not null,
   descricao varchar(100) not null,
   primary key(id)
 );

create table produto(
	id int auto_increment not null,
    id_categoria int not null,
    descricao varchar(100) not null,
    preco double not null, 
    primary key(id),
    foreign key(id_categoria) references categoria_produto(id)
);

-- Views

create view view_produto as
SELECT p.id as id,
	   p.descricao as descricao,
	   p.preco as preco,
       cp.id as id_categoria,
       cp.descricao as categoria
FROM produto p 
JOIN categoria_produto cp on cp.id = p.id_categoria
ORDER BY p.id;

