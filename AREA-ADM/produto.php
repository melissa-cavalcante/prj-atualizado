<?php include "verifica-logado-adm.php"; ?>
<?php include "../MODEL/Produto.php";
include "../DAO/ProdutoDao.php";
$produtoDao = new ProdutoDao();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>área admistrador</title>
    <!--link css do css-->
    <link rel="stylesheet" href="../css's/adm.css">
    <link rel="stylesheet" href="../css's/area-produto.css">
    <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
</head>

<body>
    <div class="side-menu">
        <header>

            <div class="brand-name">
                <img src="../img/logo2.svg" alt="">
            </div>

        </header>

        <ul>
            <a href="./adm.php">
                <li>
                    <lord-icon src="https://cdn.lordicon.com/tbfrtmlu.json" trigger="hover" colors="primary:#fff,secondary:#e74c4c" style="width:50px;height:50px"></lord-icon>&nbsp;<span>dashboard</span>
                </li>
            </a>
            <a href="./produto.php">
                <li>
                    <lord-icon src="https://cdn.lordicon.com/zdiigbly.json" trigger="hover" colors="primary:#fff,secondary:#e74c4c" style="width:50px;height:50px"></lord-icon>&nbsp;<span>produtos</span>
                </li>
            </a>
            <a href="./cadastro-categoria.php">
                <li>
                    <lord-icon src="https://cdn.lordicon.com/hursldrn.json" trigger="hover" colors="primary:#fff,secondary:#e74c4c" style="width:50px;height:50px"></lord-icon>&nbsp;<span>categorias</span>
                </li>
            </a>
            <a href="./.php">
                <li>
                    <lord-icon src="https://cdn.lordicon.com/mjmrmyzg.json" trigger="hover" colors="primary:#fff,secondary:#e74c4c" style="width:50px;height:50px"></lord-icon>&nbsp;<span>vendas</span>
                </li>
            </a>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit">
                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="hover" colors="primary:#121331,secondary:#e74c4c" style="width:20px;height:20px"></lord-icon>
                    </button>
                </div>
                <div class="user">
                    <button id="sair"><a href="logout-adm.php">Sair</a></button>
                    <div class="img-case">
                        <img src="../img/user.png" width="40px" height="40px" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="content" id="content">
            <div class="cards" id="cards">
                <div class="card" id="card">
                    <div class="box" id="box">
                        <?php

                        $pdo = Conexao::conectar();
                        $stmt = $pdo->prepare("select nomeProduto, cateegoria, precoProduto from tbproduto
                        inner join tbCategoria on tbCategoria.idcategoria = tbproduto.idcategoria
                        ");
                        $stmt->execute();

                        $query = "SELECT COUNT(idproduto) AS qtd FROM tbproduto";
                        $resultadoProduto = $pdo->query($query);
                        $qtdProduto = $resultadoProduto->fetchAll(PDO::FETCH_COLUMN);

                        ?>
                        <h1><?php echo ($qtdProduto[0]); ?></h1>
                        <h3>Produtos</h3>
                    </div>
                    <div class="icon-case">
                        <lord-icon src="https://cdn.lordicon.com/zdiigbly.json" trigger="hover" colors="primary:#e74c4c,secondary:#e74c4c" style="width:80px;height:80px"></lord-icon>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">

            <form action="cadastra-produto.php" id="formCadastro" method="post" enctype="multipart/form-data">
                <label>Produtos</label>
                <input type="text" name="produto" id="txtProduto" placeholder="Nome do produto">
                <input type="text" name="preco" id="preco" placeholder="Preço">
                <input type="file" accept="image/*" id="foto" name="foto">
                <div class="form-group col-md-4">
                    <img id="preview" src="" alt="..." class="img-thumbnail">
                </div>
                <select name="categoria" id="select" placeholder="Categoria">
                    <?php
                    $pdo = Conexao::conectar();
                    $stmt = $pdo->prepare("select idcategoria, cateegoria from tbcategoria");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_BOTH)) { ?>
                        <option value="<?php echo $row['idcategoria']; ?>"> <?php echo $row['cateegoria']; ?> </option>
                    <?php } ?>
                </select>
                <input type="submit" value="cadastrar">
            </form>

            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Pagamentos Recentes</h2>
                        <a href="#" class="btn">Ver Tudo</a>
                    </div>
                    <table>
                        <tr>
                            <td width=150px><b>Foto</b></td>
                            <td><b>Nome</b></td>
                            <td><b>Categoria</b></td>
                            <td><b>Preço</b></td>
                            <td><b>Editar</b></td>
                            <td><b>Excluir</b></td>
                        </tr>
                        <?php
                        if (isset($_GET['idProduto'])) {
                            $produtoDao->delete($_GET['idProduto']);
                        } ?>
                        <?php

                        $pdo = Conexao::conectar();
                        $stmt = $pdo->prepare("select idProduto, fotoProduto, nomeProduto, cateegoria, precoProduto from tbproduto
                        inner join tbCategoria on tbcategoria.idcategoria = tbproduto.idcategoria
                        ");

                        $stmt->execute();

                        while ($row = $stmt->fetch(PDO::FETCH_BOTH)) { ?>
                            <tr>
                                <td id="prod"> <img src="../img/<?php echo ($row['fotoProduto']); //e aqui ta puxando o nome da foto 
                                                                ?>" class="rounded" width="100%"></td>
                                <td id="prod"><?php echo ($row['nomeProduto']) ?></td>
                                <td id="prod"><?php echo ($row['cateegoria']) ?></td>
                                <td id="prod"><?php echo ($row['precoProduto']) ?></td>
                                <td id="prod"><a href="#" class="btn">Editar</a></td>
                                <td id="prod"><a href="?idProduto=<?php echo $row['idProduto']; ?>" class="btn">Excluir</a></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>

        <?php
        echo ($row);
        ?>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

        <script>
            function readImage() {
                if (this.files && this.files[0]) {
                    var file = new FileReader();
                    file.onload = function(e) {
                        document.getElementById("preview").src = e.target.result;
                    };
                    file.readAsDataURL(this.files[0]);
                }
            }
            document.getElementById("foto").addEventListener("change", readImage, false);
        </script>


    </div>
</body>

</html>