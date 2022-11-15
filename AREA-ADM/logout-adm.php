<?php

    header("Location: login-adm.php");

    session_start();
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    session_destroy();
?>