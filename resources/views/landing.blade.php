<!doctype html>
<html>
    <!--EJGamez-->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
<title>Moat</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.min.css">
<link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
<link rel="stylesheet" type="text/css" href="css/slick.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/landing.css">
<link rel="stylesheet" type="text/css" href="css/font.css">

</head>

<body>
<div id="header-holder" class="main-header">
    <div class="bg-animation">
        <div class="graphic-show">
            <img class="fix-size" src="images/graphic1.png" alt="">
            <img class="img img1" src="images/graphic1.png" alt="">
            <img class="img img2" src="images/graphic2.png" alt="">
            <img class="img img3" src="images/graphic3.png" alt="">
        </div>
    </div>

    <nav id="nav" class="navbar navbar-default navbar-full">
        <div class="container-fluid">
            <div class="container container-nav">
                <div class="row">
                    <div class="col-md-12">
                        <div class="navbar-header">
                            <button aria-expanded="false" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <a class="navbar-brand" href="/">
                                <img src="images\moat-logo.png" width="140" >
                            </a>

                        </div>
                        <div style="height: 1px;" role="main" aria-expanded="false" class="navbar-collapse collapse" id="bs">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="/">Inicio</a></li>
                                <li><a href="#">Servicios</a></li>
                                <li><a href="#">Planes</a></li>
                                <li><a href="#">Complementos</a></li>
                                <li><a href="{{ route('nosotros') }}">Nosotros</a></li>

                                <li class="support-button-holder support-dropdown">
                                    <a class="support-button" href="/login">Iniciar Sesion</a>
                                </li>


                                <li class="support-button-holder support-dropdown">
                                    <a class="support-button" href="/soporte">Soporte</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div id="top-content" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="main-slider">
                        <div class="slide">
                            <div class="noti-holder">
                                <a href="#">
                                    <div class="noti">
                                        <span class="text">Dedicado a Instituciones Educativas.</span>
                                    </div>
                                </a>
                            </div>
                            <div class="spacer">
                            <div class="big-title">Todo en <span>un solo lugar,</span> <br>donde sea, cuando sea.</div>
                            <p>Moat es el primer paso para el desarrollo de sistemas autosuficientes dedicados a las instituciones educativas, empresas y el usuario comun.</p>
                            </div>

                            <div class="btn-holder">
                                <a href="/register" class="ybtn ybtn-header-color">Registrarse</a><a href="/nosotros" class="ybtn ybtn-white ybtn-shadow">Acerca de</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="info" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="info-text">Moat es un proyecto creado por el equipo de desarrollo llamado Syntax, nacio de la necesidad de implementar un sistema multitarea que posea todas las caracteristicas de gestion, administrativas y de comunicacion.</div>
            </div>
        </div>
    </div>
</div>

<div id="services" class="container-fluid">
    <div class="">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">Nuestro Servicios</div>
                <div class="row-subtitle">Diseñado para satisfacer de forma creativa tus necesidades.</div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 mar">
                <div class="service-box">
                    <div class="service-icon">
                        <ul>
                            <img src="images\servicios\chat.png" alt="">
                        </ul>
                    </div>
                    <div class="service-title"><a href="#">Chat</a></div>
                    <div class="service-details">
                        <ul>
                            <p>Con apartados de mensajeria publicos y privados, con la capacidad de crear grupo de clase posee conexion directa con los archivos, las tareas y el calendario.</p>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 mar">
                <div class="service-box">
                    <div class="service-icon">
                        <ul>
                            <img src="images\servicios\taller.png" alt="">
                        </ul>
                    </div>
                    <div class="service-title"><a href="#">Taller</a></div>
                    <div class="service-details">
                        <ul>
                            <p>Con apartados de mensajeria publicos y privados, con la capacidad de crear grupo de clase posee conexion directa con los archivos, las tareas y el calendario.</p>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 mar">
                <div class="service-box">
                    <div class="service-icon">
                        <ul>
                            <img src="images\servicios\api.png" alt="">
                        </ul>
                    </div>
                    <div class="service-title"><a href="#">Apis</a></div>
                    <div class="service-details">
                        <ul>
                            <p>Las Apis son herramientas de integracion que permite el uso de programas de terceros y reulitizar servicios.</p>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 mar">
                <div class="service-box">
                    <div class="service-icon">
                        <ul>
                            <img src="images\servicios\videollamada.png" alt="">
                        </ul>
                    </div>
                    <div class="service-title"><a href="#">Videollamadas</a></div>
                    <div class="service-details">
                        <ul>
                            <p>El apartado de Videollamada con la capacidad de crear sesiones con un grupo considerable.</p>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 mar">
                <div class="service-box">
                    <div class="service-icon">
                        <ul>
                            <img src="images\servicios\calendario.png" width="20%">
                        </ul>
                    </div>
                    <div class="service-title"><a href="#">Calendario</a></div>
                    <div class="service-details">
                        <ul>
                            <p>El calendario permite asignar eventos y fechas importantes.</p>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 mar">
                <div class="service-box">
                    <div class="service-icon ">
                         <ul>
                            <img src="images\servicios\archivos.png" width="40%">
                        </ul>
                    </div>

                    <div class="service-title"><a href="#">Archivos</a></div>
                    <div class="service-details">
                        <ul>
                            <p>Aplicando el termino de gestion inteligente, permite a los usuarios realizar busquedas rapidas, y descargar archivos.</p>
                        </ul>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>

