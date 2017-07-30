<?php
 include './db/dbService.php';

class Disciplina {
  public $id;
  public $codigo;
  public $descricao;
  public $abreviacao;
  public $carga_horaria;
  public $tipo;
  public $tem_turma;
  public $optativa;
  public $turma;
  public $laboratorio;
  public $ativo;
}

class Nota {
  public $id;
  public $Disciplina;
  public $nb1, $nb2, $nb3, $nb4;
  public $fb1, $fb2, $fb3, $fb4;
  public $rec1, $rec2;
  public $recfinal;
  public $recurso1, $recurso2, $recurso3;
  public $nc1, $nc2, $nc3, $nc4;
  public $conselhoparcial;
  public $conselhofinal;

  public function loadDisciplina() {
    $data = dbService::executeQuery("SELECT * FROM disciplinas WHERE id = $1", array($id));
    foreach ($data as $key) {
      $d = new Disciplina();

    }
  }
}

class Aluno {
  //  Atributes
  public $nome;
  public $apelido;
  public $endereco;
  public $data_de_nascimento;
  public $cidade_nascimento;
  public $pai;
  public $mae;
  public $rg;
  public $emissao_do_rg;
  public $sexo;
  public $email;
  public $arquivo;
  public $matricula;
  public $cpf;
  public $ra_gdae;

  private $Nota = array();

  public function __construct($mat) {
    $data = dbService::executeQuery("SELECT * FROM dados WHERE matricula = $1", array($mat));
    foreach ($data as $key) {
      $nome = $key["nome"];
      $apelido = $key["apelido"];
      $endereco = $key["endereco"];
      $data_de_nascimento = $key["data_de_nascimento"];
      $cidade_nascimento = $key["cidade_nascimento"];
      $pai = $key["pai"];
      $mae = $key["mae"];
      $rg = $key["rg"];
      $emissao_do_rg = $key["emissao_do_rg"];
      $sexo = $key["sexo"];
      $email = $key["email"];
      $arquivo = $key["arquivo"];
      $matricula = $mat;
      $cpf = $key["cpf"];
      $ra_gdae = $key["ra_gdae"];
    }
    $data2 = dbService::executeQuery("SELECT * FROM notas WHERE aluno = $1", array($mat));
    foreach ($data2 as $key2) {
      $n = new Nota();
      $n->id = $key2["id"];
      $n->nb1 = $key2["nb1"];
      $n->nb2 = $key2["nb2"];
      $n->nb3 = $key2["nb3"];
      $n->nb4 = $key2["nb4"];
      $n->fb1 = $key2["fb1"];
      $n->fb2 = $key2["fb2"];
      $n->fb3 = $key2["fb3"];
      $n->fb4 = $key2["fb4"];
      $n->rec1 = $key2["rec1"];
      $n->rec2 = $key2["rec2"];
      $n->recfinal = $key2["recfinal"];
      $n->recurso1 = $key2["recurso1"];
      $n->recurso2 = $key2["recurso2"];
      $n->recurso3 = $key2["recurso3"];
      $n->nc1 = $key2["nc1"];
      $n->nc2 = $key2["nc2"];
      $n->nc3 = $key2["nc3"];
      $n->nc4 = $key2["nc4"];
      $n->conselhoparcial = $key2["conselhoparcial"];
      $n->conselhofinal = $key2["conselhofinal"];
      $n->loadDisciplina();
      $array_push($Nota, $n);
    }
  }

  public function updateInfoFromDatabase() {
    $data = dbService::executeQuery("SELECT * FROM dados WHERE matricula = $1", array($matricula));
    foreach ($data as $key) {
      $nome = $key["nome"];
      $apelido = $key["apelido"];
      $endereco = $key["endereco"];
      $data_de_nascimento = $key["data_de_nascimento"];
      $cidade_nascimento = $key["cidade_nascimento"];
      $pai = $key["pai"];
      $mae = $key["mae"];
      $rg = $key["rg"];
      $emissao_do_rg = $key["emissao_do_rg"];
      $sexo = $key["sexo"];
      $email = $key["email"];
      $arquivo = $key["arquivo"];
      $matricula = $key["matricula"];
      $cpf = $key["cpf"];
      $ra_gdae = $key["ra_gdae"];
    }
  }

 }
?>
