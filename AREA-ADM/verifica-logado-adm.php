<?php

    session_start();
    $loginSession = $_SESSION['login'];
    $senhaSession = $_SESSION['senha'];

    if(($loginSession !='adm') || ($senhaSession != '123')){
        header("Location: login-adm.php");
    }
?>