<!--Planes-->
<div id="services" >
    <div class="landing-planes" id="director-planes">
        <div class="row-title">Planes</div>


    <div class="row-subtitle">Planes Destacados</div>
</div>

<div id="pricing" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pricing-box pricing-box-simple pricing-box-horizontal pricing-color1">

                    <div class="pricing-content">
                        <div class="pricing-head">
                            <div class="pricing-title">Plan Estudiantil</div>
                        </div>

                        <div class="pricing-features-holder">
                            <div class="pricing-features">
                                <ul>
                                    <P>Adecuado para Pequeños Grupos de Trabajo.</P>
                                </ul>
                            </div>
                        </div>
                        <div class="pricing-details">
                            <ul>
                                <li>10 Usuarios</li>
                                <li>3 Grupos</li>
                                <li>5GB de One Drive</li>
                                <li>Capacidad 3 Apis</li>
                            </ul>
                        </div>
                        <div class="price-link-holder">
                            <div class="pricing-price-holder">
                                <div>
                                    <div class="pricing-options">
                                        <ul class="nav nav-tabs">

                                            <li class="active"><a data-toggle="tab" href="#monthly1">Gratis</a></li>

                                        </ul>

                                        <div class="tab-content">
                                            <div class="pricing-link">
                                                <a class="ybtn" href="">Suscribirse</a></a>
                                            </div>

                                        </div>
                                        <div class="fix-space"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-12">
                <div class="pricing-box pricing-box-simple pricing-box-horizontal pricing-color2 bestbuy">
                    <div class="pricing-content">
                        <div class="pricing-head">
                            <div class="pricing-title">Plan De Centros</div>
                        </div>
                        <div class="pricing-features-holder">
                            <div class="pricing-features">
                                <ul>
                                    <p>Adecuado para Centos de Educacion publicos y Privados.</p>
                                </ul>
                            </div>
                        </div>
                        <div class="pricing-details">
                            <ul>
                                <li>1000 Usuarios</li>
                                <li>30 Grupos</li>
                                <li>Sesion Online 1080P 60FPS</li>
                                <li>1Tb de One Drive</li>
                                <li>Sin Limite de Capacidad de Apis</li>
                            </ul>
                        </div>
                        <div class="price-link-holder">
                            <div class="pricing-price-holder">
                                <div>
                                    <div class="pricing-options">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#monthly1">Mensual</a></li>
                                            <li><a data-toggle="tab" href="#annualy1">Anual</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="monthly1" class="tab-pane fade in active">
                                                <div class="pricing-price">$4.99</div>
                                                <div class="billing-cycle">Mensual</div>
                                            </div>
                                            <div id="annualy1" class="tab-pane fade">
                                                <div class="pricing-price">$49.99</div>
                                                <div class="billing-cycle">Anual</div>
                                            </div>
                                        </div>
                                        <div class="fix-space"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="pricing-link">
                                <a class="ybtn" href="#">Suscribirse</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="pricing-box pricing-box-simple pricing-box-horizontal pricing-color3">
                    <div class="pricing-content">
                        <div class="pricing-head">
                            <div class="pricing-title">Plan Institucional</div>
                        </div>
                        <div class="pricing-features-holder">
                            <div class="pricing-features">
                                <ul>
                                    <p>Adecuado para Instituciones con grandes cantidades de estudiantes, docentes y personal administrativo.</p>
                                </ul>
                            </div>
                        </div>
                        <div class="pricing-details">
                            <ul>
                                <li>Usuarios Personalizados</li>
                                <li>Sin Limite de Grupos</li>
                                <li>Nube Personalizada</li>
                                <li>Sesion UHD 60FPS</li>
                                <li>Sin Limite de Capacidad de Apis</li>
                            </ul>
                        </div>
                        <div class="price-link-holder">
                            <div class="pricing-price-holder">
                                <div>
                                    <div class="pricing-options">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#monthly1">Personalizado</a></li>
                                        </ul>



                                        <div class="fix-space"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="pricing-link">
                                <a class="ybtn" href="#">Suscribirse</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Complementos-->
