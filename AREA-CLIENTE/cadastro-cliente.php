<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Cliente</title>
</head>
<body>
    
    <!-- Formulario do cadastro do cliente  -->

    <form action="" method="post">

    <div class="nome">
        <label for="">Nome Completo</label>
        <input type="text" name="nome">
    </div>

    <div class="cpf">
        <label for="">CPF</label>
        <input type="text" name="cpf">
    </div>

    <div class="email">
        <label for="">Email</label>
        <input type="email" name="email" id="email">
    </div>

     <div class="endereco">
         
        <div class="cep">
            <label for="">cep</label>
            <input type="text" name="cep">
         </div>

         <div class="logradouro">
            <label for="">Logradouro</label>
            <input type="text" name="logradouro">
         </div>
        
         <div class="numLog">
             <label for="">Numero</label>
             <input type="text" name="numero">
         </div>

         <div class="comp">
            <label for="">Complemento</label>
            <input type="text" name="comp">
         </div>

         <div class="bairro">
             <label for="">Bairro</label>
             <input type="text" name="bairro">
         </div>

         <div class="cidade">
             <label for="">Cidade</label>
             <input type="text" name="cidade">
         </div>

         <div class="uf">
             <label for="">UF</label>
             <input type="text" name="uf">
         </div>

     </div>

     <div class="senha">
        <label for="">Senha</label>
        <input type="password" name="senha" id="senha">
    </div>

    <div class="cadastrar">
        <input type="submit" value="Cadastrar">
    </div>
    </form>
</body>
</html>