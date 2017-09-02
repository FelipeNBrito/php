<?php

	class Tarefa {

		private $id;		// Identificador unico da tarefa
		private $titulo;	// Titulo da tarefa
		private $descricao;	// Descricao da tarefa

		public function __construct($titulo="", $descricao="", $id=null) {

			$this->id = $id;
			$this->titulo = $titulo;
			$this->descricao = $descricao;
		}

		public function getId() {
			return $this->id;
		}

		public function setId ($id) {
			$this->id = $id;
		}

		public function getTitulo() {
			return $this->titulo;
		}

		public function setTitulo($titulo) {
			$this->titulo = $titulo;
		}

		public function getDescricao() {
			return $this->descricao;
		}

		public function setDescricao($descricao) {
			$this->descricao = $descricao;	
		}

		public function toArray() {

			$returnArray = array(
				'id' => $this->getId(),
				'titulo' => $this->getTitulo(),
				'descricao' => $this->getDescricao());
			
			return $returnArray;
		}
	}