<div id="features" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="row-title">Complementos</div>
                <div class="row-subtitle"></div>
            </div>
        </div>

            <div class="col-sm-12 col-md-6">
                <div id="features-holder">
                    <div class="feature-box feature-d1 show-details">
                        <div class="feature-title-holder">
                            <span class="feature-icon"><i class="htfy htfy-worldwide"></i></span>
                            <span class="feature-title">Comodo de Usar</span>
                        </div>
                        <div class="feature-details">
                            <p>El uso de complementos agiliza procesos que de otra manera necesitaria aplicaciones externas como por ejemplo edicion de codigo, fotografia, procesadores de texto entre muchos otros.</p>

                        </div>
                    </div>
                    <div class="feature-box feature-d2">
                        <div class="feature-title-holder">
                            <span class="feature-icon"><i class="htfy htfy-cogwheel"></i></span>
                            <span class="feature-title">100% Segura</span>
                        </div>
                        <div class="feature-details">
                            <p>Las Apis poseen un estandar de seguridad que permiten a los usuarios consultar, editar y enviar datos a terceron sin necesidad de compartir tus credenciales o contraseñas personales.</p>

                            <p>De manera interna cuenta con un sistema de validacion, ademas evaluan el trafico de datos.</p>
                        </div>
                    </div>
                    <div class="feature-box feature-d3">
                        <div class="feature-title-holder">
                            <span class="feature-icon"><i class="htfy htfy-location"></i></span>
                            <span class="feature-title">Instalacion Directa</span>
                        </div>
                        <div class="feature-details">
                            <p>Mediante el uso de una store, el usuario tiene la facilidad de descargar y administrar sus complementos, dependiendo de la necesidad que se presente.</p>
                        </div>
                    </div>
                    <div class="feature-box feature-d4">
                        <div class="feature-title-holder">
                            <span class="feature-icon"><i class="htfy htfy-download"></i></span>
                            <span class="feature-title">Administra tus Complementos</span>
                        </div>
                        <div class="feature-details">
                            <p>Tienes una apartado en el cual puedes ver tus  Apis instaladas, organizar y eliminar. </p>
                        </div>
                    </div>
                    <div class="feature-box feature-d5">
                        <div class="feature-title-holder">
                            <span class="feature-icon"><i class="htfy htfy-like"></i></span>
                            <span class="feature-title">Guarda tus Favoritos</span>
                        </div>
                        <div class="feature-details">
                            <p>Tienes la capacidad de poner a la Apis en un apartado de favoritos, de esta manera podras ver rapidamente los complementos que son de tu utilidad.</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row rtl-cols">
                <div class="col-sm-12 col-md-6">
                    <div id="features-links-holder">
                        <div class="icons-axis">
                            <img src="images/features-icon.png" alt="">
                        </div>
                        <div class="feature-icon-holder feature-icon-holder1 opened" data-id="1">
                            <div class="animation-holder"><div class="special-gradiant"></div></div>
                            <div class="feature-icon"><i class="htfy htfy-worldwide"></i></div>
                            <div class="feature-title">Comodo de Usar</div>
                        </div>
                        <div class="feature-icon-holder feature-icon-holder2" data-id="2">
                            <div class="animation-holder"><div class="special-gradiant"></div></div>
                            <div class="feature-icon"><i class="htfy htfy-cogwheel"></i></div>
                            <div class="feature-title">100% Segura</div>
                        </div>
                        <div class="feature-icon-holder feature-icon-holder3" data-id="3">
                            <div class="animation-holder"><div class="special-gradiant"></div></div>
                            <div class="feature-icon"><i class="htfy htfy-location"></i></div>
                            <div class="feature-title">Instalacion Rapida</div>
                        </div>
                        <div class="feature-icon-holder feature-icon-holder4" data-id="4">
                            <div class="animation-holder"><div class="special-gradiant"></div></div>
                            <div class="feature-icon"><i class="htfy htfy-download"></i></div>
                            <div class="feature-title">Administra tus Complementos</div>
                        </div>
                        <div class="feature-icon-holder feature-icon-holder5" data-id="5">
                            <div class="animation-holder"><div class="special-gradiant"></div></div>
                            <div class="feature-icon"><i class="htfy htfy-like"></i></div>
                            <div class="feature-title">Guarda tus Favoritos</div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

