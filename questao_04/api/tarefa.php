<?php

	ini_set('display_startup_errors', 1);
	ini_set('display_errors', 1);
	error_reporting(-1);

	header('Content-Type: application/json');

	require_once dirname(__FILE__).'/../model/Tarefa.class.php';
	require_once dirname(__FILE__).'/../dao/TarefaDAO.class.php';


	$titulo = $_POST['titulo'];
	$descricao = $_POST['descricao'];

	$tarefa = new Tarefa($titulo, $descricao);

	$tarefaDAO = new TarefaDAO();

	$tarefaDAO->create($tarefa);

	header("HTTP/1.1 201 Created");

	$response = array('success' => true, 'message' => "Tarefa criada");

	echo json_encode($response);
