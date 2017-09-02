define({ "api": [
  {
    "type": "get",
    "url": "/tarefa.php",
    "title": "Buscar Tarefas",
    "name": "Buscar_Tarefas",
    "group": "Tarefa",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "success",
            "description": "<p>Indica se ocorreu tudo ok</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "tarefas",
            "description": "<p>Lista com todas as tarefas</p>"
          }
        ]
      }
    },
    "version": "0.0.0",
    "filename": "api/tarefa.php",
    "groupTitle": "Tarefa",
    "sampleRequest": [
      {
        "url": "http://localhost/vaga-desenvolvedor-analista-php/questao_04/api/tarefa.php"
      }
    ]
  },
  {
    "type": "get",
    "url": "/tarefa.php",
    "title": "Buscar uma Tarefa",
    "name": "Buscar_uma_Tarefa",
    "group": "Tarefa",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "tarefa_id",
            "description": "<p>O id da tarefa desejada</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "success",
            "description": "<p>Indica se ocorreu tudo ok</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "tarefa",
            "description": "<p>Tarefa Buscada</p>"
          }
        ]
      }
    },
    "version": "0.0.0",
    "filename": "api/tarefa.php",
    "groupTitle": "Tarefa",
    "sampleRequest": [
      {
        "url": "http://localhost/vaga-desenvolvedor-analista-php/questao_04/api/tarefa.php"
      }
    ]
  },
  {
    "type": "post",
    "url": "/tarefa.php",
    "title": "Criar uma Tarefa",
    "name": "Criar_uma_Tarefa",
    "group": "Tarefa",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "titulo",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "descricao",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "success",
            "description": "<p>Indica se ocorreu tudo ok</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "tarefas",
            "description": "<p>Lista com todas as tarefas</p>"
          }
        ]
      }
    },
    "version": "0.0.0",
    "filename": "api/tarefa.php",
    "groupTitle": "Tarefa",
    "sampleRequest": [
      {
        "url": "http://localhost/vaga-desenvolvedor-analista-php/questao_04/api/tarefa.php"
      }
    ]
  },
  {
    "type": "delete",
    "url": "/tarefa.php",
    "title": "Deletar uma tarefa",
    "name": "Deletar_uma_Tarefa",
    "group": "Tarefa",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "tarefa_id",
            "description": ""
          }
        ]
      }
    },
    "version": "0.0.0",
    "filename": "api/tarefa.php",
    "groupTitle": "Tarefa",
    "sampleRequest": [
      {
        "url": "http://localhost/vaga-desenvolvedor-analista-php/questao_04/api/tarefa.php"
      }
    ]
  }
] });
