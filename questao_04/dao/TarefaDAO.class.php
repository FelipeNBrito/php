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

		public function getOneById($id) {

			$stmt = $this->connection->prepare("SELECT titulo, descricao, id FROM tarefa WHERE id=?");
			$stmt->bindParam(1, $id, PDO::PARAM_INT);
			$stmt->execute();

			$row = $stmt->fetch();


			$titulo = $row['titulo'];
			$descricao = $row['descricao'];
			$id = $row['id'];

			$tarefa = new Tarefa($titulo, $descricao, $id);

			return $tarefa;
		}

		public function getAll() {

			$stmt = $this->connection->prepare("SELECT titulo, descricao, id FROM tarefa");
			$stmt->bindParam(1, $id, PDO::PARAM_INT);
			$stmt->execute();

			$tarefas = array();

			while($row = $stmt->fetch()) {

				$titulo = $row['titulo'];
				$descricao = $row['descricao'];
				$id = $row['id'];

				$tarefa = new Tarefa($titulo, $descricao, $id);

				array_push($tarefas, $tarefa);
			}

			return $tarefas;

		}

		public function deleteOne($id) {

			$stmt = $this->connection->prepare("DELETE FROM tarefa WHERE id=?");
			$stmt->bindParam(1, $id, PDO::PARAM_INT);
			$stmt->execute();
		}
	}