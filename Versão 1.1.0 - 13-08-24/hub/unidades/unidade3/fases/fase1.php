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

//acertos
$acertos = $_SESSION["acertos"];

//vidas
$vida = $_SESSION["vida"];
$_SESSION["nivel"] = 1;

//id das questoes, que dependem do "al"
if(isset($_REQUEST["al"])){
    $soma = $_REQUEST["al"];
    $_SESSION["id_fases_8ano"] = $_SESSION["id_fases_8ano"] + $soma;

        //nivel
        
        if($_REQUEST["al"] == 3){
            $_SESSION["nivel"] = 2;
        }
        else if($_REQUEST["al"] == 6){
            $_SESSION["nivel"] = 3;
        }
        else if($_REQUEST["al"] == 9){
            $_SESSION["nivel"] = 4;
        }
        else if($_REQUEST["al"] == 12){
            $_SESSION["nivel"] = 5;
        }
        else if($_REQUEST["al"] == 15){
            $_SESSION["nivel"] = 6;
        }
}
$id = $_SESSION["id_fases_8ano"];



//pega as questoes no banco de dados
$sql = $conn->prepare("SELECT * FROM questoes_6ano WHERE id = :id");
$sql->bindValue(":id",$id);
$sql->execute();
$row = $sql->fetch(PDO::FETCH_ASSOC);

//caso o jogador perca
if($vida == 0){
      echo "<script>
    setTimeout(function() {
        window.location.href = '../unidade3-1.php';
    }, 1000);
    </script>";
}



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        img{
            width: 50px;
        }
    </style>

    <title>QUESTOES</title>
</head>
<body>
<form name="form1" method="POST" action="fase1.php"><?php

// Loop para imprimir os corações
for ($i = 0; $i < $vida; $i++) {
    echo '<img src="../../../../IMG/icons/coração.png" alt="Coração">';
}
?>

     <!-- Dicas -->
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExemploModalCentralizado">
        DICAS
        </button>

        <!-- Modal -->
        <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TituloModalCentralizado">Dica!!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo $row["dicas"]?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                
            </div>
            </div>
        </div>
        </div>

    <div class="resposta">

        <div class="enunciado">
        <p><h1><?php echo $row['enunciado']?></h1><br>
        </div>
       
        <input type="radio" value="<?php echo $row['questao_1'] ?>" name="resposta"> <?php echo $row['questao_1'] ?><br>
        <input type="radio" value="<?php echo $row['questao_2'] ?>" name="resposta"> <?php echo $row['questao_2'] ?><br>
        <input type="radio" value="<?php echo $row['questao_3'] ?>" name="resposta"> <?php echo $row['questao_3'] ?>
        <br>
        <input type="radio" value="<?php echo $row['questao_4'] ?>" name="resposta"> <?php echo $row['questao_4'] ?>
        <br>
        <input type="radio" value="<?php echo $row['questao_5'] ?>" name="resposta"> <?php echo $row['questao_5'] ?><br>

        <button type="submit" name="enviar" class="btn btn-secondary">Resposta</button><br>
        <a href="../unidade3-1.php"><img src="../../../../IMG/icons/voltar.png" alt="botão de voltar"></a>
    
  
     </div>
    
</form>

<?php

if(isset($_REQUEST["enviar"])){

    $resposta = $_REQUEST["resposta"];

    if ($resposta == $row['questao_certa']) {
        $_SESSION["acertos"] = $acertos+1;
        $_SESSION["id_fases_8ano"] = $id+1;

            echo "<script> 
        Swal.fire({
        position: 'center-center',
        icon: 'success',
        title: 'Resposta certa!',
        showConfirmButton: false,
        timer: 2500
        })
        </script>";
        echo "<script>
        setTimeout(function() {
            window.location.href = 'fase2.php';
        }, 2000);
        </script>";
        } else {
            $_SESSION["vida"] = $vida-1;
            
            echo "<script> 
        Swal.fire({
        position: 'center-center',
        icon: 'error',
        title: 'Resposta errada!',
        showConfirmButton: false,
        timer: 2500
        })
        </script>";
        echo "<script>
        setTimeout(function() {
            window.location.href = 'fase2.php';
        }, 2000);
        </script>";
    }
}



?>



<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>