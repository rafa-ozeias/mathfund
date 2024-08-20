<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Funcionário</title>

    <?php
    
    require_once "../../conexao.php";

    try{

        if(isset($_REQUEST['al'])){

            $id = $_REQUEST['al'];

            $conn = $conn->prepare("SELECT * FROM questoes_6ano WHERE id = :id");
            $conn->bindValue(":id",$id);
            $conn->execute();

            $row = $conn->fetch(PDO::FETCH_ASSOC);

            

        }

    }

    catch(PDOException $erro){

        echo $erro->getMessage();

    }
    
    ?>

</head>
<body>
    
    <h2>Alterar Funcionários</h2>

    <fieldset>

    
       <h2> Dados Pessoais </h2>
    

    <form name="form" action="alt6ano.php" method="POST">

        <p>ID da Questão<br>
            <input type="text" name="id" require value="<?php echo $row['id']?>" readonly>
        </p>

        <p>Enunciado<br>
            <input type="text" name="enunciado" required value="<?php echo $row['enunciado']?>">
        </p>

        <p>Questão certa<br>
            <input type="text" name="questao_certa" require value="<?php echo $row['questao_certa']?>">   
        </p>

        <p>Alternativa 1<br>
            <input type="text" name="questao_1" require value="<?php echo $row['questao_1']?>">   
        </p>

        <p>Alternativa 2<br>
            <input type="text" name="questao_2" require value="<?php echo $row['questao_2']?>">   
        </p>

        <p>Alternativa 3<br>
            <input type="text" name="questao_3" require value="<?php echo $row['questao_3']?>">   
        </p>

        <p>Alternativa 4<br>
            <input type="text" name="questao_4" require value="<?php echo $row['questao_4']?>" >   
        </p>

        <p>Alternativa 5<br>
            <input type="text" name="questao_5" require value="<?php echo $row['questao_5']?>" >   
        </p>

        <p>
            <input type="submit" name="alterar" value="alterar">
            <input type="submit" name="excluir" value="excluir">
        </p>
        
    </form>

    <p>
        <a href="../ver_questoes.php">Volta a página de questões</a>
    </p>

    </fieldset>

    <?php
    
    if(isset($_REQUEST["alterar"])){

        $id = $_REQUEST["id"];
        $enunciado = $_REQUEST["enunciado"];
        $questao_certa = $_REQUEST["questao_certa"];
        $questao_1 = $_REQUEST["questao_1"];
        $questao_2 = $_REQUEST["questao_2"];
        $questao_3 = $_REQUEST["questao_3"];
        $questao_4 = $_REQUEST["questao_4"];
        $questao_5 = $_REQUEST["questao_5"];


        try{

            require_once "../../conexao.php";

            $sql = $conn->prepare("UPDATE questoes_6ano SET enunciado = :enunciado, questao_certa = :questao_certa, questao_1 = :questao_1, questao_2 = :questao_2, questao_3 = :questao_3, questao_4 = :questao_4, questao_5 = :questao_5 WHERE id = :id");
            
            $sql->bindValue(":enunciado",$enunciado);
            $sql->bindValue(":questao_certa",$questao_certa);
            $sql->bindValue(":questao_1",$questao_1);
            $sql->bindValue(":questao_2",$questao_2);
            $sql->bindValue(":questao_3",$questao_3);
            $sql->bindValue(":questao_4",$questao_4);
            $sql->bindValue(":questao_5",$questao_5);
            $sql->bindValue(":id",$id);
            $sql->execute();

            echo "<script language=javascript>
                    alert('Dados alterados com sucesso!!');
                    location.href='../ver_questoes.php';
                </script>";
        }
        catch(PDOException $erro){
            echo $erro->getMessage();
        }
        


    }

    if(isset($_REQUEST["excluir"])){

        $id = $_REQUEST["id"];

        try{
            $sql = $conn->prepare("DELETE FROM questoes_6ano WHERE id = :id");
			$sql->bindValue(":id",$id);
			$sql->execute();

			echo "<script language=javascript>
                    alert('Dados excluidos com sucesso!!');
                    location.href='../ver_questoes.php';
                </script>";
        }
        catch(PDOException $erro){
            echo $erro->getMessage();
        }
    }
    
    
    ?>

   
    
</body>
</html>