<?php

	ini_set('display_startup_errors', 1);
	ini_set('display_errors', 1);
	error_reporting(-1);

	require_once dirname(__FILE__).'/../controller/TarefaController.class.php';

	header('Content-Type: application/json');

	$tarefaController = new TarefaController();

	if ($_SERVER['REQUEST_METHOD'] == "GET") {
		

		/**
		 * @api {get} /tarefa.php Buscar uma Tarefa
		 * @apiName Buscar uma Tarefa
		 * @apiGroup Tarefa
		 *
		 *@apiParam {Number} tarefa_id O id da tarefa desejada
		 * @apiSuccess {String} success Indica se ocorreu tudo ok
		 * @apiSuccess {String} tarefa  Tarefa Buscada
		 */
		if(isset($_GET['tarefa_id'])) {
			$response = $tarefaController->getOneById($_GET['tarefa_id']);
			echo json_encode($response);
			exit();
		}


		/**
		 * @api {get} /tarefa.php Buscar Tarefas
		 * @apiName Buscar Tarefas
		 * @apiGroup Tarefa
		 *
		 *
		 * @apiSuccess {String} success Indica se ocorreu tudo ok
		 * @apiSuccess {String} tarefas  Lista com todas as tarefas
		 */
		$response = $tarefaController->getAll();
		echo json_encode($response);
		exit();
	} 

	/**
		 * @api {post} /tarefa.php Criar uma Tarefa
		 * @apiName Criar uma Tarefa
		 * @apiGroup Tarefa
		 *
		 * @apiParam {String} titulo
		 * @apiParam {String} descricao
		 *
		 * @apiSuccess {String} success Indica se ocorreu tudo ok
		 * @apiSuccess {String} tarefas  Lista com todas as tarefas
		 */
	if ($_SERVER['REQUEST_METHOD'] == "POST") {

		header("HTTP/1.1 201 Created");

		$response = $tarefaController->create($_POST);

		echo json_encode($response);
		exit();
	}
