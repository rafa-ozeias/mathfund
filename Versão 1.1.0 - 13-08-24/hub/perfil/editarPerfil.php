<?php
require_once "../../conexao.php";
session_start();

      //PUXA AS INFORMAÇOES--------------------------------------------------------------------------------------

      try{
        $sql = $conn->prepare("SELECT * FROM tbl_login WHERE id = :id");
        $sql->bindValue(":id",$_SESSION['id_login']);
        $sql->execute();
        $row = $sql->fetch(PDO::FETCH_ASSOC);
      }
      catch(PDOException $erro){
        echo $erro->getMessage();
      }

    try{
        //MUDAR FOTO=================================================================================================================
        if(isset($_REQUEST['alterar_foto'])){

            $arquivo = $_FILES['arquivo'];

            if($arquivo['error']){
                die("Falha em enviar o arquivo!");
            }
            if($arquivo['size'] > 5242880){
                die("Arquivo muito grande!! max: 5MB");
            }

            $pasta = "/IMG/fotoPerfil/";
            $nomeDoArquivo = $arquivo["name"];
            $novoNomeDoArquivo = uniqid();
            $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));

            if($extensao != "jpg" && $extensao != "png" && $extensao != "jpeg"){
                die("Não aceitamos esse tipo de arquivo!");
            }

            $path =  $pasta . $novoNomeDoArquivo . "." . $extensao;
            $tudo_certo = move_uploaded_file($arquivo["tmp_name"], "../../" . $path);

            if($tudo_certo){
                $sql = $conn->prepare("INSERT INTO arquivos(id,nome,caminho,data_upload) VALUES(:id,:nome,:caminho,CURRENT_TIMESTAMP)");
                $sql->bindValue(":id",NULL);
                $sql->bindValue(":nome",$nomeDoArquivo);
                $sql->bindValue(":caminho",$path);
                $sql->execute();

                $ultimoId = $conn->lastInsertId();

                $sql = $conn->prepare("UPDATE tbl_login SET id_fotoPerfil = :id_fotoPerfil WHERE id = :id");
                $sql->bindValue(":id_fotoPerfil",$ultimoId);
                $sql->bindValue(":id",$_SESSION['id_login']);
                $sql->execute();
                echo "<script>alert('Foto alterados com sucesso!')</script>";
            }

            }  

              //MUDAR DADOS===============================================================================================================
            if(isset($_REQUEST['alterar_dados'])){
              $nome = $_REQUEST['nome'];
              $email = $_REQUEST['email'];

              try{
                $sql = $conn->prepare("UPDATE tbl_login SET nome = :nome, email = :email WHERE id = :id");
                $sql->bindValue(":nome",$nome);
                $sql->bindValue(":email",$email);
                $sql->bindValue(":id",$_SESSION['id_login']);
                $sql->execute();

                echo "<script>alert('Dados alterados com sucesso!')</script>";
              }
              catch(PDOException $erro){
                echo $erro->getMessage();
              }
            }
        }
        catch(PDOException $erro){
            echo $erro->getMessage();
        }
    
//O CÓDIFO TÁ UMA BOSTA 👍

?>
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

   <form action="editarPerfil.php" method="POST" enctype="multipart/form-data">

    <p>Perfil</p>

        <p>Nome<br>
          <input type="text" name="nome"  value="<?php echo $row['nome']?>"> 
        </p>

        <p>E-mail<br>
          <input type="text" name="email"  value="<?php echo $row['email']?>"> 
        </p>

        <p>
            <label>Selecione o arquivo</label>
            <input type="file" name="arquivo">
        </p>

        <p>
          <button name="alterar_dados">alterar Dados</button>
          <button name="alterar_foto">alterar Foto</button>
        </p>

        

        <a href="perfil.php">Voltar</a>

   </form>
            
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>