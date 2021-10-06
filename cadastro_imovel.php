<?php
session_start();
include "verifica_login.php";

include "conexao.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link rel="stylesheet" href="css/cadastro.css">
    <script src="js/login.js"></script>
    <title>Cadastro</title>
</head>

<body>
    <nav>
        <div class="nav-wrapper" style="background-color: #e48e48; border-bottom: 7px solid rgb(41, 41, 41);">
            <a href="painel.php" class="brand-logo center">IMOBI FÁCIL</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="login.php" style="font-size: 20px;">Sign in</a></li>
                <li><a href="contato.php" style="font-size: 20px;">Contato</a></li>
                <li><a href="sobre.php" style="font-size: 20px;">Sobre</a></li>
            </ul>
        </div>
    </nav>
    <h1 class="section-title">Cadastro</h1>
    <div class="cad-form">
        <div class="login-elements">
            <form action="" method="POST">
                <div class="input-field">
                    <i class="material-icons prefix">comment</i>
                    <input type="text" autocomplete="off" name="descricao">
                    <label for="name">Descrição</label>
                </div>
                <br>
                <div class="input-field">
                    <i class="material-icons prefix">home</i>
                    <input type="text" autocomplete="off" name="endereco">
                    <label for="endereco">Endereço</label>
                </div>
                <br>
                <div class="input-field">
                    <i class="material-icons prefix">local_phone</i>
                    <input type="tel" autocomplete="off" name="telefone">
                    <label for="tel">Telefone</label>
                </div>
                <br>
                <div class="input-field">
                    <i class="material-icons prefix">business</i>
                    <input type="text" autocomplete="off" name="tipo">
                    <label for="tipo">Tipo</label>
                </div>
                <br>
                <div class="input-field">
                    <i class="material-icons prefix">attach_money</i>
                    <input type="password" autocomplete="off" name="preco">
                    <label for="preco">Preço</label>
                </div>
                <br>
                <?php
                   $msg = false;

                   if(isset($_FILES['imagem'])){
                 
                     $extensao = strtolower(substr($_FILES['imagem']['name'], -4)); //pega a extensao do arquivo
                     $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
                     $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
                 
                     move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
                 
                     
                   }
                ?>
                <div class="input-field">
                    <i class="material-icons prefix">image</i>
                    <input type="file" required name="imagem" style="margin-left : 70px; margin-top:10px;">
                    <input type="text" name="image">
                </div>
                <br>
                <input type="submit" name="cadastro" Value="Cadastrar"
                    style="color: black; background-color: rgb(228, 142, 72); width: 100%; height: 50px; border-radius: 5px;" />
            </form>
        </div>
    </div>

</body>

</html>

<?php
if(isset($_POST['cadastro'])){

    $descricao = $_POST['descricao'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $tipo = $_POST['tipo'];
    $preco = $_POST['preco'];
    //$imagem = $_FILES['imagem'];

    $sql_imovel = "INSERT INTO imovel(descricao, endereco, telefone, tipo, preco, imagem)
    VALUES ('$descricao', '$endereco', $telefone, '$tipo', '$preco', NOW())"; 

    if($conn->query($sql_imovel))
    $msg = "Arquivo enviado com sucesso!";
    else
    $msg = "Falha ao enviar arquivo.";

    echo "<script> alert('Cadastrado com Sucesso')</script>";
    echo '<script>window.location="index.php"</script>'; 
   
} 
?>