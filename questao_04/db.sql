CREATE DATABASE tarefas;
use tarefas;

CREATE Table tarefa (
	titulo VARCHAR(100),
	descricao VARCHAR(400),
	id int NOT NULL AUTO_INCREMENT,

	PRIMARY KEY (id)
);