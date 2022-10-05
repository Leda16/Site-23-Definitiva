<!-- INPUT DE DADOS DO BANCO DE DADOS -->
<?php
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

    include_once('../config.php');

    $qra = $_POST['qra'];
    $data = $_POST['data'];
    $entrada = $_POST['entrada'];
    $saida = $_POST['saida'];
    $horas = $_POST['horas'];

    $result = mysqli_query($conexao, "INSERT INTO folha(qra,data,entrada,saida,horas) 
    VALUES ('$qra','$data','$entrada','$saida','$horas')");



    //  BOT DISCORD

    $webhookurl = "https://discordapp.com/api/webhooks/1026960246951911495/3s9o7mQcLPVdfJV4GaRnxxtv36AzDe7Frw-UXRQKkBkx85P1cB985WSLCabS6ZOSfQm7";

    $timestamp = date("c", strtotime("now"));

    $json_data = json_encode([
        // Message
        "content" => "Novo Registro Adicionado ao DB",
        
        // Username
        "username" => "Registros-23",

        // Avatar URL.
        // Uncoment to replace image set in webhook
        //"avatar_url" => "https://prnt.sc/ZKdIYkYNPz3m",

        // Text-to-speech
        "tts" => false,

        // File upload
        // "file" => "",

        // Embeds Array
        "embeds" => [
            [
                // Embed Title
                "title" => "Folha-Ponto",

                // Embed Type
                "type" => "rich",

                // Embed Description
                "description" => "",

                // URL of title link
                "url" => "",

                // Timestamp of embed must be formatted as ISO8601
                "timestamp" => $timestamp,

                // Embed left border color in HEX
                "color" => hexdec( "3366ff" ),

                // Campo de Relatorio
                "fields" => [
                    // Campo 1
                    [
                        "name" => "Nome",
                        "value" => "$qra",
                        "inline" => false
                    ],
                    // Campo 2
                    [
                        "name" => "Dia",
                        "value" => "$data",
                        "inline" => true
                    ],
                    // Campo 3
                    [
                        "name" => "Entrada",
                        "value" => "$entrada",
                        "inline" => true
                    ],
                    // Campo 4
                    [
                        "name" => "Saida",
                        "value" => "$saida",
                        "inline" => true
                    ],
                    // Campo 5
                    [
                        "name" => "Horas Trabalhadas",
                        "value" => "$horas",
                        "inline" => true
                    ] 
                ]
            ]
        ]

    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );



    $ch = curl_init( $webhookurl );
    curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
    curl_setopt( $ch, CURLOPT_POST, 1);
    curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt( $ch, CURLOPT_HEADER, 0);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

    $response = curl_exec( $ch );
    // If you need to debug, or find out why you can't send message uncomment line below, and execute script.
    // echo $response;
    curl_close( $ch );
}
?>

<!-- Pagina HTML5 , CSS/registro.css  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros 23 | Folha-Ponto</title>

    <link rel="stylesheet" href="registro.css">
</head>
<body>
    
    <nav>
        <div class="container">
            <h1>Registros 23</h1>

            <div class="menu">
                <a href="../afterpage.php" >Inicio</a>
                <a href="folha-ponto.php" class="is-active">Folha-Ponto</a>
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

    <!-- Formulario POST PHP to SQL -->

    <form action="folha-ponto.php" method="POST" class="relatorio">
        <h2 class="title">Relatorio</h2>
          <input name="qra" type="text" placeholder="QRA" />
          <br>
          <input name="data" type="datetime" placeholder="Data" />
          <br>
          <input name="entrada" type="text" placeholder="Entrada" />
          <br>
          <input name="saida" type="text" placeholder="Saida" />
          <br>
          <input name="horas" type="text" placeholder="Horas trabalhadas" />
          <br>
          <input name="submit" type="submit" class="btn" value="Registrar" />
        </form>
    
    <!-- ScriptJS HAMBURGER -->
    <script src="registro.js"></script>

            <?php

            
            ?>

</body>
</html>