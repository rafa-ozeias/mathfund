<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php
        session_start();
        require_once "../../../conexao.php";

      //caso o usuário tente entrar sem o login
      if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
        {
          echo "<script>
          alert('faça o login para continuar');
              window.location.href = '../../../index.php';
          </script>";
          
          }
          $_SESSION["id_fases_7ano"] = 1;
          $_SESSION["vida"] = 3;
          $_SESSION["acertos"] = 0;
         
          //define o nivel
          try{
            $sql = $conn->prepare("SELECT * FROM tbl_login WHERE id = :id");
            $sql->bindValue(":id",$_SESSION["id_login"]);
            $sql->execute();
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            $nivel = $row["nivel"];
          }
          catch(PDOException $erro){
            echo $erro->getMessage();
          }
    ?>
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <style>
        body{
            background-image: url(../../../IMG/imgUnidade/praia.jpg);
            background-repeat:repeat;
            background-size:cover;
        }
        .titulo{
            font-family: "Roboto", sans-serif;
            font-weight: 900;
            font-style: italic;
            color: white;
            text-align: center;
        }
        .mini_logo{
          width: 40px;
          display: block;
          margin: 0px auto;
          margin-left: 45%;
          margin-top: -30px;
        }
        .linha{
            border: solid 2px white;
        }
        .mini_titulo{
          color: white;
          text-align: center;
        }
        .fases{
          border: solid #e17e15 2px;
          border-radius: 100%;
          width: 50px;
          height: 50px;
          background-color: #FCA311;
          margin-left: 55%;
          margin-top: 30px;
        }

        .fases2{
          border: solid #e17e15 2px;
          border-radius: 100%;
          width: 50px;
          height: 50px;
          background-color: #FCA311;
          margin-left: 35%;
          margin-top: 30px;
        }

        .fases3{
          border: solid #e17e15 2px;
          border-radius: 100%;
          width: 50px;
          height: 50px;
          background-color: #FCA311;
          margin-left: 55%;
          margin-top: 30px;
        }

        .fases4{
          border: solid #e17e15 2px;
          border-radius: 100%;
          width: 50px;
          height: 50px;
          background-color: #FCA311;
          margin-left: 34%;
          margin-top: 30px;
        }

        .fases5{
          border: solid #e17e15 2px;
          border-radius: 100%;
          width: 50px;
          height: 50px;
          background-color: #FCA311;
          margin-left: 60%;
          margin-top: 30px;
        }

      .fases6{
        border: solid #a40404 2px;
        border-radius: 100%;
        width: 50px;
        height: 50px;
        background-color: #cd0000;
        margin-left: 35%;
        margin-top: 30px;
      }

        .quadrado{
          margin: auto;
        }

        .cadeado{
          width: 25px;
          display: block;
          margin: 0px auto;
        }

      .caveira{
        width: 30px;;
        display: block;
        margin: 0px auto;
        margin-top: -6px;
        
      }
      .ir{
        color: #a40404;
        width: 100px;
        margin-left: 10%;
      }

        
    </style>

    <title>Olá, mundo!</title>
  </head>
  <body>
    
 <header>
        <h1 class="titulo">MATHFUND</h1><br><?php
        echo" Bem vindo".$_SESSION["nome"];
        echo $nivel;
  ?>
        <img src="../../../IMG/imglogo/logo.png" alt="mini logo" class="mini_logo">
        </header>

  <div class="container">
        <fieldset class="linha"></fieldset>
  </div>

  <div class="container-fluid">
        <p class="mini_titulo">Unidade 2</p>
  </div>

    <div class="fases">
    <?php if ($nivel >= 12): ?>
          <a href="fases/fase1.php?al=3"><img src="../../../IMG/icons/2.png" alt="cadeado" class="cadeado"></a>
      <?php else: ?>
          <img src="../../../IMG/imgUnidade/cadeado.png" alt="cadeado bloqueado" class="cadeado">
      <?php endif; ?>
  </div>

  <div class="fases2">
      <?php if ($nivel >= 13): ?>
          <a href="fases/fase1.php?al=3"><img src="../../../IMG/icons/2.png" alt="cadeado" class="cadeado"></a>
      <?php else: ?>
          <img src="../../../IMG/imgUnidade/cadeado.png" alt="cadeado bloqueado" class="cadeado">
      <?php endif; ?>
  </div>

  <div class="fases3">
      <?php if ($nivel >= 14): ?>
          <a href="fases/fase1.php?al=6"><img src="../../../IMG/icons/3.png" alt="cadeado" class="cadeado"></a>
      <?php else: ?>
          <img src="../../../IMG/imgUnidade/cadeado.png" alt="cadeado bloqueado" class="cadeado">
      <?php endif; ?>
  </div>

  <div class="fases4">
      <?php if ($nivel >= 15): ?>
          <a href="fases/fase1.php?al=9"><img src="../../../IMG/icons/4.png" alt="cadeado" class="cadeado"></a>
      <?php else: ?>
          <img src="../../../IMG/imgUnidade/cadeado.png" alt="cadeado bloqueado" class="cadeado">
      <?php endif; ?>
  </div>

  <div class="fases5">
      <?php if ($nivel >= 16): ?>
          <a href="fases/fase1.php?al=12"><img src="../../../IMG/icons/R.png" alt="cadeado" class="cadeado"></a>
      <?php else: ?>
          <img src="../../../IMG/imgUnidade/cadeado.png" alt="cadeado bloqueado" class="cadeado">
      <?php endif; ?>
  </div>

  <div class="fases6">
      <?php if ($nivel >= 17): ?>
          <a href="fases/fase1.php?al=15"><img src="../../../IMG/icons/R.png" alt="cadeado" class="cadeado"></a>
      <?php else: ?>
          <img src="../../../IMG/imgUnidade/caveira.png" alt="cadeado bloqueado" class="cadeado">
      <?php endif; ?>
  </div>

  <a href="unidade2-2.php">Proxima página</a>

  <a href="../../hub.php" class="ir"><img src="../../../IMG/icons/voltar.png"></a>
  

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>