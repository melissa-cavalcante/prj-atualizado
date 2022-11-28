<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link do icon na guia  -->
    <link rel="shortcut icon" href="./img/logo-icon.png" type="image/x-icon">

    <!-- Link do css -->
    <link rel="stylesheet" href="./css's/style.css">

    <link rel="stylesheet" href="./css's/cardapio.css">

    <link rel="stylesheet" href="./css's/sobre.css">

    <link rel="stylesheet" href="./css's/contato.css">


    <script defer src="https://cdn.lordicon.com/pzdvqjsp.js"></script>




    <title>Missô</title>
</head>

<body>

    <header id="home">

        <div class="logo">
            <img src="./img/logo2.svg" alt="">
        </div>



        <div class="nav">
            <ul>
                <a href="#home">
                    <lord-icon src="https://cdn.lordicon.com/gmzxduhd.json" trigger="hover" colors="primary:#33,secondary:#ff7f7c" state="hover" style="width:60px;height:60px">
                    </lord-icon>
                </a>
                <a href="#menu">
                    <lord-icon src="https://cdn.lordicon.com/zbdlroww.json" trigger="hover" colors="primary:#ff7f7c,secondary:#33" style="width:60px;height:60px">
                    </lord-icon>
                </a>
                <a href="#sobre">
                    <lord-icon src="https://cdn.lordicon.com/uukerzzv.json" trigger="hover" colors="primary:#333,secondary:#ff7f7c" style="width:60px;height:60px">
                    </lord-icon>
                </a>

                <a href="#contato">
                    <lord-icon src="https://cdn.lordicon.com/rhvddzym.json" trigger="hover" colors="primary:#333,secondary:#08a88a" style="width:70px;height:70px">
                    </lord-icon>
                </a>
                <a href="AREA-CLIENTE/login-cliente.php">
                    <lord-icon src="https://cdn.lordicon.com/dxjqoygy.json" trigger="hover" colors="primary:#333,secondary:#ff7f7c" style="width:60px;height:60px">
                    </lord-icon>
                </a>
            </ul>
        </div>
    </header>

    <div id="body">
        <main>
            <aside>
                <h2><span>Ganhe desconto</span></h2>
                <h2>no Missô!</h2>
                <p>Vamos te presentear com um CUPOM de desconto de 15% na primeira compra após realizar seu primeiro login na Missô!</p>
                <form action="">
                    <input type="text" placeholder="Digite seu nome">
                    <input type="password" placeholder="Digite sua senha">
                    <p class="form-cad">Ainda não tem uma conta? <a href="AREA-CLIENTE/cadastro-cliente.php">Cadastre-se!</a></p>
                    <input type="submit" value="Enviar">
                </form>
            </aside>

            <article>
                <img class="foto-tela" src="./img/sushi-cook.svg">
            </article>

        </main>

    </div>


    <!-- popular section starts  -->

    <!-- Card 01 -->

    <div class="titulo" id="menu">
        <center>
            <h3>Nossas <span> Promoções </span>
        </center>
    </div>

    <div class="container">
        <div class="card">
            <div class="content">
                <img src="./img/japa.jpg" alt="">
                <a class="vermais" href="#">Veja mais</a>
            </div>
        </div>

        <div class="card">
            <div class="content">
                <img src="./img/japa.jpg" alt="">
                <a class="vermais" href="#">Veja mais</a>
            </div>
        </div>

        <div class="card">
            <div class="content">
                <img src="./img/japa.jpg" alt="">
                <a class="vermais" href="#">Veja mais</a>
            </div>
        </div>

        <div class="card">
            <div class="content">
                <img src="./img/japa.jpg" alt="">
                <a class="vermais" href="#">Veja mais</a>
            </div>
        </div>
    </div>


    <!-- Card 02 -->

    <div class="container">
        <div class="card">
            <div class="content">
                <img src="./img/japa.jpg" alt="">
                <a class="vermais" href="#">Veja mais</a>
            </div>
        </div>

        <div class="card">
            <div class="content">
                <img src="./img/japa.jpg" alt="">
                <a class="vermais" href="#">Veja mais</a>
            </div>
        </div>

        <div class="card">
            <div class="content">
                <img src="./img/japa.jpg" alt="">
                <a class="vermais" href="#">Veja mais</a>
            </div>
        </div>

        <div class="card">
            <div class="content">
                <img src="./img/japa.jpg" alt="">
                <a class="vermais" href="#">Veja mais</a>
            </div>
        </div>
    </div>

    <!-- popular section ends -->

    <!-- about us section starts -->

    <div class="body2" id="sobre">
        <main class="sobre">
            <article id="foto-sobre">
                <img class="foto-sobre" src="./img/sobre-nos.svg">
            </article>

            <aside>
                <h2><span>Sobre nós</span></h2>
                <h2><span>do </span>Missô</h2>
                <p class="texto-sobre">Missô é um dos pioneiros na região de São Paulo, desde então a marca é reconhecida pela qualidade de seus produtos e por seu estilo autêntico, onde a inovação é um dos pontos fortes.
                    O esforço constante dos profissionais, que almejam proporcionar aos clientes a melhor experiência gastronômica em culinária japonesa no restaurante ou através do delivery.</p>
            </aside>

        </main>

    </div>

    <!-- about us section ends -->

    <main class="contato" id="contato">
        <aside>
            <span class="texto">Entre em contato</span>
            <h2>com Missô</h2>
            <form action="">
                <input class="inserir" type="email" placeholder="Digite seu email">
                <input class="inserir" type="text" placeholder="Deixe sua mensagem">
                <input class="submit" type="submit" value="Enviar">
            </form>
        </aside>

        <article id="foto-contato">
            <img class="foto-tela" src="./img/contato.svg">
        </article>

    </main>

    <div class="body-footer">
        <footer>
            <div class="waves">
                <div class="wave" id="wave1"></div>
                <div class="wave" id="wave2"></div>
                <div class="wave" id="wave3"></div>
                <div class="wave" id="wave4"></div>
            </div>

            <ul class="social_icon">
                <li><a href="#">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a></li>

                <li><a href="#">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a></li>

                <li><a href="#">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a></li>

                <li><a href="#">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a></li>

            </ul>
            <ul class="menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#contato">Contato</a></li>
                <li><a href="../prj-atualizado-main/AREA-ADM/adm.php">ADM</a></li>

            </ul>
            <p>©2022 All rights reserved     by Missô</p>
        </footer>
    </div>


    <!-- <button><a href="./links/login-adm.php">ADM</a></button> -->


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>