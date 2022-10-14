<?php
    session_start();
    // print_r($_SESSION);
    if((isset($_SESSION['upuser']) == true) and (!isset($_SESSION['uppasswd']) == true))
    {
        unset($_SESSION['upuser']);
        unset($_SESSION['uppasswd']);
        header('Location: index.php');
    }
    $logado = $_SESSION['upuser'];
?>

<!-- Pagina HTML5 , CSS/registro.css  -->

<!DOCTYPE html>
<html lang="en">
<head>


    <!-- Meta Keys Inicias -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Site de registros do 23BPM FiveM, Guarulhos Infinity">
    <meta name="keywords" content="Registros 23, 23 BPM, 23, Guarulhos Infinity, 23 FiveM">
    <meta name="author" content="Artur Leda">

    <!-- CSSs Import -->
    <link rel="stylesheet" href="../styles/home.css" />
    <link rel="stylesheet" href="../styles/preload.css" />

    <!-- Dados Importantes de Cabecalho -->
    <title>Registros 23 | Inicio</title>
    <link rel="shortcut icon" href="../public/favicon.ico" type="image/x-icon">


</head>
<body>


    <!-- Codigo da Pagina de Preloading   -->
    <div id="preloader">
        <div class="ring"></div>
        <div class="ring"></div>
        <div class="ring"></div>
        <p>Carregando<span class="auto-type"></span></p>


        <!-- Script de Animacao do Loading -->
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

        <script>
            var typed = new Typed('.auto-type', {
            strings: [".", "..", "..."],
            typeSpeed: 30,
            backSpeed: 150,
            loop: true
            })
        </script>

        
        <!-- Import de Dados Para Atraso -->
        <div style="display: none;">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Yf5d_Zx3AaI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Yf5d_Zx3AaI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Yf5d_Zx3AaI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>


        <!-- Script de Preloading do ID = preloader -->
        <script>

        var loader = document.getElementById("preloader");

        window.addEventListener("load", function(){
            loader.style.display = "none";
        })

        </script>
    </div>
    <!-- Fechamento da Tela de Loading -->


    <!-- Inicio do Code de NAVBAR -->
    <div>
        <nav>
            <div class="container">
                <h1>Registros 23</h1>
                <div class="menu">
                    <a href="afterpage.php" class="is-active">Inicio</a>
                    <a href="folha-ponto.php">Folha-Ponto</a>
                    <a href="bo-pm.php">BO-PM</a>
                    <a href="acoes.php">Acoes</a>
                    <a href="multas.php">Multas</a>
                    <a href="apreensao.php">Apreensao</a>
                    <a href="veiculos.php">Veiculos</a>
                    <a href="registro-bau.php">Registro-Bau</a>
                </div>
            

                <!-- Criacao do Botao Hamburger -->
                <button class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </nav>
    </div>


    <!-- Import da Imagem Principal -->
    <img src="../public/home.png" class="imgs">


    <!-- Import do Script Hamburger -->
    <script src="../scripts/home.js"></script>

</body>
</html>