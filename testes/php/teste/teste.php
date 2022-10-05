<?php
    include_once('config.php');
    $sql1 = "SELECT * FROM acoes";
    $sql2 = "SELECT * FROM apreensoes";
    $sql3 = "SELECT * FROM bau";
    $sql4 = "SELECT * FROM bopm";
    $sql5 = "SELECT * FROM folha";
    $sql6 = "SELECT * FROM multas";
    $sql7 = "SELECT * FROM veiculos";
        
    $result1 = $conexao->query($sql1);
    $result2 = $conexao->query($sql2);
    $result3 = $conexao->query($sql3);
    $result4 = $conexao->query($sql4);
    $result5 = $conexao->query($sql5);
    $result6 = $conexao->query($sql6);
    $result7 = $conexao->query($sql7);
    


    $rows1 = $result1->num_rows;
    $rows2 = $result2->num_rows;
    $rows3 = $result3->num_rows;
    $rows4 = $result4->num_rows;
    $rows5 = $result5->num_rows;
    $rows6 = $result6->num_rows;
    $rows7 = $result7->num_rows;

    $row = mysql_fetch_assoc($result1);

    print_r($row);
    print_r('Comandos: ');
    print_r('<br>');
    print_r($sql1);
    print_r('<br>');
    print_r($sql2);
    print_r('<br>');
    print_r($sql3);
    print_r('<br>');
    print_r($sql4);
    print_r('<br>');
    print_r($sql5);
    print_r('<br>');
    print_r($sql6);
    print_r('<br>');
    print_r($sql7);
    print_r('<br>');
    print_r('<br>');
    print_r('Resultados: ');
    print_r('<br>');
    print_r('<br>');
    print_r($result1);
    print_r('<br>');
    print_r($result2);
    print_r('<br>');
    print_r($result3);
    print_r('<br>');
    print_r($result4);
    print_r('<br>');
    print_r($result5);
    print_r('<br>');
    print_r($result6);
    print_r('<br>');
    print_r($result7);
    print_r('<br>');
    print_r('<br>');
    print_r('Numero de ROWS: ');
    print_r('<br>');
    print_r($rows1);
    print_r('<br>');
    print_r($rows2);
    print_r('<br>');
    print_r($rows3);
    print_r('<br>');
    print_r($rows4);
    print_r('<br>');
    print_r($rows5);
    print_r('<br>');
    print_r($rows6);
    print_r('<br>');
    print_r($rows7);
    print_r('<br>');
    print_r('<br>');
    print_r('Lenghts: ');

?>