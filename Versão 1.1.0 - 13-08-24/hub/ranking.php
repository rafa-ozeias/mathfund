<?php
    session_start();
    $i = 0;
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/hub.css">

    <title>Olá, mundo!</title>

  </head>
  <body>
  <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Posição</th>
      <th scope="col">Nome</th>
      <th scope="col">Pontuação</th>
    </tr>
  </thead>
    <?php 
    try{
        require_once "../conexao.php";

        $sql = $conn->prepare("SELECT * FROM tbl_ranking ORDER BY pontuacao DESC LIMIT 6");
        $sql->execute();
       
        while($row = $sql->fetch(PDO::FETCH_ASSOC)){
            ?>
        <tr>
          <td><?php echo $i = $i+1;?></td>  
          <td><?php echo $row["nome"]?></td>
          <td><?php echo $row["pontuacao"]?></td><br>
         
          <?php
        }
    }
    catch(PDOException $erro){
        echo $erro->getMessage();
    }
        
    ?>
    <footer>
        <a href="hub.php"><img src="../IMG/icons/voltar.png"></a></footer>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>