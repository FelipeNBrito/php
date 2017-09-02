# Questões 


## Questão 01

### Requisitos necessários:
  * PHP 5.3

### Instruções para rodar a questão 01 (Linux & Mac)

O arquivo reference à questão encontra-se em: [Questão 01](https://github.com/FelipeNBrito/vaga-desenvolvedor-analista-php/blob/master/questao_01.php).

> No terminal execute os seguintes comandos: 

``` git clone https://github.com/FelipeNBrito/vaga-desenvolvedor-analista-php.git ```

``` cd vaga-desenvolvedor-analista-php ```

``` php questao_01.php ```


## Questão 02

Para vizualizar o arquivo contendo a questão 02 refatorada: [QUestão 02](https://github.com/FelipeNBrito/vaga-desenvolvedor-analista-php/blob/master/questao_02.php).

### Observaçôes

Refatorei o arquivo basicamente só removendo a estrutura if/else. Particularmente não gosto de usar essa estrutura nos meus códigos, por diminuírem a legibilidade de acordo com que os fluxos vão aumentando. 

Um ponto de rafatoração importante que caberia também na questão 02 seria abstrair a lógica de implementação para uma funcção helper que ficaria responsável em retornar um booleano dizendo se a pessoa se encontra autenticada. Dessa forma diminuiria o acoplamento, e aumentaria a coesâo, além de deixar transparente para as camadas de fronteira a questão de como o a autenticação funciona. Camada de fronteira não precisa saber se a autenticação é  por cookie, por session, por token, etc, só precisa saber se a pessoa possui permissoes de acesso ou não.


## Questão 03

A questão 03 encontra-se em [Questão 03](https://github.com/FelipeNBrito/vaga-desenvolvedor-analista-php/tree/master/questao_03)


## Questão 04

### Requisitos necessários:
  * PHP 5.3
  * Mysql
  
### Pre requisitos

Crie o banco de dados e tableas necessá
  rias. Utilize o arquivo ```db.sql``` .
  
  
### Instruções para rodar a questão 01 (Linux & Mac)

Adicione o conteúdo da questão 04 em algum servidor php e rode o arquivo doc/index.html dentro da pasta questão 04.



#### Obeservaçôes

Por questoẽs de outras atribuições que tive nos dias de realisaçao da prova, a questão 04 encontra-se incompleta. 
Faltou: 

 * Testes unitários
 * Testes de API
 * COnfigurar o apache para user URLS amigáveis (Para seguir o padrão REST a risca)
 * E o front end, que eu o faria utilizando a biblioteca https://rubaxa.github.io/Sortable/
 * Adicionar o atributo 'ordem' e criar as funcoes de swap order. 
