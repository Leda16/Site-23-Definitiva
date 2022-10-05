<!-- bloqueio de usuarios sem permissao pelo base SQL -->
<?php
    session_start();
    // print_r($_SESSION);
    if((isset($_SESSION['upuser']) == true) and (!isset($_SESSION['uppasswd']) == true))
    {
        unset($_SESSION['upuser']);
        unset($_SESSION['uppasswd']);
        header('Location: landpage.php');
    }
?>

<!-- Pagina HTML5 , CSS/registro.css  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros 23 | Administracao</title>

    <link rel="stylesheet" href="registro.css">
</head>
<body>
    
    <nav>
        <div class="container">
            <h1>administração 23</h1>

            <div class="menu">
                <a href="#" class="is-active">Administração</a>
                <a href="puxar.php">Puxar registros</a>
                <a href="sair.php">Sair</a>
            </div>
    
            <button class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>

    <!-- Formulario POST PHP to SQL -->

    <!-- ScriptJS HAMBURGER -->
    <script src="registro.js"></script>

    <!-- Foto Cel -->
    <img src="../../img/coronel-inicio.png" class="imgs">
</body>
</html>