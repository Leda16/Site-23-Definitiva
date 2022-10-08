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

    <link rel="stylesheet" href="../../css/afterpage.css">
</head>
<body>
    
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

    <img src="../img/coronel-inicio.png" class="imgs">
    <script src="../scripts/afterpage.js"></script>
</body>
</html>