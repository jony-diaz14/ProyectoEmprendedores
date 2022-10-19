<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Travel Concierge | Sistema de Agencia de viajes</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('img/logo.svg') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <link href="{{ asset('css/variables.css') }}" rel="stylesheet">
    <!-- <link href="/css/variables-blue.css" rel="stylesheet"> -->
    <!-- <link href="/css/variables-green.css" rel="stylesheet"> -->
    <!-- <link href="/css/variables-orange.css" rel="stylesheet"> -->
    <!-- <link href="/css/variables-purple.css" rel="stylesheet"> -->
    <!-- <link href="/css/variables-red.css" rel="stylesheet"> -->
    <!-- <link href="/css/variables-pink.css" rel="stylesheet"> -->

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: HeroBiz - v2.3.1
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top" data-scrollto-offset="0">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <a href="" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="{{ asset('') }}/img/logo.png" alt=""> -->
                <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TravelConcierge<span>.</span></h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>

                    <li><a class="nav-link scrollto" href="#propuesta">Propuesta</a></li>
                    <li><a class="nav-link scrollto" href="#price">Precios</a></li>
                    <li><a class="nav-link scrollto" href="#clientes">Clientes</a></li>
                    <li><a class="nav-link scrollto" href="#contactos">Contactos</a></li>

            </nav>
            <!-- .navbar -->

            <a class="btn-getstarted scrollto" href="#">Ingreso</a>

        </div>
    </header>
    <!-- End Header -->

    <section id="hero-animated" class="hero-animated d-flex align-items-center">
        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
            <img src="{{ asset('img/hero-carousel/header.png') }}" class="img-fluid animated" style="height: 500px; width: 500px">
            <h2>Bienvenido a <span>TravelConcierge</span></h2>
            <p>Confiable, sencillo y amigable.</p>
            <p>TravelConcierge te ayuda a gestionar la información de tus clientes, de manera rápida, sencilla, con menos trabajo y más control.</p>
            <div class="d-flex">
                <a href="#about" class="btn-get-started scrollto">Ingreso</a>
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
        </div>
    </section>

    <main id="main">

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-person-fill"></i></div>
                            <h4><a href="" class="stretched-link">Gana más clientes</a></h4>
                            <p>Consigue más recompras y recomendaciones de clientes satifechos.</p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-card-checklist"></i></div>
                            <h4><a href="" class="stretched-link">Permanece organizado</a></h4>
                            <p>Mantén toda tu información y la de tus clientes ordenada y disponible.</p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-file-earmark-text"></i></div>
                            <h4><a href="" class="stretched-link">Imagen Profesional</a></h4>
                            <p>Genera muy fácilmente y de manera profesional todos los documentos.</p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-cash-coin"></i></div>
                            <h4><a href="" class="stretched-link">Trabaja inteligentemente</a></h4>
                            <p>Dedica tu tiempo a vender, olvidate de las pesadas labores administrativas.</p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                </div>

            </div>
        </section>
        <!-- End Featured Services Section -->

        <!-- ======= About Section ======= -->
        <section id="propuesta" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <p class="header-subtitle" style="color: black;">Nuesta propuesta</p>
                    <h2 class="services-title">¡Digitaliza tu agencia de viajes!</h2>
                    <p style="color: black;">Hacer uso de la tecnología, la herramienta perfecta.</p>
                </div>

                <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-5">
                        <div class="about-img">
                            <img src="{{ asset('img/services-header.svg') }}" class="img-fluid" alt="" style="height: 550px;">
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <!-- Tabs -->
                        <ul class="nav nav-pills mb-3">
                            <li><a class="nav-link active" data-bs-toggle="pill" href="#tab1">Apartado 1</a></li>
                            <li><a class="nav-link" data-bs-toggle="pill" href="#tab2">Apartado 2</a></li>
                        </ul>
                        <!-- End Tabs -->

                        <!-- Tab Content -->
                        <div class="tab-content">

                            <div class="tab-pane fade show active" id="tab1">

                                <b><p class="fst-italic">Velocidad de respuesta</p></b>
                                <p>Podrás responder cualquier requerimiento de tus clientes, de forma rápida y oportuna, sea una cotización, o algún apoyo que requieran tus clientes durante sus viajes. </p>

                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <b><h4>Imagen Profesional</h4></b>
                                </div>
                                <p>Darás una imagen de orden y control en todos los detalles de los viajes de tus clientes. Lo que generará confianza, recompra y recomendación. </p>

                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>Mejora la experiencia</h4>
                                </div>
                                <p>• La experiencia de venta de tus agentes.</p>
                                <p>• La experiencia de compra de tus clientes.</p>
                                <p>• La experiencia de viaje de tus clientes.</p>
                                <p>• La experiencia de administración de tu Agencia de Viajes.</p>

                            </div>
                            <!-- End Tab 1 Content -->

                            <div class="tab-pane fade show" id="tab2">

                                <p style="color: black; font-size: larger">Con TravelConcierge</p>
                                <h3>Ahora si vas a tener tiempo</h3>
                                <div class="d-flex align-items-center mt-4">
                                </div>
                                <p>Al digitalizar tu Agencia de Viajes. Vas a liberar gran cantidad de tiempo que ahora usas para administrar y gestionar la información, y tendrás más tiempo para prospectar, cotizar, vender y atender a tus pasajeros por
                                    salir o en tránsito.</p>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!-- End About Section -->



        <!-- ======= Pricing Section ======= -->
        <section id="price" class="pricing">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Precios</h2>
                    <p style="color: black; font-size: x-large">Suscripción mensual, sin costo de implementación, sin plazo forzoso.</p>
                    <small>*Precios en MXN para Agencias en México. Precios + IVA. Precios por Agencia hasta 5 usuarios.</small>
                </div>

                <div class="row gy-4">

                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                        <div class="pricing-item">

                            <div class="pricing-header">
                                <h3>Básica</h3>
                                <h4><sup>$</sup>0<span> / month</span></h4>
                            </div>

                            <ul>
                                <li><i class="bi bi-dot"></i> <span>Expedientes digitales</span></li>
                                <li><i class="bi bi-dot"></i> <span>Base de daros clientes</span></li>
                                <li><i class="bi bi-dot"></i> <span>Base de datos mayoritas</span></li>
                                <li><i class="bi bi-dot"></i> <span>Pasajeros en tránsito</span></li>
                                <li><i class="bi bi-dot"></i> <span>Calendario</span></li>
                                <strong>Documentos pdf:</strong>
                                <li><i class="bi bi-dot"></i> <span>Recibo de pagos clientes</span></li>
                                <li><i class="bi bi-dot"></i> <span>Balance</span></li>
                                <li><i class="bi bi-dot"></i> <span>Desglose</span></li>
                                <li><i class="bi bi-dot"></i> <span>Autorización tarjeta de crédito</span></li>
                                <strong>Reportes:</strong>
                                <li><i class="bi bi-dot"></i> <span>Pagos de clientes</span></li>
                                <li><i class="bi bi-dot"></i> <span>Pagos a mayoritas</span></li>
                                <li><i class="bi bi-dot"></i> <span>Facturas de mayoritas</span></li>
                                <li><i class="bi bi-dot"></i> <span>Ventas mensual</span></li>
                                <strong>Configuracin de metas:</strong>
                                <li><i class="bi bi-dot"></i> <span>Ventas</span></li>
                            </ul>

                            <div class="text-center mt-auto">
                                <a href="#" class="buy-btn">Comprar Ahora</a>
                            </div>

                        </div>
                    </div>
                    <!-- End Pricing Item -->

                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="400">
                        <div class="pricing-item featured">

                            <div class="pricing-header">
                                <h3>Premium</h3>
                                <h4><sup>$</sup>29<span> / month</span></h4>
                            </div>

                            <ul>
                                <b><strong style="background-color: yellow; text-align: right">20% de Descuento en pago anual.</strong></b> <br><br>
                                <p>Las mismas funciones de la suscripción Básica y además funciones de control y administración, ventas en divisas, control créditos.</p>
                                <li><i class="bi bi-dot"></i> <span>Base de datos proveedores</span></li>
                                <li><i class="bi bi-dot"></i> <span>Módulo gastos</span></li>
                                <li><i class="bi bi-dot"></i> <span>Ventas a crédito</span>
                                    <li><i class="bi bi-dot"></i> <span>Ventas en divisas</span>
                                        <li><i class="bi bi-dot"></i> <span>Control de comisiones a mayoritas</span>
                                        </li>
                                        <strong>Documentos adicionales pdf:</strong>
                                        <li><i class="bi bi-dot"></i> <span>Cotizaciones</span></li>
                                        <li><i class="bi bi-dot"></i> <span>Itinerario</span></li>
                                        <li><i class="bi bi-dot"></i> <span>Voucher de servicio</span></li>
                                        <li><i class="bi bi-dot"></i> <span>Recibo de pago ventas a crédito</span></li>
                                        <strong>Reportes adicionales</strong>
                                        <li><i class="bi bi-dot"></i> <span>Cuentas por cobrar</span></li>
                                        <li><i class="bi bi-dot"></i> <span>Cuentas por pagar</span></li>
                                        <li><i class="bi bi-dot"></i> <span>Pagos a gastos</span></li>
                                        <li><i class="bi bi-dot"></i> <span>Pagos a ventas a crédito</span></li>
                                        <li><i class="bi bi-dot"></i> <span>Ventas</span></li>
                                        <li><i class="bi bi-dot"></i> <span>Comisiones</span></li>
                                        <li><i class="bi bi-dot"></i> <span>Productividad</span></li>
                                        <li><i class="bi bi-dot"></i> <span>Estados de cuenta Bancos</span></li>
                                        <li><i class="bi bi-dot"></i> <span>Estados cuentas créditos</span></li>
                                        <strong>Configuración de metas:</strong>
                                        <li><i class="bi bi-dot"></i> <span>Ventas</span></li>
                                        <li><i class="bi bi-dot"></i> <span>Comisiones generadas</span></li>
                                        <li><i class="bi bi-dot"></i> <span>Ingresos por comisiones</span></li>

                            </ul>

                            <div class="text-center mt-auto">
                                <a href="#" class="buy-btn">Comprar Ahora</a>
                            </div>

                        </div>
                    </div>
                    <!-- End Pricing Item -->



                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="600">
                        <div class="pricing-item">

                            <div class="pricing-header">
                                <h3>Bodas y Grupos</h3>
                                <p style="color: rgb(143, 164, 234);">Precio por suscripción:</p>
                                <p style="color: white">Suscripción Básica + Grupos</p>
                                <h5 style="color: white;"><sup>$</sup>49<span> / month</span></h5>
                                <p style="color: white">Suscripción Premium + Grupos</p>
                                <h5 style="color: white;"><sup>$</sup>49<span> / month</span></h5>
                            </div>

                            <ul>
                                <b><strong style="background-color: yellow; text-align: right">20% de Descuento en pago anual.</strong></b> <br><br>
                                <li><i class="bi bi-dot"></i> <span>Expediente digital del grupo</span></li>
                                <li><i class="bi bi-dot"></i> <span>Expedientes idividuales</span></li>
                                <li><i class="bi bi-dot"></i> <span>Control venta maestra</span></li>
                                <li><i class="bi bi-dot"></i> <span>Control de hospedajes</span></li>
                                <li><i class="bi bi-dot"></i> <span>Control de pagos de clientes individual y por grupo</span></li>
                                <li><i class="bi bi-dot"></i> <span>Control de pagos a mayorista</span></li>
                                <li><i class="bi bi-dot"></i> <span>Rooming list</span></li> <br>
                                <small>* Aplica para número de grupos y tamaño de grupos dentro del rango estándar de operación.</small>
                            </ul>

                            <div class="text-center mt-auto">
                                <a href="#" class="buy-btn">Comprar Ahora</a>
                            </div>

                        </div>
                    </div>
                    <!-- End Pricing Item -->

                </div>

            </div>
        </section>
        <!-- End Pricing Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="clientes" class="testimonials">

            <div class="container" data-aos="fade-up">
                <h1 align="center" style="color: white;">Testimonios</h1><br><br>
                < <div class="testimonials-slider swiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('img/testimonials/elias.svg') }}" class="testimonial-img" alt="">
                                <h3>Raúl Elías</h3>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i> TravelConcierge es para nosotros el compañero perfecto, ese que se sabe las fechas, te recuerda los montos de cobro, pagos y saldos en tu cuenta de banco, nos da el apoyo
                                    perfecto que necesitamos no solo pata administrar el negocio si no también es nuestra arma secreta para el seguimiento y la mejor atención hacia los clientes sin duda el compañero que crece contigo a medida que lo hace
                                    tu negocio.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('img/testimonials/alma.svg') }}" class="testimonial-img" alt="">
                                <h3>Alma Ocampo</h3>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i> TravelConcierge es una herramienta muy funcional en nuestra agencia de viajes, nos apoyamos en entregar cotización con más rapidez, en dar una presentación formal y segura,
                                    llevar un control desde la primera solicitud a un cierre de ventas, dar seguimiento y organizar base de datos tanto de clientes como proveedores, sin duda un sistema de gran apoyo.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('img/testimonials/camilo.svg') }}" class="testimonial-img" alt="">
                                <h3>Camilo Barrios</h3>
                                <div class="stars ">
                                    <i class="bi bi-star-fill "></i><i class="bi bi-star-fill "></i><i class="bi bi-star-fill "></i><i class="bi bi-star-fill "></i><i class="bi bi-star-fill "></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left "></i> TravelConcierge es un sistema que nos ayudó a organizar nuestras operaciones permitiéndonos un control organizado de los clientes y su vez darle seguimiento antes y después
                                    de su viaje. Además de la excelente funcionalidad para manejar las ventas, los pagos y sobre todo con una interface gráfica muy accesible.
                                    <i class="bi bi-quote quote-icon-right "></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide ">
                            <div class="testimonial-item ">
                                <img src="{{ asset('img/testimonials/daniel.svg') }}" class="testimonial-img " alt=" ">
                                <h3>Daniel Plotnik</h3>
                                <div class="stars ">
                                    <i class="bi bi-star-fill "></i><i class="bi bi-star-fill "></i><i class="bi bi-star-fill "></i><i class="bi bi-star-fill "></i><i class="bi bi-star-fill "></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left "></i> Anteriormente utilizabamos hojas de cálculo y muchos sistemas para la administración de nuestra agencia mayorista pero una vez que encontramos la solución en TravelConcierge,
                                    agilizó todos nuestros procesos y seguimientos para enfocarnos exclusivamente en nuestros clientes, lo que más nos ha gustado es el soporte técnico muy eficaz, así como las actualizaciones constantes para mejorar aún
                                    más el sistema.
                                    <i class="bi bi-quote quote-icon-right "></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide ">
                            <div class="testimonial-item ">
                                <img src="{{ asset('img/testimonials/fabian.svg') }}" class="testimonial-img " alt=" ">
                                <h3>Fabian Valdez</h3>
                                <div class="stars ">
                                    <i class="bi bi-star-fill "></i><i class="bi bi-star-fill "></i><i class="bi bi-star-fill "></i><i class="bi bi-star-fill "></i><i class="bi bi-star-fill "></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left "></i> Definitivamente uno de los grandes aciertos al arrancar el proyecto de tarifabaja fué acercarnos a conocer TravelConcierge, el software nos ha facilitado procesos de pagos,
                                    ventas, seguimientos y cotizaciones. El siempre tener actualizaciones nos hace estar a la vanguardia frente a lo que el ramo turístico demanda. El soporte con el cual contamos de parte de la empresa nos da la confianza
                                    de saber qué siempre está alguien para ayudar en caso de cualquier eventualidad. TravelConcierge es parte fundamental en nuestro proceso operativo.

                                    <i class="bi bi-quote quote-icon-right "></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination "></div>
            </div>

            </div>
        </section>
        <!-- End Testimonials Section -->



        <!-- ======= Team Section ======= -->
        <section id="team " class="team ">
            <div class="container " data-aos="fade-up ">

                <div class="section-header ">
                    <h2>Nuestro equipo</h2>
                </div>

                <div class="row gy-5 ">

                    <div class="col-xl-4 col-md-6 d-flex " data-aos="zoom-in " data-aos-delay="200 ">
                        <div class="team-member ">
                            <div class="member-img ">
                                <img src="{{ asset('img/team/team-1.jpg') }}" class="img-fluid " alt=" ">
                            </div>
                            <div class="member-info ">
                                <div class="social ">
                                    <a href=" "><i class="bi bi-twitter "></i></a>
                                    <a href=" "><i class="bi bi-facebook "></i></a>
                                    <a href=" "><i class="bi bi-instagram "></i></a>
                                    <a href=" "><i class="bi bi-linkedin "></i></a>
                                </div>
                                <h4>Walter White</h4>
                                <span>Chief Executive Officer</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Member -->

                    <div class="col-xl-4 col-md-6 d-flex " data-aos="zoom-in " data-aos-delay="400 ">
                        <div class="team-member ">
                            <div class="member-img ">
                                <img src="{{ asset('img/team/team-2.jpg') }}" class="img-fluid " alt=" ">
                            </div>
                            <div class="member-info ">
                                <div class="social ">
                                    <a href=" "><i class="bi bi-twitter "></i></a>
                                    <a href=" "><i class="bi bi-facebook "></i></a>
                                    <a href=" "><i class="bi bi-instagram "></i></a>
                                    <a href=" "><i class="bi bi-linkedin "></i></a>
                                </div>
                                <h4>Sarah Jhonson</h4>
                                <span>Product Manager</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Member -->

                    <div class="col-xl-4 col-md-6 d-flex " data-aos="zoom-in " data-aos-delay="600 ">
                        <div class="team-member ">
                            <div class="member-img ">
                                <img src="{{ asset('img/team/team-3.jpg') }}" class="img-fluid " alt=" ">
                            </div>
                            <div class="member-info ">
                                <div class="social ">
                                    <a href=" "><i class="bi bi-twitter "></i></a>
                                    <a href=" "><i class="bi bi-facebook "></i></a>
                                    <a href=" "><i class="bi bi-instagram "></i></a>
                                    <a href=" "><i class="bi bi-linkedin "></i></a>
                                </div>
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Member -->

                </div>

            </div>
        </section>
        <!-- End Team Section -->



        <!-- ======= Contact Section ======= -->

        <section id="contactos " class="contact " style="background-color: rgb(240, 240, 240); ">
            <div class="container ">

                <div class="section-header ">
                    <h2>Contáctanos</h2>
                    <p>La mejor forma de evaluar herramienta, es usándola. Solicita tu acceso hoy sin compromiso por email o WhatsApp.</p>
                </div>

            </div>
            <!-- End Google Maps -->

            <div class="container ">

                <div class="row gy-5 gx-lg-5 ">

                    <div class="col-lg-4 ">

                        <div class="info ">
                            <h3>Get in touch</h3>
                            <p>Et id eius voluptates atque nihil voluptatem enim in tempore minima sit ad mollitia commodi minus.</p>

                            <!-- End Info Item -->

                            <div class="info-item d-flex ">
                                <i class="bi bi-envelope flex-shrink-0 "></i>
                                <div>
                                    <h4>Email:</h4>
                                    <p>info@example.com</p>
                                </div>
                            </div>
                            <!-- End Info Item -->

                            <div class="info-item d-flex ">
                                <i class="bi bi-phone flex-shrink-0 "></i>
                                <div>
                                    <h4>WhatsApp</h4>
                                    <p>+1 5589 55488 55</p>
                                </div>
                            </div>
                            <!-- End Info Item -->

                        </div>

                    </div>

                    <div class="col-lg-8 " style="background-color: rgb(240, 240, 240); ">
                        <form action="# " method="post " role="form " class="php-email-form " style="background-color: rgb(240, 240, 240); ">
                            <div class="row ">
                                <div class="col-md-6 form-group ">
                                    <input type="text " name="name " class="form-control " id="name " placeholder="Your Name " required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0 ">
                                    <input type="email " class="form-control " name="email " id="email " placeholder="Your Email " required>
                                </div>
                            </div>
                            <div class="form-group mt-3 ">
                                <input type="text " class="form-control " name="subject " id="subject " placeholder="Subject " required>
                            </div>
                            <div class="form-group mt-3 ">
                                <textarea class="form-control " name="message " placeholder="Message " required></textarea>
                            </div>
                            <div class="my-3 ">
                                <div class="loading ">Loading</div>
                                <div class="error-message "></div>
                                <div class="sent-message ">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center "><button type="submit ">Enviar</button></div>
                        </form>
                    </div>
                    <!-- End Contact Form -->

                </div>

            </div>
        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer " class="footer ">


        <div class="footer-legal text-center ">
            <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center ">

                <div class="d-flex flex-column align-items-center align-items-lg-start ">
                    <div class="copyright ">
                        &copy; Copyright <strong><span>TravelConcierge</span></strong>. All Rights Reserved
                    </div>
                    <div class="credits ">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->

                    </div>
                </div>

                <div class="social-links order-first order-lg-last mb-3 mb-lg-0 ">
                    <a href="# " class="twitter "><i class="bi bi-twitter "></i></a>
                    <a href="# " class="facebook "><i class="bi bi-facebook "></i></a>
                    <a href="# " class="instagram "><i class="bi bi-instagram "></i></a>
                    <a href="# " class="google-plus "><i class="bi bi-skype "></i></a>
                    <a href="# " class="linkedin "><i class="bi bi-linkedin "></i></a>
                </div>

            </div>

        </div>

    </footer>
    <!-- End Footer -->

    <a href="# " class="scroll-top d-flex align-items-center justify-content-center "><i class="bi bi-arrow-up-short "></i></a>

    <div id="preloader "></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('/js/main.js') }}"></script>

</body>

</html>

</html>