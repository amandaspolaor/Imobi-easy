<?php
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

    <link rel="stylesheet" href="css/login.css">
    <script src="js/index.js"></script>
    <title>Login</title>
</head>

<body>
    <nav>
        <div class="nav-wrapper" style="background-color: #e48e48; border-bottom: 7px solid rgb(41, 41, 41);">
            <a href="index.php" class="brand-logo center">IMOBI FÁCIL</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="contato.php" style="font-size: 20px;">Contato</a></li>
                <li><a href="sobre.php" style="font-size: 20px;">Sobre</a></li>
            </ul>
        </div>
    </nav>
    <h1 class="section-title">Login</h1>
    <div class="login-form">
        <div class="login-elements">
            <form action="loginusuario.php" method="POST">
                <div class="input-field">
                    <i class="material-icons prefix">person</i>
                    <input type="text" autocomplete="off" name="email">
                    <label for="email">Email</label>
                </div>
                <br>
                <div class="input-field">
                    <i class="material-icons prefix">lock</i>
                    <input type="password" autocomplete="off" name="senha">
                    <label for="pass">Password</label>
                </div>
                <br>
                <input type="submit" name="acesso" Value="Acessar"
                    style="color: black; background-color: rgb(228, 142, 72); width: 100%; height: 50px; border-radius: 5px;" />
            </form>
        </div>
    </div>
    <div class="cad-form">
        <h1 class="section-title2">Ainda não possui cadastro? Cadastre-se aqui!</h1>
        <div class="espaco">
            <a href="cadastro.php" class="waves-effect waves-light btn grey darken-3">Cadastrar</a>
        </div>

    </div>

</body>

</html>