create database cry;
use cry;
create table usuarios(
	id int auto_increment,
	nome varchar(45) not null,
	username varchar(45) not null,
	email varchar(45) not null,
	login varchar(45) not null,
	senha varchar(45) not null,
	primary key(id)
);