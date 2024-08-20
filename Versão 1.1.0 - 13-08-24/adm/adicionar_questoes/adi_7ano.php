<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Olá, mundo!</title>
  </head>
  <body>
    <h1>Adiconar questao:</h1><br>
<form action="adi_7ano.php" method="POST">

    <!-- enunciado -->
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Questão certa</span>
  </div>
  <input type="text" class="form-control" placeholder="Usuário" aria-label="Usuário" aria-describedby="basic-addon1" name="enunciado">
</div><br>

<!-- questao certa -->
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Questão certa</span>
  </div>
  <input type="text" class="form-control" placeholder="Usuário" aria-label="Usuário" aria-describedby="basic-addon1" name="questao_certa">
</div><br>

<!-- questao 1 -->
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Questão 1</span>
  </div>
  <input type="text" class="form-control" placeholder="Usuário" aria-label="Usuário" aria-describedby="basic-addon1" name="questao_1">
</div><br>

<!-- questao 2 -->
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Questão 2</span>
  </div>
  <input type="text" class="form-control" placeholder="Usuário" aria-label="Usuário" aria-describedby="basic-addon1" name="questao_2">
</div><br>

<!-- questao 3 -->
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Questão 3</span>
  </div>
  <input type="text" class="form-control" placeholder="Usuário" aria-label="Usuário" aria-describedby="basic-addon1" name="questao_3">
</div><br>

<!-- questao 4 -->
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Questão 4</span>
  </div>
  <input type="text" class="form-control" placeholder="Usuário" aria-label="Usuário" aria-describedby="basic-addon1" name="questao_4">
</div><br>

<!-- questao 5 -->
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Questão 5</span>
  </div>
  <input type="text" class="form-control" placeholder="Usuário" aria-label="Usuário" aria-describedby="basic-addon1" name="questao_5">
</div><br>

<!-- botao de enviar -->
<button  type="submit" name="enviar" class="btn btn-secondary">Cadastrar</button>

<button  type="submit" name="enviar" class="btn btn-secondary"><a href="administrador.php">Voltar</a></button>

</form>


<?php

require_once "../conexao.php";

if(isset($_REQUEST["enviar"])){

    $enunciado = $_REQUEST["enunciado"];
    $questao_certa = $_REQUEST["questao_certa"];
    $questao_1 = $_REQUEST["questao_1"];
    $questao_2 = $_REQUEST["questao_2"];
    $questao_3 = $_REQUEST["questao_3"];
    $questao_4 = $_REQUEST["questao_4"];
    $questao_5 = $_REQUEST["questao_5"];

    try{

      $sql = $conn->prepare("INSERT INTO questoes_7ano (id, enunciado, questao_certa, questao_1, questao_2, questao_3, questao_4, questao_5)
                                                 VALUES(:id, :enunciado, :questao_certa, :questao_1, :questao_2, :questao_3, :questao_4, :questao_5)");

      $sql->bindValue(":id",NULL);
      $sql->bindValue(":enunciado",$enunciado);
      $sql->bindValue(":questao_certa",$questao_certa);
      $sql->bindValue(":questao_1",$questao_1);
      $sql->bindValue(":questao_2",$questao_2);
      $sql->bindValue(":questao_3",$questao_3);
      $sql->bindValue(":questao_4",$questao_4);
      $sql->bindValue(":questao_5",$questao_5);
      $sql->execute();

    }
    catch(PDOException $erro){
      echo $erro->getMessage();
    }

}


?>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>