<!--Comunidad-->
<div id="testimonials" class="container-fluid">
    <div class="bg-color"></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="row-title">Comunidad</div>
                <div class="row-subtitle">¿Que Dicen de Nosotros?</div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div id="testimonials-slider">
                    <div>
                        <div class="details-holder">
                            <img class="photo" src="images\comunidad\person1.png" alt="">
                            <h4>Kevin Aguilar</h4>
                            <h5>Estudiante de Secuandaria @KevsA</h5>
                            <p>Si lo puedes imaginar, lo puedes programar.</p>
                        </div>
                    </div>

                    <div>
                        <div class="details-holder">
                            <img class="photo" src="images\comunidad\person2.png" alt="">
                            <h4>Steven Ulloa</h4>
                            <h5>Estudiante Universitario @StevenU22</h5>
                            <p>Me gusta, nuestro maestro la implementa de una manera facil y rapida.</p>
                        </div>
                    </div>

                    <div>
                        <div class="details-holder">
                            <img class="photo" src="images\comunidad\person3.png" alt="">
                            <h4>Jonatan Centeno</h4>
                            <h5>Estudiante Universitario @Jonc14</h5>
                            <p>Super, tengo todo en mi nube.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Nuestro Compomiso-->
<div id="more-features" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">Nuestro Compromiso</div>
                <div class="row-subtitle">Su Satisfaccion esta Garantizada.</div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <i class="htfy htfy-trophy"></i>
                    </div>
                    <div class="mfeature-title">Calidad del Servicio</div>
                    <div class="mfeature-details">Estamos con el compromiso de el garantizar la mejor experiencia al usuario.</div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <i class="htfy htfy-like"></i>
                    </div>
                    <div class="mfeature-title">Mejor Soporte</div>
                    <div class="mfeature-details">Ya que contamos con un margen casi nulo de mala asistencia tecnica garantizamos informacion precisa y clara para facilitar su actividad en la pagina.</div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <i class="htfy htfy-cogwheel"></i>
                    </div>
                    <div class="mfeature-title">Garantia de Devolucion</div>
                    <div class="mfeature-details">Es parte de nuestra politica, es por ello que si el usuario no esta conforme escucharemos cualquier queja y reclamo por parte de nuestros clientes.</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="message1" class="container-fluid message-area normal-bg">
    <div >
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="text-other-color1">Estas listo?</div>
                <div class="text-other-color2">Crea una cuenta, o contacta con nosotros</div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="buttons-holder">
                    <a href="#" class="ybtn ybtn-accent-color">Crear cuenta</a><a href="#" class="ybtn ybtn-white ybtn-shadow">Ver mas...</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="footer" class="container-fluid">
    <div>
        <div class="row">
            <div class="col-xs-6 col-sm-4 col-md-3">
                <div class="address-holder">
                    <br>
                    <br>
                    <div class="phone"><i class="fas fa-phone"></i>+505-85124755</div>
                    <div class="email"><i class="fas fa-envelope"></i> syntax252@gmail.com</div>
                    <div class="address">
                        <i class="fas fa-map-marker"></i>
                        <div>Km 136 Carretera
                            Panamericana, Esteli.
                            Esteli, Nicaragua<br>
                            <br>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2">
                <div class="footer-menu-holder">
                    <br>
                    <br>
                    <h4>Empresa</h4>
                    <ul class="footer-menu">
                        <li><a href="about.html">Inicio</a></li>
                        <li><a href="blog.html">Planes</a></li>
                        <li><a href="faq.html">Nosotros</a></li>
                        <li><a href="/Soporte">Soporte</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-3">
                <div class="footer-menu-holder">
                    <br>
                    <br>
                    <h4>Enlaces</h4>
                    <ul class="footer-menu">
                        <li><a href="webhosting.html">Auditoria</a></li>
                        <li><a href="cloudhosting.html">Reegistro</a></li>
                        <li><a href="vpshosting.html">Preguntas frecuentes</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="footer-menu-holder">
                    <br>
                    <br>
                    <h4>Others</h4>
                    <ul class="footer-menu">
                        <li><a href="#">Comunidad</a></li>
                        <li><a href="portal.html">Customer Portal</a></li>
                        <li><a href="#">Support Portal</a></li>
                        <li><a href="#">Video Tutorials</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-1 col-md-1">
                <div class="social-menu-holder">
                    <ul class="social-menu">
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-slider.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>

