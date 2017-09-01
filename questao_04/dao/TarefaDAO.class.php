<?php

	require_once dirname(__FILE__).'/../factory/DatabaseFactory.class.php';
	require_once dirname(__FILE__).'/../model/Tarefa.class.php';

	class TarefaDao {

	
		private $connection;


		public function __construct() {

			$databaseFactory = new DatabaseFactory();

			$this->connection = $databaseFactory->getConnection();
		}

		public function create(Tarefa $tarefa) {

			$titulo = $tarefa->getTitulo();
			$descricao = $tarefa->getDescricao();

			$stmt = $this->connection->prepare("INSERT INTO tarefa (titulo, descricao) VALUES (?, ?)");
			$stmt->bindParam(1, $titulo, PDO::PARAM_STR);
			$stmt->bindParam(2, $descricao, PDO::PARAM_STR);
			$stmt->execute();
		}
	}