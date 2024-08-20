<?php
require_once "../conexao.php";
    session_start();
    $_SESSION["tabela"] = rand(1,4);
    $_SESSION["pergunta"] = rand(1,40);
    $_SESSION["pontos"] = 0;
    $_SESSION["erro"] = 0;

    //FOTO de PERFIL ----------------------------------------------------------------------------------------------
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/hubstyle.css">
    <link rel="stylesheet" href="../css/sidebarstyles.css">

    <title>Olá, mundo!</title>
  </head>
  <body>
  <nav id="sidebar">
        <div id="sidebar_content">
            <div id="user">
                
                <a href="perfil/perfil.php"> <img  src="<?php echo "../" . $foto['caminho']?>" id="user_avatar" alt="avatar"></a>


                <p id="user_infos">
                    <span class="item-description">
                        <a href="perfil/perfil.php">Seu perfil</a>
                    </span>
                    <span class="item-description">
                        4 pontos
                    </span>
                </p>
            </div>
    
            <ul id="side_items">
                <li class="side-item active">
                    <a href="#">
                        <i class="fa-solid fa-chart-line"></i>
                        <span class="item-description">
                            MATHFUND
                        </span>
                    </a>
                </li>
    
                <li class="side-item">
                    <a href="ranking.php">
                        <i class="fa-solid fa-ranking-star"></i>
                        <span class="item-description">
                            Ranking
                        </span>
                    </a>
                </li>
    
                <li class="side-item">
                    <a href="unidades/unidade2/unidade2-1.php">
                        <i class="fa-solid fa-bell"></i>
                        <span class="item-description">
                            Unidade 2
                        </span>
                    </a>
                </li>
    
                <li class="side-item">
                    <a href="unidades/unidade3/unidade3-1.php">
                        <i class="fa-solid fa-box"></i>
                        <span class="item-description">
                            Unidade 3
                        </span>
                    </a>
                </li>
    
                <li class="side-item">
                    <a href="unidades/unidade4/unidade4-1.php">
                    <i class="fa-brands fa-instagram fa-lg"></i>
                        <span class="item-description">
                            Unidade 4
                        </span>
                    </a>
                </li>
    
                <li class="side-item">
                    <a href="#">
                        <i class="fa-solid fa-gear"></i>
                        <span class="item-description">
                            Configurações
                        </span>
                    </a>
                </li>
            </ul>
    
            <button id="open_btn">
                <i id="open_btn_icon" class="fa-solid fa-chevron-right"></i>
            </button>
        </div>

        <div id="logout">
            <button id="logout_btn" name="sair">
                <i class="fa-solid fa-right-from-bracket" style="color: #f78411;"></i>
                <span class="item-description">
                    Logout
                </span>
            </button>
            <script src="../js/logout.js"></script>
        </div>
    </nav>

    <main>
    <div class="container">
        <a class="left" href="unidades/unidade1/unidade1-1.php">
        <div>Campanha</div>
        </a>
        
        <a class="right" href="sem_fim/teste.php">
        <div class="sem_fim/teste.php">Teste <p> seu </p> Conhecimento</div>
        </a>
    </div>
    <img class="raposo" src="../IMG/imglogo/raposahub.png" alt="escolha o que quer fazer, as fases, ou o desafio!!">
    </main>

     <!--  
    <div>
    <a href="ranking.php">RANK</a>
    </div>
    -->

    <?php

        if(isset($_REQUEST['sair'])){
            session_destroy();
        }

    ?>
   
  </body>
</html>
<script src="../js/sidebar.js"></script>