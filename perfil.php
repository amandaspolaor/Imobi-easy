<?php
session_start();
include "verifica_login.php";
include_once "conexao.php";

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM usuario WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);

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

    <link rel="stylesheet" href="css/perfil.css">
    <script src="js/login.js"></script>
    <title>Meu Perfil</title>
</head>

<body>
    <nav>
        <div class="nav-wrapper" style="background-color: #e48e48; border-bottom: 7px solid rgb(41, 41, 41);">
            <a href="painel.php" class="brand-logo center">IMOBI FÁCIL</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="logout.php" style="font-size: 20px;">Sign Out</a></li>
            </ul>
        </div>
    </nav>


    </div>
    <div class="cad-form2" style="left: 10%; top: 90px; border-radius: 5px;">
        <h1 class="section-title">Meu Perfil</h1>
        <img src="assets/p.png" alt="pessoa" width=500 height=250 class="img">
        <a href="painel.php"><input type="submit" name="editar" Value="Excluir Perfil"
                style="color: black; background-color: rgb(228, 142, 72); width: 100%; height: 50px; border-radius: 5px; margin-top: 250px;" /></a>
    </div>
    <div class="cad-form" style="left: 50%; top: 90px; border-radius: 5px;">
        <div class=" login-elements">
            <form action="proc_edit_usuario.php?id=" method="GET">
                <input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">
                <div class="input-field">
                    <i class="material-icons prefix">person</i>
                    <input type="text" autocomplete="off" name="nome" value="<?php echo $row_usuario['nome']; ?>">
                    <label for="name">Nome Completo</label>
                </div>
                <br>
                <div class="input-field">
                    <i class="material-icons prefix">home</i>
                    <input type="text" autocomplete="off" name="endereco"
                        value="<?php echo $row_usuario['endereco']; ?>">
                    <label for="endereco">Endereço</label>
                </div>
                <br>
                <div class="input-field">
                    <i class="material-icons prefix">local_phone</i>
                    <input type="tel" autocomplete="off" name="telefone"
                        value="<?php echo $row_usuario['telefone']; ?>">
                    <label for="tel">Telefone</label>
                </div>
                <br>
                <div class="input-field">
                    <i class="material-icons prefix">email</i>
                    <input type="text" autocomplete="off" name="email" value="<?php echo $row_usuario['email']; ?>">
                    <label for="email">Email</label>
                </div>
                <br>
                <input type="submit" name="editar" Value="Editar"
                    style="color: black; background-color: rgb(228, 142, 72); width: 100%; height: 50px; border-radius: 5px;" />
            </form>
        </div>
    </div>


</body>
<!-- Compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="index.js"></script>

</html>