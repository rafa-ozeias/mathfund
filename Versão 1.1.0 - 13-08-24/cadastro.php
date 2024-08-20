<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro MATHFUND</title>
    <link id="cssLink" rel="stylesheet" type="text/css" href="css/logo.css">
    <script src="https://kit.fontawesome.com/aa11ef4f7d.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="form">
        <form action="cadastro.php" method="POST">
            <div class="imagem">
                <img src="IMG/imglogo/logo.png">
            </div>
            <h2 class="title">Cadastrar</h2>
            <label for="nome2">Nome</label>
            <div class="input">
                <i class="fa-solid fa-headset"></i>
                <input id="nome2" name="nome" placeholder="nome" type="text">
            </div>

            <label for="email2">Email</label>
            <div class="input">
                <i class="fa-solid fa-diamond"></i>
                <input id="email2" name="email" placeholder="Email" type="text">
            </div>

            <label for="senha">Senha</label>
            <div class="input">
                <i class="fa-solid fa-shield-halved"></i>
                <input id="senha" name="senha" placeholder="Senha" type="password">
            </div>

            <div id="btn">
                <button type="submit" name="Castastrar">Cadastrar</button>
            </div>
            <br>
            <div id="back">
               <a href="index.php"><img id="voltar" src="IMG/icons/voltar.png"></a>
            </div>
            </form>
    </div>

    <?php
    
    require_once "conexao.php";

    if(isset($_REQUEST["Castastrar"])){

        if(isset($_POST["email"]) || isset($_POST["senha"]) || isset($_POST["nome"])){

            if(strlen($_POST["email"]) == 0){
                echo "Preencha o E-mail";
            }
            else if(strlen($_POST["senha"]) == 0){
                echo "Preencha a senha";
            }
            else if(strlen($_POST["nome"]) == 0){
                echo "digite seu nome";
            }
            else{
                $nome = ($_POST["nome"]);
                $email = ($_POST['email']);
                $senha = ($_POST['senha']);
               
                

                try{

                // Verifica se o e-mail já está cadastrado
                $sql = $conn->prepare("SELECT COUNT(*) FROM tbl_login WHERE email = :email");
                $sql->bindValue(":email", $email);
                $sql->execute();
                $count = $sql->fetchColumn();

                if($count > 0){
                    echo "<script>alert('Este e-mail já foi cadastrado. Por favor, use outro.')</script>";
                } 
                else {
                    $sql = $conn->prepare("INSERT INTO tbl_login(nome,email,senha, nivel, moedas, id_fotoPerfil) VALUES(:nome,:email,:senha, :nivel, :moedas, :id_fotoPerfil)");
                    $sql->bindValue(":nome",$nome);
                    $sql->bindValue(":email",$email);
                    $sql->bindValue(":senha",$senha);
                    $sql->bindValue(":nivel",0);
                    $sql->bindValue(":moedas",10);
                    $sql->bindValue(":id_fotoPerfil",16);
                    $sql->execute();
                    header("location: index.php");
                }
                }
                catch(PDOException $erro){
                    echo $erro->getMessage();
                }
            }
        }

       
    }

?>

</body>
</html>