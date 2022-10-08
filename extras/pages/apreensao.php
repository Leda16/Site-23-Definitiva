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
    // print_r('qsv: '.$_POST['qsv']);
    // print_r('<br>');
    // print_r('bopm: '.$_POST['bopm']);
    // print_r('<br>');
    // print_r('data: '.$_POST['data']);
    // print_r('<br>');
    // print_r('policiais: '.$_POST['policiais']);
    // print_r('<br>');
    // print_r('itens: '.$_POST['itens']);

    include_once('../../server/config.php');
    
    $qsv = $_POST['qsv'];
    $bopm = $_POST['bopm'];
    $data = $_POST['data'];
    $policiais = $_POST['policiais'];
    $itens = $_POST['itens'];
    $link = $_POST['link'];
    $quem = $_POST['quem'];
    $quando =$_POST['quando'];

    $result = mysqli_query($conexao, "INSERT INTO apreensoes(qsv,bopm,data,policiais,itens,link,quem,quando) 
    VALUES ('$qsv','$bopm','$data','$policiais','$itens','$link','$quem','$quando')");

  }

?>

<!-- Pagina HTML5 , CSS/registro.css  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros 23 | Apreensoes</title>

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
                <a href="apreensao.php" class="is-active">Apreensao</a>
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

    <form action="apreensao.php" method="POST" class="relatorio">
        <h2 class="title">Relatorio</h2>
          <input name="qsv" type="text" placeholder="QSV" />
          <br>
          <input name="bopm" type="text" placeholder="N-BOPM" />
          <br>
          <input name="data" type="text" placeholder="Data" />
          <br>
          <input name="policiais" type="text" placeholder="Policiais" />
          <br>
          <input name="itens" type="text" placeholder="Itens" />
          <br>
          <input name="link" type="text" placeholder="Link Lightshot" />
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