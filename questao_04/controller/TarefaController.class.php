<?php

	require_once dirname(__FILE__).'/../model/Tarefa.class.php';
	require_once dirname(__FILE__).'/../dao/TarefaDAO.class.php';
	
	class TarefaController {

		private $tarefaDAO;

		public function __construct() {
			$this->tarefaDAO = new tarefaDAO();
		}

		public function create($request) {

			$titulo = $request['titulo'];
			$descricao = $request['descricao'];

			$tarefa = new Tarefa($titulo, $descricao);

			$this->tarefaDAO->create($tarefa);

			return array('success' => true, 'message' => "Tarefa criada");
		}

		public function getOneById($id) {

			$tarefa = $this->tarefaDAO->getOneById($id);

			return array('success' => true, 'tarefa' => $tarefa->toArray());
		}

		public function getAll() {

			$tarefas = $this->tarefaDAO->getAll();

			$tarefasArray = [];

			for ($i=0; $i < count($tarefas) ; $i++) { 
				$tarefasArray[$i] = $tarefas[$i]->toArray();
			}

			return array('success' => true, 'tarefas' => $tarefasArray);
		}

		public function deleteOne($id) {

			$tarefaDAO->deleteOne($id);
			return array('success' => true, 'message' => 'Tarefa deleted');
		}
	}