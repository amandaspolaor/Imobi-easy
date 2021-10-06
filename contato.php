<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>

<body>
    <nav>
        <div class="nav-wrapper" style="background-color: #e48e48; border-bottom: 7px solid rgb(41, 41, 41);">
            <a href="index.php" class="brand-logo center">IMOBI FÁCIL</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="login.php" style="font-size: 20px;">Sign in</a></li>
                <li><a href="sobre.php" style="font-size: 20px;">Sobre</a></li>
            </ul>
        </div>
    </nav>
    <div class="row section contact">
        <h1 class="section-title">Contato</h1>
        <div class="row contact-row">
            <div class="col s6">
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="subjetc" type="text" class="validate">
                                <label for="subjetc">Assunto</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="name" type="text" class="validate">
                                <label for="name">Nome</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="message" class="materialize-textarea"></textarea>
                                <label for="message">Mensagem</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col s6">
                <div>

                    <div id="map"></div>
                    <legend id="map-legend">Alegrete RS</legend>
                    <script>
                    function initMap() {
                        var e = {
                                lat: -29.751951,
                                lng: -57.088173
                            },
                            n = new google.maps.Map(document.getElementById("map"), {
                                zoom: 18,
                                center: e
                            });
                        new google.maps.Marker({
                            position: e,
                            map: n
                        })
                    }
                    </script>
                    <script async defer
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQuQMkdXNDpiVVdVVumYQ16Xrh2vr3u0o&callback=initMap">
                    </script>

                </div>

            </div>
        </div>
    </div>
</body>
<!-- Compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="index.js"></script>

</html>