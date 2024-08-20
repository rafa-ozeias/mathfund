<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathfund</title>
    <link rel="stylesheet" href="css/iniciostyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jersey+15&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="form1">
        <div class="text">
        <p class="grande1">Bem-vindo ao</p>
        <img src="IMG/imglogo/text.png" alt="Logo MathFund">

        <br>
        <p class="grande">Nosso site foi especialmente criado para <span class="highlight">transformar o estudo da matemática</span> em uma aventura emocionante para crianças do ensino fundamental.</p>

        <br>
        <p class="grande">Explore nosso site, divirta-se e, o mais importante, <span class="highlight">aprenda muito</span>!</p>
        
        <br>
        <br>
        </div>

        
            <div id="back">
                <form method="POST" action="index.php">
                    <input type="image" id="ir" src="IMG/icons/ir.png" alt="Prosseguir" name="proceed">
                </form>    
            </div>

        <p class="pequeno1">Abraços,<br>Equipe MathFund</p>


    </div>
    <div class="form-image">
    </div>
    
    <img class="raposo" src="IMG/imglogo/raposasay.png" alt="raposa com o dedo para cima falando">
    
    
</div>
</body>
</html>

<script>
        function proceed() {
            document.cookie = "visited=true; max-age=" + 60*60*24*365 + "; path=/";
            window.location.href = "index.html";
        }
    </script>