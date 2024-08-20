<?php
    //TESTE
    session_start();
    require_once "../../conexao.php";
    try{
      $sql = $conn->prepare("SELECT * FROM tbl_login WHERE id = :id");
      $sql->bindValue(":id",$_SESSION['id_login']);
      $sql->execute();
      $row = $sql->fetch(PDO::FETCH_ASSOC);

      $sql = $conn->prepare("SELECT * FROM arquivos WHERE id = :id");
      $sql->bindValue(":id",$row['id_fotoPerfil']);
      $sql->execute();
      $foto = $sql->fetch(PDO::FETCH_ASSOC);
    }
    catch(PDOException $erro){
      echo $erro->getMessage();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
      body{
        background: #F59C36;
      }
    </style>
    <title>Olá, mundo!</title>
  </head>
  <body>

  <?php
  
  require_once "../../conexao.php";

  try{
    $sql = $conn->prepare("SELECT * FROM tbl_login WHERE id = :id");
    $sql->bindValue(":id",$_SESSION['id_login']);
    $sql->execute();
    $row = $sql->fetch(PDO::FETCH_ASSOC);
  }
  catch(PDOException $erro){
    echo $erro->getMessage();
  }

  ?>
   
   <form method="POST" action="perfil.php">
        <p>Perfil</p>

        <p>Foto de perfil<br>
          <img src="<?php echo "../../" . $foto['caminho']?>" width="100px">
        </p>

        <p>Nome<br>
          <input type="text" name="nome" disabled value="<?php echo $row['nome']?>"> 
        </p>

        <p>E-mail<br>
          <input type="text" name="nome" disabled value="<?php echo $row['email']?>"> 
        </p>

        <p>
          <button name="alterar">alterar informações</button>
        </p>

        <a href="../hub.php">Voltar</a>

       

   </form>

   <?php
    if(isset($_REQUEST["alterar"])){
      header("location: editarPerfil.php");
    }


   ?>
            
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>