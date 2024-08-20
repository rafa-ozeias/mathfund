<?php
require_once "../../conexao.php";
session_start();

//caso o usuário tente entrar sem o login
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
          {
            echo "<script>
            alert('faça o login para continuar');
                window.location.href = '../../../index.php';
            </script>";
}

//Se o usuário errar
        
try{
  if($_SESSION["erro"] == 1){

    require_once "../../conexao.php";

  $sql = $conn->prepare("INSERT INTO tbl_ranking(id, id_login, pontuacao, nome) VALUES(:id, :id_login, :pontuacao, :nome)");
  $sql->bindValue(":id",NULL);
  $sql->bindValue(":id_login",$_SESSION['id_login']);
  $sql->bindValue(":pontuacao",$_SESSION['pontos']);
  $sql->bindValue(":nome",$_SESSION['nome']);
  $sql->execute();

    echo"<script>alert('Você perdeu!')</script>";

    echo "<script>
setTimeout(function() {
    window.location.href = '../hub.php';
}, 0010);
</script>";
}
//Se o usuário acertar
else{
    header("location: teste.php");

    $_SESSION["tabela"] = rand(1,4);
    $_SESSION["pergunta"] = rand(1,40);
}
}
catch(PDOException $erro){
  echo $erro->getMessage();
}
          

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>

    body{
      background-color: orange;
    }

  </style>
</head>
<body>
  
</body>
</html>