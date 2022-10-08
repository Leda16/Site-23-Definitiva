<?php
    session_start();
    // print_r($_SESSION);
    if((isset($_SESSION['upuser']) == true) and (!isset($_SESSION['uppasswd']) == true))
    {
        unset($_SESSION['upuser']);
        unset($_SESSION['uppasswd']);
        header('Location: ../../index.php');
    }
    $quem = $_SESSION['upuser'];

// <!-- INPUT DE DADOS DO BANCO DE DADOS -->
  if(isset($_POST['submit']))
  {
    // print_r('qra: '.$_POST['qra']);
    // print_r('<br>');
    // print_r('data: '.$_POST['data']);
    // print_r('<br>');
    // print_r('entrada: '.$_POST['entrada']);
    // print_r('<br>');
    // print_r('saida: '.$_POST['saida']);
    // print_r('<br>');
    // print_r('horas: '.$_POST['horas']);

    include_once('../../server/config.php');
    
    $qra = $_POST['qra'];
    $retirado = $_POST['retirado'];
    $colocado = $_POST['colocado'];
    $perdido = $_POST['perdido'];
    $quem = $_POST['quem'];
    $quando = $_POST['quando'];

    $result = mysqli_query($conexao, "INSERT INTO bau(qra,retirado,colocado,perdido,quem,quando) 
    VALUES ('$qra','$retirado','$colocado','$perdido','$quem','$quando')");

  }

?>

<!-- Pagina HTML5 , CSS/registro.css  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros 23 | Registro-Bau</title>

    <link rel="stylesheet" href="registro.css">
</head>
<body>

    <nav>
    <div class="bemvindo" style="color: white; font-weight: bold;">Bem Vindo! <strong style="color: white;"><?php echo $quem;?></strong> | Hoje é: <?php echo date('d/m/Y');?></div>
        <div class="container">
            <h1>Registros 23</h1>

            <div class="menu">
                <a href="afterpage.php" >Inicio</a>
                <a href="folha-ponto.php">Folha-Ponto</a>
                <a href="bo-pm.php">BO-PM</a>
                <a href="acoes.php">Acoes</a>
                <a href="multas.php">Multas</a>
                <a href="apreensao.php">Apreensao</a>
                <a href="veiculos.php">Veiculos</a>
                <a href="registro-bau.php" class="is-active">Registro-Bau</a>
            </div>
    
            <button class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>

    <!-- Formulario POST PHP to SQL -->

    <form action="registro-bau.php" method="POST" class="relatorio">
        <h2 class="title">Relatorio</h2>
          <input name="qra" type="text" placeholder="QRA" />
          <br>
          <input name="retirado" type="text" placeholder="Retirado" />
          <br>
          <input name="colocado" type="text" placeholder="Colocado" />
          <br>
          <input name="perdido" type="text" placeholder="Perdido" />
          <br>
          <input name="quem" type="datetime" value="<?php echo $quem;?>" />
          <br>
          <input name="quando" type="datetime" value="<?php echo date('d/m/Y');?>" />
          <br>
          <input name="submit" type="submit" class="btn" value="Registrar" />
      </form>

    <!-- ScriptJS HAMBURGER -->    
    <script src="registro.js"></script>

</body>
</html>