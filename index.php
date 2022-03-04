<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Document</title>
</head>
<body>
    <?php 
        include "php/registro.php";
        if(isset($_POST["nombre"])){
            $db = new Registro();
            $db->setNombre($_POST["nombre"]);
            $db->setCorreo($_POST["correo"]);
            $db->setSugerencia($_POST["sugerencia"]);
            if(isset($_POST["celular"])){
                $db->setCelular($_POST["celular"]);
            }
            $db->registrar();
        }
    ?>
    <header class="header">
        <nav class="header-nav">
            <div class="nav-container container-left">
                <ul class="container-left-list">    
                    <li class="container-left__item"> <a href="#">PLatos</a></li>
                    <li class="container-left__item"> <a href="#">Menu</a></li>
                    <li class="container-left__item"> <a href="#">Promociones</a></li>
                </ul>
            </div>
            <div class="nav-container container-medium">
                <a class="container-medium__anclaje" href="#">
                    <i class="fas fa-dolly-flatbed fa-2x container-medium__logo"></i>
                </a>
            </div>
            <div class="nav-container container-right">
                <ul class="container-right-list">                  
                    <li class="container-right__item"> <a href="#">Locales</a></li>
                    <li class="container-right__item"> <a href="#nosotros">Nosotros</a></li>
                    <li class="container-right__item"> <a href="#contacto">Contacto</a></li>    
                </ul>
            </div>
        </nav>

        <div>
            <img style="width:100vw; height:100vh;" src="https://static.guiarepsol.com/gr-cms/media/filer_public/cc/ec/ccecba57-fc3a-4b94-911a-966ab4265c40/1.jpg" width="90%" alt="">
        </div>
    </header>

    <main>
        <section class="section-productos">
            <div class="container-products">
                <di class="container-product">
                    <img class="container__img" src="https://static.emol.cl/emol50/Fotos/2016/06/24/file_20160624110902.jpg" alt="">
                    <h2 class="container__name">plato</h2>
                    <h3 class="container__description">y más</h3>
                </di>
                <di class="container-product">
                    <img class="container__img" src="https://static.emol.cl/emol50/Fotos/2016/06/24/file_20160624110902.jpg" alt="">
                    <h2 class="container__name">plato</h2>
                    <h3 class="container__description">y más</h3>
                </di>
                <di class="container-product">
                    <img class="container__img" src="https://static.emol.cl/emol50/Fotos/2016/06/24/file_20160624110902.jpg" alt="">
                    <h2 class="container__name">plato</h2>
                    <h3 class="container__description">y más</h3>
                </di>
                <di class="container-product">
                    <img class="container__img" src="https://static.emol.cl/emol50/Fotos/2016/06/24/file_20160624110902.jpg" alt="">
                    <h2 class="container__name">plato</h2>
                    <h3 class="container__description">y más</h3>
                </di>
                <di class="container-product">
                    <img class="container__img" src="https://static.emol.cl/emol50/Fotos/2016/06/24/file_20160624110902.jpg" alt="">
                    <h2 class="container__name">plato</h2>
                    <h3 class="container__description">y más</h3>
                </di>
                <di class="container-product">
                    <img class="container__img" src="https://static.emol.cl/emol50/Fotos/2016/06/24/file_20160624110902.jpg" alt="">
                    <h2 class="container__name">plato</h2>
                    <h3 class="container__description">y más</h3>
                </di>
            </div>
        </section>
        
        <section class="section-services">
            <di class=""></di>
            <di class=""></di>
            <di class=""></di>
            <di class=""></di>
            <di class=""></di>
            <di class=""></di>
        </section>

        <!--seccion informacion-->
        <section class="nosotros" id="nosotros">
            <h1 class="contacto__titulo">Nosostros</h1>
            <img src="img/restaurante__logo2.png" class="nosotros__img" alt="logo_restaurante">
            <div class="nosotros__informacion">
                <h2 class="nosotros__titulo">Nuestra Historia</h2>
                <p class="nosotros__texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa assumenda magni omnis, doloremque reprehenderit sequi illum nam nostrum cupiditate. Delectus deserunt aliquam dignissimos maiores facilis, dolores optio quod veritatis rerum.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat eum, voluptatibus blanditiis in labore odio dolorem nesciunt consequatur tempore quam ut numquam aliquam quod minus porro possimus consectetur ipsam ad!
                </p>
            </div>
        </section>

        <!--seccion de contacto-->
        <section class="contacto" id="contacto">
            <h1 class="contacto__titulo">Contacto</h1>
            <div class="contacto__informacion">
                <p class="contacto__registro"><span class="contacto__subtitulo">Empresa : </span>restaurante criollo´s</p>
                <p class="contacto__registro"><span class="contacto__subtitulo">Email : </span><a href="">criollos@restobar.com</a></p>
                <p class="contacto__registro"><span class="contacto__subtitulo">Celular : </span>987654321</p>
                <p class="contacto__registro"><span class="contacto__subtitulo">Telefono : </span>(01)87654321</p>
                <p class="contacto__registro"><span class="contacto__subtitulo">RUC : </span>12345678932</p>
            </div>
            <form action="#" method="POST" class="contacto__formulario" id="formulario">
                <div class="__100">
                    <input class="formulario__input" required type="text" name="nombre" id="nombre" placeholder="Nombre o Razón social"/><label for="" class="formulario__indicaciones">Nombre o Razón social</label>    
                </div>
                <div class="__50">
                    <input class="formulario__input" required type="email" name="correo" id="correo" placeholder="Correo"><label for="" class="formulario__indicaciones">Correo</label>    
                </div>
                <div class="__50">
                    <input class="formulario__input" type="text" name="celular" id="celular" placeholder="Celular"><label for="" class="formulario__indicaciones">Celular</label>    
                </div>
                <div class="__100">
                    <textarea class="formulario__input" required wrap="soft" rows="6" name="sugerencia" id="sugerencia" placeholder="Reserva, queja o sugerencia"></textarea><label for="" class="formulario__indicaciones">Reserva, queja o sugerencia</label>    
                </div>
                <input type="submit" value="enviar" class="contacto__enviar">
            </form>
        </section>

        <section class="whatsapp">
            <a target="_blank" href="https://api.whatsapp.com/send?phone=5112198000&text="><img class="whatsapp__logo"src="img/whatsapp.png"></img></a>
        </section>
    </main>
  
    <footer>
        <div class="footer__elemento">
            <div class="footer__encabezado">
                <h2 class="footer__titulo">campestre</h2>
                <div class="footer__estado"><i class="fas fa-angle-down"></i></div>
            </div>
            <ul class="footer__subcontenido">
                <li class="footer__subelemento">mision</li>
                <li class="footer__subelemento">historia</li>
                <li class="footer__subelemento">vision</li>
                <li class="footer__subelemento">blog</li>
                <li class="footer__subelemento">valores</li>
            </ul>            
        </div>
        <div class="footer__elemento">
            <div class="footer__encabezado">
                <h2 class="footer__titulo">politicas y terminos</h2>
                <div class="footer__estado"><i class="fas fa-angle-down"></i></div>
            </div>
            <ul class="footer__subcontenido">
                <li class="footer__subelemento">terminos y condiciones</li>
                <li class="footer__subelemento">políticas y privacidad</li>
                <li class="footer__subelemento">tutorial de compra</li>
            </ul>            
        </div>
        <div class="footer__elemento">
            <div class="footer__encabezado">
                <h2 class="footer__titulo">métodos de pago</h2>
                <div class="footer__estado"><i class="fas fa-angle-down"></i></div>
            </div>
            <ul class="footer__subcontenido">
                <li class="footer__subelemento"><img src="./img/visa.png" class="footer__icono" alt=""></li>
                <li class="footer__subelemento"><img src="./img/mastercard.png" class="footer__icono" alt=""></li>
                <li class="footer__subelemento"><img src="./img/mercado-pago.png" class="footer__icono" alt=""></li>
                <li class="footer__subelemento"><img src="./img/pagoefectivo.png" class="footer__icono" alt=""></li>
            </ul>            
        </div>
    </footer>

    
    <script src="https://kit.fontawesome.com/42778bfa5e.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/9e7e6d804a.js" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
</body>
</html>