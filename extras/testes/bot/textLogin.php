<?php
session_start();

    // print_r($_REQUEST);
    if(isset($_POST['qra']))
    {
        // Acesso
        include_once('config.php');
        $qra = $_POST['qra'];

        // print_r('qra: ' . $qra);


        $sql = "SELECT * FROM folha WHERE qra = '$qra'";
        
        $result = $conexao->query($sql);

        // print_r($sql);
        // print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            print_r('Nao existe esse registro');
            // Retorna
            header('Location: puxar.php');

        }
        else
        {
            print_r('Registro encontrado');
        
            $result = $conexao->query($sql);

            $result = mysqli_query($conexao, "SELECT * FROM folha");

            print_r($qra);
            print_r($data);
            print_r($entrada);
            print_r($saida);
            print_r($horas);


            // $webhookurl = "https://discordapp.com/api/webhooks/1026960246951911495/3s9o7mQcLPVdfJV4GaRnxxtv36AzDe7Frw-UXRQKkBkx85P1cB985WSLCabS6ZOSfQm7";

            // $timestamp = date("c", strtotime("now"));

            // $json_data = json_encode([
            //     // Message
            //     "content" => "Registro encontrado",
                
            //     // Username
            //     "username" => "Registros-23",

            //     // Avatar URL.
            //     // Uncoment to replace image set in webhook
            //     //"avatar_url" => "https://prnt.sc/ZKdIYkYNPz3m",

            //     // Text-to-speech
            //     "tts" => false,

            //     // File upload
            //     // "file" => "",

            //     // Embeds Array
            //     "embeds" => [
            //         [
            //             // Embed Title
            //             "title" => "Folha-Ponto",

            //             // Embed Type
            //             "type" => "rich",

            //             // Embed Description
            //             "description" => "",

            //             // URL of title link
            //             "url" => "",

            //             // Timestamp of embed must be formatted as ISO8601
            //             "timestamp" => $timestamp,

            //             // Embed left border color in HEX
            //             "color" => hexdec( "3366ff" ),

            //             // Campo de Relatorio
            //             "fields" => [
            //                 // Campo 1
            //                 [
            //                     "name" => "Nome",
            //                     "value" => "$qra",
            //                     "inline" => false
            //                 ],
            //                 // Campo 2
            //                 [
            //                     "name" => "Dia",
            //                     "value" => "04/10",
            //                     "inline" => true
            //                 ],
            //                 // Campo 3
            //                 [
            //                     "name" => "Entrada",
            //                     "value" => "21:00",
            //                     "inline" => true
            //                 ],
            //                 // Campo 4
            //                 [
            //                     "name" => "Saida",
            //                     "value" => "22:00",
            //                     "inline" => true
            //                 ],
            //                 // Campo 5
            //                 [
            //                     "name" => "Horas Trabalhadas",
            //                     "value" => "1h",
            //                     "inline" => true
            //                 ] 
            //             ]
            //         ]
            //     ]

            // ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );



            // $ch = curl_init( $webhookurl );
            // curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
            // curl_setopt( $ch, CURLOPT_POST, 1);
            // curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
            // curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
            // curl_setopt( $ch, CURLOPT_HEADER, 0);
            // curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

            // $response = curl_exec( $ch );
            // // If you need to debug, or find out why you can't send message uncomment line below, and execute script.
            // // echo $response;
            // curl_close( $ch );
                }

        }
        // else
        // {
        //     // Retorna
        //     header('Location: puxar.php');
        // }
?>