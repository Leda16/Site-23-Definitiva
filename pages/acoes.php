<?php
    session_start();
    // print_r($_SESSION);
    if((isset($_SESSION['upuser']) == true) and (!isset($_SESSION['uppasswd']) == true))
    {
        unset($_SESSION['upuser']);
        unset($_SESSION['uppasswd']);
        header('Location: ../index.php');
    }
    $quem = $_SESSION['upuser'];

// <!-- INPUT DE DADOS DO BANCO DE DADOS -->

  if(isset($_POST['submit']))
  {
    // print_r('qra: '.$_POST['qra']);
    // print_r('<br>');s
    // print_r('data: '.$_POST['data']);
    // print_r('<br>');
    // print_r('entrada: '.$_POST['entrada']);
    // print_r('<br>');
    // print_r('saida: '.$_POST['saida']);
    // print_r('<br>');
    // print_r('horas: '.$_POST['horas']);

    include_once('../server/config.php');

    $acao = $_POST['acao'];
    $vencedor = $_POST['vencedor'];
    $policiais = $_POST['policiais'];
    $itens = $_POST['itens'];
    $horario = $_POST['horario'];
    $quem = $_POST['quem'];
    $quando =$_POST['quando'];

    $result = mysqli_query($conexao, "INSERT INTO acoes(acao,vencedor,policiais,itens,horario,quem,quando) 
    VALUES ('$acao','$vencedor','$policiais','$itens','$horario','$quem','$quando')");

  }

?>

<!-- Pagina HTML5 , CSS/registro.css  -->

<!DOCTYPE html>
<html lang="pt-br">
<head>


    <!-- Meta Keys Inicias -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Site de registros do 23BPM FiveM, Guarulhos Infinity">
    <meta name="keywords" content="Registros 23, 23 BPM, 23, Guarulhos Infinity, 23 FiveM">
    <meta name="author" content="Artur Leda">

    <!-- CSSs Import -->
    <link rel="stylesheet" href="../styles/registro.css" />

    <!-- Dados Importantes de Cabecalho -->
    <title>Registros 23 | Acoes</title>
    <link rel="shortcut icon" href="../public/favicon.ico" type="image/x-icon">


</head>
<body>


<!-- Inicio do Code da NAVBAR -->
    <nav>
        <div class="bemvindo" style="color: white; font-weight: bold;">Bem Vindo! <strong style="color: white;"><?php echo $quem;?></strong> | Hoje ??: <?php echo date('d/m/Y');?></div>
            <div class="container">
                <h1>Registros 23</h1>
                <div class="menu">
                    <a href="home.php" >Inicio</a>
                    <a href="folha-ponto.php">Folha-Ponto</a>
                    <a href="bo-pm.php">BO-PM</a>
                    <a href="acoes.php" class="is-active">Acoes</a>
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


    <!-- Formulario POST PHP to SQL -->
    <form action="acoes.php" method="POST" class="relatorio">
        <h2 class="title">Relatorio</h2>
          <input name="acao" type="text" placeholder="Acao" />
          <br>
          <input name="vencedor" type="text" placeholder="Vencedor" />
          <br>
          <input name="policiais" type="text" placeholder="Policiais" />
          <br>
          <input name="itens" type="text" placeholder="Itens" />
          <br>
          <input name="horario" type="datetime" placeholder="Horario" />
          <br>
          <input style="display: none;" name="quem" type="datetime" value="<?php echo $quem;?>" />
          <br>
          <input style="display: none;" name="quando" type="datetime" value="<?php echo date('d/m/Y');?>" />
          <br>
          <input name="submit" type="submit" class="btn" value="Registrar" />
      </form>

      
    <!-- ScriptJS HAMBURGER -->
    <script src="../scripts/home.js"></script>

</body>
</html>