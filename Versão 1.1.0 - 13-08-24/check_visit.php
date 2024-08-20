
<?php
session_start();

// Se o botão de imagem "Prosseguir" foi clicado, define a sessão 'visited'
if (isset($_POST['proceed_x'])) {  // O nome do botão de imagem no formulário será 'proceed_x' e 'proceed_y' para as coordenadas de clique
    $_SESSION['visited'] = true;
    header("Location: index.php");
    exit();
}

// Verifica se a sessão 'visited' não está definida
if (!isset($_SESSION['visited'])) {
    // Redireciona para a página de boas-vindas
    header("Location: inicio.php");
    exit();
}
?>


