<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="./css/style.css">
    <title>Home</title>
</head>
<body>
    <section class="header">
        <a href="./home.php" class="logo">Travel.</a>
        <nav class="navbar">
            <a href="./home.php">inicio</a>
            <a href="./about.php">acerca de</a>
            <a href="./package.php">paquetes</a>
            <a href="./book.php">reservar</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <!-- Fin de la seccion HEADER -->

    <!-- Inicio de la seccion HOME -->

    <section class="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background:url(./img/home-slide-1.jpg) no-repeat">
                    <div class="content">
                        <span>explora, descubre, viaja</span>
                        <h3>Viaje alrededor del mundo</h3>
                        <a href="./package.php" class="btn">Descubre más</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(./img/home-slide-2.jpg) no-repeat">
                    <div class="content">
                        <span>explora, descubre, viaja</span>
                        <h3>Descubre nuevos lugares</h3>
                        <a href="./package.php" class="btn">Descubre más</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(./img/home-slide-3.jpg) no-repeat">
                    <div class="content">
                        <span>explora, descubre, viaja</span>
                        <h3>Haz que tu viaje valga la pena</h3>
                        <a href="./package.php" class="btn">Descubre más</a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <!-- Fin de la seccion HOME -->

    <!-- Inicio de la seccion SERVICES -->

    <section class="services">

        <h1 class="heading-title">Nuestros servicios</h1>

        <div class="box-container">

            <div class="box">
                <img src="./img/icon-1.png" alt="">
                <h3>andventure</h3>
            </div>

            <div class="box">
                <img src="./img/icon-2.png" alt="">
                <h3>guía turística</h3>
            </div>

            <div class="box">
                <img src="./img/icon-3.png" alt="">
                <h3>Excursionismo</h3>
            </div>

            <div class="box">
                <img src="./img/icon-4.png" alt="">
                <h3>fogata</h3>
            </div>

            <div class="box">
                <img src="./img/icon-5.png" alt="">
                <h3>off road</h3>
            </div>

            <div class="box">
                <img src="./img/icon-6.png" alt="">
                <h3>cámping</h3>
            </div>

        </div>


    </section>

    <!-- Fin de la seccion HEADER -->

    
    














    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>enlaces directos</h3>
                <a href="./home.php"><i class="fas fa-angle-right"></i> inicio</a>
                <a href="./about.php"><i class="fas fa-angle-right"></i> acerca de</a>
                <a href="./package.php"><i class="fas fa-angle-right"></i> paquetes</a>
                <a href="./book.php"><i class="fas fa-angle-right"></i> reserva</a>
            </div>

            <div class="box">
                <h3>enlaces adicionales</h3>
                <a href="#"><i class="fas fa-angle-right"></i> hacer preguntas</a>
                <a href="#"><i class="fas fa-angle-right"></i> acerca de nostros</a>
                <a href="#"><i class="fas fa-angle-right"></i> política de privacidad</a>
                <a href="#"><i class="fas fa-angle-right"></i> términos de uso</a>
            </div>

            <div class="box">
                <h3>información de contacto</h3>
                <a href="#"><i class="fas fa-phone"></i> +56-123-4567890</a>
                <a href="#"><i class="fas fa-phone"></i> +56-333-4444444</a>
                <a href="#"><i class="fas fa-envelope"></i> tourandtravel1@fmail.com</a>
                <a href="#"><i class="fas fa-map"></i> Nueva Esparta, Venezuela - 6316</a>    
            </div>
            
            <div class="box">
                <h3>Siguenos</h3>
                <a href="#"><i class="fab fa-facebook"></i> facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> twitter</a>
                <a href="#"><i class="fab fa-instagram"></i> instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
            </div>

        </div>

        <div class="credit"> creado por <span> Arnaldo Reyes </span> | © 2022 </div>

    </section>


    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>