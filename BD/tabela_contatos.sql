use test;

create table contatos
(
   codigo int primary key auto_increment,
   nome varchar(50),
   email varchar(50),
   telefone varchar(20)
);

select * from contatos;
