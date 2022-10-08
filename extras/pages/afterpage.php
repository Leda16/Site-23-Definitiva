<?php
    session_start();
    // print_r($_SESSION);
    if((isset($_SESSION['upuser']) == true) and (!isset($_SESSION['uppasswd']) == true))
    {
        unset($_SESSION['upuser']);
        unset($_SESSION['uppasswd']);
        header('Location: ../../index.php');
    }
    $logado = $_SESSION['upuser'];
?>

<!-- Pagina HTML5 , CSS/registro.css  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros 23 | Inicio</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

<div id="preloader">
                <div class="ring"></div>
                <div class="ring"></div>
                <div class="ring"></div>
                <p><span class="auto-type"></span></p>

                <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

                <script>
                    var typed = new Typed('.auto-type', {
                    strings: ["Carregando.", "Carregando..", "Carregando..."],
                    typeSpeed: 30,
                    backSpeed: 150,
                    loop: true
                    })
                </script>
                <div style="display: none;">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Yf5d_Zx3AaI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Yf5d_Zx3AaI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Yf5d_Zx3AaI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Yf5d_Zx3AaI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Yf5d_Zx3AaI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

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
            
                        <button class="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </nav>


            </div>


    <script>

        var loader = document.getElementById("preloader");
        
        window.addEventListener("load", function(){
            loader.style.display = "none";
        })

    </script>

    <img src="../img/coronel-inicio.png" class="imgs">

    <script src="../scripts/afterpage.js"></script>
</body>
</html>