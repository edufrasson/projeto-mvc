use db_sistema;
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

