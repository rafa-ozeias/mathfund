<?php
    include 'check_visit.php';
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathfund</title>
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="css/index.CSS">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jersey+15&display=swap" rel="stylesheet">
    <link rel="icon" id="icon" type="image/png" href="img/2.png">
</head>
<body>
<div class="container">
    <div class="form-image">
        <img src="IMG/imglogo/logomath.png" alt="símbolo de uma cabeça de raposa, embaixo da logo está escrito Mathfund">
    </div>
    <div class="form1">
        <form action="index.php" method="POST">
            <div class="form-header">
                <div class="title">
                    <h1 class="entrarh1">ENTRAR</h1> <div class="imgextra"><img src="IMG/imglogo/logo.png" alt="minilogo ao lado do título de entrar do mathfund"></div>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" placeholder="Digite seu Email" required>
                </div>
            </div>

            <div class="input-group">
                <div class="input-box">
                    <label for="password">Senha</label>
                    <input id="password" type="password" name="senha" placeholder="Digite sua senha" required>
                </div>
            </div>

            <div class="continue-button">
                <button id="entrar" name="Entrar">Entrar    </button>
                
            </div>
            <br>
            <br>
            <div class="link_cadastrar">
                <div id="text"> Não Possui cadastro? </div>
                <a href="cadastro.php"> Clique aqui</a>
                <br>
                <br>
                <div id="text"> ADMs </div>
                <a href="login_adm.php"> Entrar como administrador</a>
            </div>

            <br>
            <br>
            <div class="activateButton" id="activateButton"></div>
        </form>

    </div>
</div>

    </form>

    <?php
        require_once "conexao.php";

        if(isset($_REQUEST["Entrar"])){

            if(strlen($_POST["email"]) == 0){
                echo "Preencha o E-mail";
            }
            else if(strlen($_POST["senha"]) == 0){
                echo "Preencha a senha";
            }
            else{
                $email = ($_POST['email']);
                $senha = ($_POST['senha']);

                try{

                    $sql = $conn->prepare("SELECT * FROM tbl_login WHERE email = :email AND senha = :senha ;");
                    $sql->bindValue(":email", $email);
                    $sql->bindValue(":senha", $senha);
                    $sql->execute();
                    $quantidade = $sql->rowCount();
                    $dados_login = $sql->fetch(PDO::FETCH_ASSOC);

                    if($quantidade == 1){
                        session_start();

                        $_SESSION['id_login'] = $dados_login["id"];
                        $_SESSION['nome'] = $dados_login["nome"];
                        $_SESSION['email'] = $dados_login["email"];
                        $_SESSION['senha'] = $dados_login["senha"];
                        
            
                        header("location: hub/hub.php");
                    }
                    else{
                        echo "<script>
                            alert('dados não encontrados')
                        </script>";;
                    }

                }
                catch(PDOException $erro){
                    echo $erro->getMessage();
                }
                
               

            }

        }

        

    ?>

</body>
</html>