<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Restaurante</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sweetalert.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="js/sweetalert.min.js"></script>

</head>

<body>
    <div id="wrapper">
        <header>
            <img src="images/logo.gif" class="logo">
            <!--  menú de navegación -->
            <nav>
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">CARTAS</a></li>
                    <li><a href="#" id="linkPromociones">PROMOCIONES</a></li>
                    <li><a href="#">CONTACTENOS</a></li>
                </ul>
            </nav>
        </header>

        <section id="main">
            <?php

            $platos = array (

                "carne.jpg",
                "ensaladas.jpg",
                "pasta.jpg",
                "pechuga.jpg",
                "pizza.jpg",
                "tarta.jpg",
            );

            $precio = array(

                "150 PESOS",
                "120 PESOS",
                "140 PESOS",
                "145 PESOS",
                "100 PESOS",
                "115 PESOS",);
            $diaActual= date("N");
            echo "<h1 style='text-align:center;color:e20018'> MENÚ DEL DIA </h1>";
            ?>

                <img style="display: block; margin: 0px auto;width:960px;" src="images/<?php echo $platos[$diaActual]?>" alt="foto del plato">
                <br>

                <?php
    echo "<h1 style='display: block; margin: 0px auto; width: 20%; text-align:center; color: #ffffff; background-color:#000000'>$precio[$diaActual]</h1>"?>;
                    <div id="servicios" class="centrar"></div>
        </section>

        <script>
            $(document).ready(function () {
                $.getJSON("json/servicios.json", function (datos) {
                    for (var i in datos.prestaciones) {
                        var tiposServicios = datos.prestaciones[i].descripcion;
                        $("#servicios").append("/" + tiposServicios + "/");
                    }
                });
            });
        </script>
        <footer>
            <p>
                &copy; 2016 <span id="destacado">Todos los derechos reservados</span>
            </p>
        </footer>
    </div>

    <script>
        function mostrarPromocion() {

            sweetAlert(' ¡Promoción!', 'Abonando en Efectivo 10% de Descuento.');


        }

        linkPromociones.addEventListener('click', mostrarPromocion);
    </script>
</body>

</html>
