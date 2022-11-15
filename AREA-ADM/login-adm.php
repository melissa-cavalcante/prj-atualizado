<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css's/login-adm.css">
    <title>Login Administrador</title>
</head>
<body>

    <section id="container">
    
    <div class="animacao">
        <article>
            <img class="foto-tela" src="../img/dashboard.svg">
        </article>
    </div>

    <div class="area-login">

        <h1>SEJA BEM-VINDO <br> ADMINISTRADOR</h1>
        <br>
        <div class="form-login">
            <h1>Faça seu Login</h1>

            <form name="login-adm" action="../AREA-ADM/valida-login-adm.php" method="post">
                    <div class="user">
                        <label for="exampleInputEmail">Login</label>
                        <input type="text" name="login" class="form-control">
                    </div>

                    <div class="senha">
                        <label for="exempleInputPassword">Senha</label>
                        <input type="password" name="senha" class="form-control">
                    </div>
                    
                    <div class="botao-2">
                        <button><a href="../parte-nova.php">Voltar</a></button>  
                        <input type="submit" value="Enviar">  
                    </div>
            </form>
        </div>
        
    </div>
    </section>
    
    
</body>
</html>