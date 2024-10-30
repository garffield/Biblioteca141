create database Biblioteca141;
use Biblioteca141;

create table livro(
	id int primary key auto_increment,
	titulo varchar(100),
    autor varchar(100),
    genero varchar(100)
);

create table usuario(
	id int primary key auto_increment,
    nome varchar(150),
    email varchar(100),
    telefone varchar(20)
);

