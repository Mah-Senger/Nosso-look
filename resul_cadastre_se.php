<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="resul_cadastre_se.css"> 
    <link rel="shortcut icon" href="logo_topo2.png">
    <title>Cadastre-se | Nosso Look</title>
</head>
<body>
    <div id="cabecalho">
        <div><img src="logo.jpg" alt="logo" id="logo"></div>
        <div id="opcoes">
            <a href="carrinho.html"><ion-icon name="cart-outline" title="Carrinho" class="icons"></ion-icon></a>
            <a href="entrar_cadastre-se.html"><ion-icon name="person-circle-outline"  class="icons"></ion-icon></ion-icon></a>
            <a href="n_pedido.html"><ion-icon name="cube-outline" class="icons"></ion-icon></ion-icon></a>
        </div>
    </div>

    <?php

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $cpf = $_POST["cpf"];
        $data_nascimento = $_POST["data_nascimento"];
        $sexo = $_POST["sexo"];
        $telefone = $_POST["telefone"];
        $end_rua = $_POST["end_rua"];
        $end_num = $_POST["end_num"];
        $end_cidade = $_POST["end_cidade"];
        $end_cep = $_POST["end_cep"];
        $senha = $_POST["senha"];
        $conf_senha = $_POST["conf_senha"];

        $array = array($end_rua, $end_num, $end_cidade, $end_cep);
        $endereco = implode("&", $array);

        require_once  "funcoes/conexao.php" ;
        require_once  "funcoes/funcoes_banco.php" ;

        $conexao = conexao ();
        $comando = inserir_usuario ($nome, $email, $cpf, $data_nascimento, $sexo, $telefone, $endereco, $senha);
        $resultado = mysqli_query($conexao, $comando);


        if($resultado == true ){
            echo "<h1>Seja bem-vindo!</h1><br>";
        }else{
            die ("Erro ao inserir no banco". mysqli_error($conexao));
        }
    ?>

<a href="index.php" id="voltpag">Voltar a Página Inicial</a>




    <div id="rodape">
        <div>
        <p id="novidds">Fique por dentro das novidades!!</p>
        <form action="" method="" id="form">
            <input type="text" class="nome_email" placeholder="Nome">
            <input type="email" class="nome_email" placeholder="Email">
            <button type="submit" id="botao">Enviar</button>
        </form>
    </div>
    <div id="redessociais">
        <a href="https://www.facebook.com/"><ion-icon name="logo-facebook" class="sociais"></ion-icon></a>
        <a href="https://www.instagram.com/"><ion-icon name="logo-instagram" class="sociais"></ion-icon></a>
        <a href="https://twitter.com/"><ion-icon name="logo-twitter" class="sociais"></ion-icon></a>
        <a href=""><ion-icon name="logo-whatsapp" class="sociais"></ion-icon></a>
        <a href="entraradd.html"><ion-icon name="options" class="sociais"></ion-icon></a>
    </div>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    </body>
    </html>