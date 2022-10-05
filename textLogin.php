<?php
session_start();

    // print_r($_REQUEST);
    if(isset($_POST['login']) && !empty($_POST['upuser'] && !empty($_POST['uppasswd'])))
    {
        // Acesso
        include_once('config.php');
        $upuser = $_POST['upuser'];
        $uppasswd = $_POST['uppasswd'];

        // print_r('upuser: ' . $upuser);
        // print_r('<br');
        // print_r('uppasswd: ' . $uppasswd);

        $sql = "SELECT * FROM oficiais WHERE upuser = '$upuser' and uppasswd = '$uppasswd'";
        
        $result = $conexao->query($sql);

        print_r($sql);
        print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            // print_r('Nao existe esse usuario');
            unset($_SESSION['upuser']);
            unset($_SESSION['uppasswd']);
            header('Location: landpage.php');
        }
        else
        {
            // print_r('Existe');
            $_SESSION['upuser'] = $upuser;
            $_SESSION['uppasswd'] = $uppasswd;
            header('Location: afterpage.php');
        }
    }
    else
    {
        // Nao acessa
        header('Location: landpage.php');
    }

?>