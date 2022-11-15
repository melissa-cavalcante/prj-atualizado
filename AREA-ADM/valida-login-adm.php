<?php

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if(($login == "adm") && ($senha == "123")){

        header("Location: adm.php");
        session_start();
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
    }else{
        header("Location: login-adm.php");
    }
?>