<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <style>
  
  
  </style>


    <title>Questões</title>
  </head>
  <body>
  <form name="form1" method="POST" action="ver_questoes.php">
    <h1>Questões Cadastradas</h1>
    <button  type="submit" name="enviar" class="btn btn-secondary"><a href="administrador.php">Voltar</a></button>
  </form>


  <table border=1>
    <h2>6° Ano</h2>
<tr>
    <td>Código</td>
    <td>Enunciado</td>
    <td>Questão certa</td>
    <td>Questao 1</td>
    <td>Questao 2</td>
    <td>Questao 3</td>
    <td>Questao 4</td>
    <td>Questao 5</td>
    
</tr>

<?php

    try{
      require_once "../conexao.php";

      $consulta = $conn->prepare("SELECT * FROM questoes_6ano");
      $consulta->execute();

      while($row = $consulta->fetch(PDO::FETCH_ASSOC)){
      ?>
        <tr>
          <td><?php echo $row["id"]?></td>
          <td><?php echo $row["enunciado"]?></td>
          <td><?php echo $row["questao_certa"]?></td>
          <td><?php echo $row["questao_1"]?></td>
          <td><?php echo $row["questao_2"]?></td>
          <td><?php echo $row["questao_3"]?></td>
          <td><?php echo $row["questao_4"]?></td>
          <td><?php echo $row["questao_5"]?></td>
        

          <td>
            <a href="det6.php?=<?php echo $row["id"]; ?>">Detalhes</a>
            <a href="alterar_questoes/alt6ano.php?al=<?php echo $row["id"]; ?>">Alterar</a>
           
          </td>
        </tr>
        <?php

    }}
    catch(PDOException $erro){
      header("Ocorreu o seguinte erro".$erro->getMessage());
    }

?>

<table border=1>
    <h2>7° Ano</h2>
<tr>
    <td>Código</td>
    <td>Enunciado</td>
    <td>Questão certa</td>
    <td>Questao 1</td>
    <td>Questao 2</td>
    <td>Questao 3</td>
    <td>Questao 4</td>
    <td>Questao 5</td>
    
</tr>

<?php

    try{
      require_once "../conexao.php";

      $consulta = $conn->prepare("SELECT * FROM questoes_7ano");
      $consulta->execute();

      while($row = $consulta->fetch(PDO::FETCH_ASSOC)){
      ?>
        <tr>
          <td><?php echo $row["id"]?></td>
          <td><?php echo $row["enunciado"]?></td>
          <td><?php echo $row["questao_certa"]?></td>
          <td><?php echo $row["questao_1"]?></td>
          <td><?php echo $row["questao_2"]?></td>
          <td><?php echo $row["questao_3"]?></td>
          <td><?php echo $row["questao_4"]?></td>
          <td><?php echo $row["questao_5"]?></td>
        

          <td>
            <a href="detalhes.php?=<?php echo $row["id"]; ?>">Detalhes</a>
            <a href="alterar7.php?al=<?php echo $row["id"]; ?>">Alterar</a>
            <a href="Excluir8.php?ex=<?php echo $row["id"]; ?>">Excluir</a>
          </td>
        </tr>
        <?php

    }}
    catch(PDOException $erro){
      header("Ocorreu o seguinte erro".$erro->getMessage());
    }

?>

  <table border=1>
    <h2>8° Ano</h2>
<tr>
    <td>Código</td>
    <td>Enunciado</td>
    <td>Questão certa</td>
    <td>Questao 1</td>
    <td>Questao 2</td>
    <td>Questao 3</td>
    <td>Questao 4</td>
    <td>Questao 5</td>
    
</tr>

<?php

    try{
      require_once "../conexao.php";

      $consulta = $conn->prepare("SELECT * FROM questoes_8ano");
      $consulta->execute();

      while($row = $consulta->fetch(PDO::FETCH_ASSOC)){
      ?>
        <tr>
          <td><?php echo $row["id"]?></td>
          <td><?php echo $row["enunciado"]?></td>
          <td><?php echo $row["questao_certa"]?></td>
          <td><?php echo $row["questao_1"]?></td>
          <td><?php echo $row["questao_2"]?></td>
          <td><?php echo $row["questao_3"]?></td>
          <td><?php echo $row["questao_4"]?></td>
          <td><?php echo $row["questao_5"]?></td>
        

          <td>
            <a href="detalhes.php?=<?php echo $row["id"]; ?>">Detalhes</a>
            <a href="alterar.php?al=<?php echo $row["id"]; ?>">Alterar</a>
            <a href="Excluir.php?ex=<?php echo $row["id"]; ?>">Excluir</a>
          </td>
        </tr>
        <?php

    }}
    catch(PDOException $erro){
      header("Ocorreu o seguinte erro".$erro->getMessage());
    }

?>

<table border=1>
    <h2>9° Ano</h2>
<tr>
    <td>Código</td>
    <td>Enunciado</td>
    <td>Questão certa</td>
    <td>Questao 1</td>
    <td>Questao 2</td>
    <td>Questao 3</td>
    <td>Questao 4</td>
    <td>Questao 5</td>
    
</tr>

<?php

    try{
      require_once "../conexao.php";

      $consulta = $conn->prepare("SELECT * FROM questoes_9ano");
      $consulta->execute();

      while($row = $consulta->fetch(PDO::FETCH_ASSOC)){
      ?>
        <tr>
          <td><?php echo $row["id"]?></td>
          <td><?php echo $row["enunciado"]?></td>
          <td><?php echo $row["questao_certa"]?></td>
          <td><?php echo $row["questao_1"]?></td>
          <td><?php echo $row["questao_2"]?></td>
          <td><?php echo $row["questao_3"]?></td>
          <td><?php echo $row["questao_4"]?></td>
          <td><?php echo $row["questao_5"]?></td>
        

          <td>
            <a href="detalhes.php?=<?php echo $row["id"]; ?>">Detalhes</a>
            <a href="alterar.php?al=<?php echo $row["id"]; ?>">Alterar</a>
            <a href="Excluir.php?ex=<?php echo $row["id"]; ?>">Excluir</a>
          </td>
        </tr>
        <?php

    }}
    catch(PDOException $erro){
      header("Ocorreu o seguinte erro".$erro->getMessage());
    }


?>




    



    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>