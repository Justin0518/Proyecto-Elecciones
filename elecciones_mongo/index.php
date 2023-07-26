<?php include "./header.php"; ?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstratpcdn.com/font-awesome/4.7.0/css/font-awesona.min.css">
    <link rel="stylesheet" href="./css/styleindex.css">
    <link rel="stylesheet" href="./css/swiper-bundle.min.css">

    <title>Document</title>
</head>
<body>
<!-- <header>
        <div class="div navbar"><a href="" class="logo">Sistema Electoral</a>
        </div>
</header>-->

<div class="slide-container swiper">
    <div class="slide-content">
        <div class="card-wrapper swiper-wrapper">
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="img/actualizar.png" alt="" class="card-img">
                    </div>
                    
                </div>

                <div class="card-content">
                    <div class="name">Actualizar</div>
                    <p class="description">Clic en el voton para actualizar tus datos personales</p>

                    <a href="./buscar.php"><button class="button">Ir</button></a>
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="img/documento.png" alt="" class="card-img">
                    </div>
                    
                </div>

                <div class="card-content">
                    <div class="name">Informes</div>
                    <p class="description">Clic en el botón para ver los informes de votación</p>

                    <a href=""><button class="button">Ir</button></a>
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="img/formulario.png" alt="" class="card-img">
                    </div>
                    
                </div>

                <div class="card-content">
                    <div class="name">Inscribir</div>
                    <p class="description">Clic en el botón para inscribir tu cédula para poder votar</p>
                    <a href=""><button class="button">Ir</button></a>
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="img/votar.png" alt="" class="card-img">
                    </div>
                    
                </div>

                <div class="card-content">
                    <div class="name">Votar</div>
                    <p class="description">Clic en el botón para votar por el candidato</p>
                    <a href="./buscar2.php"><button class="button">Ir</button></a>
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="img/cerrar.png" alt="" class="card-img">
                    </div>
                    
                </div>

                <div class="card-content">
                    <div class="name">Cerrar Sesión</div>
                    <p class="description">Clic en el botón para poder cerrar sesión en el sitio</p>
                    <a href="login.php"><button class="button">Ir</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-button-next swiper-navBtn"></div>
    <div class="swiper-button-prev swiper-navBtn"></div>
    <div class="swiper-pagination"></div>
</div>
</body>

<script src="./javascript/swiper-bundle.min.js"></script>
<script src="./javascript/script.js"></script>
</html>