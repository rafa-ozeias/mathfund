<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../css/testes.css">
    
    

    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        require_once "../../conexao.php";
        $tabela = $_SESSION["tabela"];
        $id = $_SESSION["pergunta"];
        $pontos = $_SESSION["pontos"];

        if($tabela == 1){
            $sql = $conn->prepare("SELECT * FROM questoes_6ano WHERE id = :id");
            $sql->bindValue(":id",$id);
            $sql->execute();
            $row = $sql->fetch(PDO::FETCH_ASSOC); 
        }

        if($tabela == 2){
            $sql = $conn->prepare("SELECT * FROM questoes_7ano WHERE id = :id");
            $sql->bindValue(":id",$id);
            $sql->execute();
            $row = $sql->fetch(PDO::FETCH_ASSOC); 
        }

        if($tabela == 3){
            $sql = $conn->prepare("SELECT * FROM questoes_8ano WHERE id = :id");
            $sql->bindValue(":id",$id);
            $sql->execute();
            $row = $sql->fetch(PDO::FETCH_ASSOC); 
        }

        if($tabela == 4){
            $sql = $conn->prepare("SELECT * FROM questoes_9ano WHERE id = :id");
            $sql->bindValue(":id",$id);
            $sql->execute();
            $row = $sql->fetch(PDO::FETCH_ASSOC); 
        }
    ?>

<form name="form1" method="POST" action="teste.php"><?php

?>
    <div class="resposta">
        <div class="titulo"> DESAFIO 

            <p class="test"><?php echo "$pontos"?></p>

        </div>


        <div class="enunciado">
            <p><h1><?php echo $row['enunciado']?></h1><br> 
        </div>
      
       
        <input type="radio" value="<?php echo $row['questao_1'] ?>"  name="resposta"> <?php echo $row['questao_1'] ?><br>
        <input type="radio" value="<?php echo $row['questao_2'] ?>" name="resposta"> <?php echo $row['questao_2'] ?><br>
        <input type="radio" value="<?php echo $row['questao_3'] ?>" name="resposta"> <?php echo $row['questao_3'] ?>
        <br>
        <input type="radio" value="<?php echo $row['questao_4'] ?>" name="resposta"> <?php echo $row['questao_4'] ?>
        <br>
        <input type="radio" value="<?php echo $row['questao_5'] ?>" name="resposta"> <?php echo $row['questao_5'] ?><br>

        <button type="submit" name="enviar" class="btn btn-secondary">Resposta</button>
        
    
        

        <a href="../hub.php"><i class="fa-solid fa-circle-chevron-left fa-lg" style="color: #000000;" alt="botão para voltar"></i></a>
    </div>
     
    <img class="imagem" src="../../IMG/imglogo/raposasee" alt="raposa">

</form>
<?php
    if(isset($_REQUEST["enviar"])){

        $resposta = $_REQUEST["resposta"];
    
        if ($resposta == $row['questao_certa']) {
           
            $_SESSION["pontos"] = $pontos+1;

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
                window.location.href = 'teste2.php';
            }, 2000);
            </script>";
            } else {
                $_SESSION["erro"] = 1; 
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
                window.location.href = 'teste2.php';
            }, 2000);
            </script>";
        }
    }
?>

</div>
</body>
</html>