<?php
require_once "../../../../conexao.php";
session_start();

//caso o usuário tente entrar sem o login
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
          {
            echo "<script>
            alert('faça o login para continuar');
                window.location.href = '../../../../index.php';
            </script>";
            }
//----------------------------------------------------------------------------------------------------------------


//finaliza o nivel
$acertos = $_SESSION["acertos"];

if($acertos == 3){

      $moedas = $_SESSION["moedas"]+5;
      $nivel = $_SESSION["nivel"];
      
        // pega o nivel atual do cliente
        try{
          $sql = $conn->prepare("SELECT * FROM tbl_login WHERE id = :id");
          $sql->bindValue(":id",$_SESSION["id_login"]);
          $sql->execute();
          $row = $sql->fetch(PDO::FETCH_ASSOC);
          $verica_nivel = $row["nivel"];
        }
        catch(PDOException $erro){
          echo $erro->getMessage();
        }

        //se o nivel alcançado for maior ele é colocado no lugar do anterior
            if($nivel > $verica_nivel){

              try{
                $sql = $conn->prepare("UPDATE tbl_login SET nivel = :nivel WHERE id = :id");
                $sql->bindValue(":nivel",$nivel);
                $sql->bindValue(":id",$_SESSION['id_login']);
                $sql->execute();
              }
              catch(PDOException $erro){
                echo $erro->getMessage();
              }
            }

        //adicionar moeda
        try{
          $sql = $conn->prepare("UPDATE tbl_login SET moedas = :moedas WHERE id = :id");
          $sql->bindValue(":moedas",$moedas);
          $sql->bindValue(":id",$_SESSION['id_login']);
          $sql->execute();
        }
        catch(PDOException $erro){
          echo $erro->getMessage();
        }
      
          echo "<script>
        setTimeout(function() {
            window.location.href = '../unidade1-1.php';
        }, 1000);
        </script>";
        $_SESSION["id_fases_6ano"] = $_SESSION["id_fases_6ano"] + 1;
}
else{
header("location: fase1.php");
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