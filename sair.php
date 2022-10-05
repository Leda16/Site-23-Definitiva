<?php
    session_start();
    unset($_SESSION['upuser']);
    unset($_SESSION['uppasswd']);
    header("Location: landpage.php");
?>