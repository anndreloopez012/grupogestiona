<?php
//if (!isset($_SESSION["USUARIO"])) {
//  header("Location: index.php");
//  exit();
//}
require_once 'api/globalFunctions.php';
require_once 'data/conexion.php';
require_once 'api/adm_dashboard.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ADMINISTRADOR</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="lib/alertify/css/alertify.min.css">
    <!--<link rel="stylesheet" href="../../lib/alertify/css/alertify.rtl.min.css">-->
    <link rel="stylesheet" href="lib/alertify/css/themes/default.min.css">
    <!--<link rel="stylesheet" href="../../lib/alertify/css/themes/default.rtl.min.css">-->
    <link rel="stylesheet" href="lib/alertify/css/themes/semantic.min.css">
    <!--<link rel="stylesheet" href="../../lib/alertify/css/themes/semantic.rtl.min.css">-->

    <link rel="stylesheet" type="text/css" href="lib/jquery_upload/css/uploadfile-v3.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<?php require_once 'api/adm_dashboardAJAX.php'; ?>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">

            <div class="profile">
                <img src="assets/img/.jpg" alt="" class="img-fluid rounded-circle">
                <h1 class="text-light"><a href="index.html">GRUPO GESTIONA</a></h1>
            </div>

            <nav class="nav-menu">
                <ul>
                    <li class="active"><a href="#hero"><i class="bx bx-home"></i> <span>Dashboard</span></a></li>
                    <li><a href="#about"><i class="bx bx-user"></i> <span>Acerca De</span></a></li>
                    <li><a href="#services"><i class="bx bx-server"></i> Servicios</a></li>
                    <li><a href="#portfolio"><i class="bx bx-book-content"></i>Porfolio</a></li>
                    <li><a href="#empresas"><i class="bx bx-book-content"></i>Empresas</a></li>
                    <li><a href="#question"><i class="bx bx-book-content"></i>Preguntas</a></li>
                    <li><a href="#contact"><i class="bx bx-envelope"></i> Contacto</a></li>

                </ul>
            </nav><!-- .nav-menu -->
            <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
            <h1>WEB ADMINISTRATION BOARD</h1>
            <p><span class="typed" data-typed-items="CONTENIDO, IMG, FORMULARIOS, URL, REDES"></span></p>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about ">
            <div class="container">
                <form id="form_data_about" method="post">
                    <div class="section-title">
                        <h2>ACERCA DE</h2>
                    </div>
                    <div class="row">
                        <div class="input-group col-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text  alert-primary">INFORMACION GENERAL</span>
                            </div>
                            <textarea class="form-control" id="inf_general" name="inf_general" aria-label="With textarea"> <?php echo $inf_general ?></textarea><br>
                        </div>

                        <div class="col-12"><br></div>
                        <div class="input-group input-group-sm col-6">
                            <div class="input-group-prepend">
                                <a href="https://fontawesome.com/" target="_blank" class="input-group-text   alert-primary">ICO MISION</a>
                            </div>
                            <textarea class="form-control" id="ico_mision" name="ico_mision" aria-label="With textarea"> <?php echo $ico_mision ?></textarea><br>
                        </div>
                        <div class="input-group input-group-sm col-6 ">
                            <div class="input-group-prepend">
                                <span class="input-group-text  alert-primary">TITULO MISION</span>
                            </div>
                            <input type="text" class="form-control" id="title_mision" name="title_mision" value="<?php echo $title_mision ?>" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group col-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text  alert-primary">CONTENIDO MISION</span>
                            </div>
                            <textarea class="form-control" id="content_mision" name="content_mision" aria-label="With textarea"><?php echo $content_mision ?></textarea>
                        </div>

                        <div class="col-12"><br></div>
                        <div class="input-group input-group-sm col-6 ">
                            <div class="input-group-prepend">
                                <a href="https://fontawesome.com/" target="_blank" class="input-group-text  alert-primary">ICO PLAN</a>
                            </div>
                            <textarea class="form-control" id="ico_plan" name="ico_plan" aria-label="With textarea"> <?php echo $ico_plan ?></textarea><br>
                        </div>
                        <div class="input-group input-group-sm col-6 ">
                            <div class="input-group-prepend">
                                <span class="input-group-text  alert-primary">TITULO PLAN</span>
                            </div>
                            <input type="text" class="form-control" id="title_plan" name="title_plan" value="<?php echo $title_plan ?>" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group col-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text  alert-primary">CONTENIDO PLAN</span>
                            </div>
                            <textarea class="form-control" id="content_plan" name="content_plan" aria-label="With textarea"><?php echo $content_plan ?></textarea>
                        </div>

                        <div class="col-12"><br></div>
                        <div class="input-group input-group-sm col-6 ">
                            <div class="input-group-prepend">
                                <a href="https://fontawesome.com/" target="_blank" class="input-group-text  alert-primary">ICO MISION</a>
                            </div>
                            <textarea class="form-control" id="ico_vision" name="ico_vision" aria-label="With textarea"> <?php echo $ico_vision ?></textarea><br>
                        </div>
                        <div class="input-group input-group-sm col-6 ">
                            <div class="input-group-prepend">
                                <span class="input-group-text  alert-primary">TITULO MISION</span>
                            </div>
                            <input type="text" class="form-control" id="title_vision" name="title_vision" value="<?php echo $title_vision ?>" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group col-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text  alert-primary">CONTENIDO MISION</span>
                            </div>
                            <textarea class="form-control" id="content_vision" name="content_vision" aria-label="With textarea"><?php echo $content_vision ?></textarea>
                        </div>
                        <button type="button" class="btn btn-success" onclick="fntUpdateAbout()">
                            ACTUALIZAR REGISTRO
                        </button>
                    </div>

                    <br>
                </form>
            </div>
        </section><!-- End About Section -->
        <hr>
        <!-- ======= Services Section ======= -->
        <section id="services" class="services ">
            <div class="container">
                <form id="form_data_services" method="post">
                    <div class="section-title">
                        <h2>SERVICIOS</h2>
                    </div>

                    <div class="row">
                        <div class="input-group col-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text  alert-primary">INFORMACION GENERAL</span>
                            </div>
                            <input type="hidden" id="idService" name="idService" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                            <textarea class="form-control" id="content_gen" name="content_gen" aria-label="With textarea"><?php echo $content_gen ?></textarea><br>
                        </div>
                        <button type="button" class="btn btn-success" onclick="fntUpdateService()">
                            ACTUALIZAR REGISTRO
                        </button><br>
                        <div class="col-12">
                            <hr>
                        </div>
                        <div class="col-12">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_servicios" onclick="fntDibujoServi()">
                                REGISTROS INSERTADOS
                            </button>
                        </div>
                        <div class="input-group input-group-sm col-6 ">
                            <div class="input-group-prepend">
                                <a href="https://fontawesome.com/" target="_blank" class="input-group-text  alert-primary" id="inputGroup-sizing-sm">ICO</a>
                            </div>
                            <input type="text" class="form-control" id="ico" name="ico" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group input-group-sm col-6 ">
                            <div class="input-group-prepend">
                                <span class="input-group-text  alert-primary" id="inputGroup-sizing-sm">TITULO</span>
                            </div>
                            <input type="text" class="form-control" id="titulo" name="titulo" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group col-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text  alert-primary">CONTENIDO</span>
                            </div>
                            <textarea class="form-control" id="content" name="content" aria-label="With textarea"></textarea><br>
                        </div>
                        <div class="col-12"></div>
                        <button type="button" class="btn btn-success" onclick="fntInsertService()">
                            GUARDAR REGISTRO NUEVO
                        </button>


                        <div class="modal fade" id="modal_servicios" tabindex="-1" role="dialog" aria-labelledby="modal_serviciosLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title" id="modal_serviciosLabel">TABLA SERVICIOS</h2>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="dibujo_tabla_servi_" id="dibujo_tabla_servi_" name="dibujo_tabla_servi_"></div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </section><!-- End Services Section -->
        <hr>
        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">
                <form id="form_data_porfolio_btn" method="post">
                    <div class="section-title">
                        <h2>BOTONERA PORFOLIO</h2>
                    </div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_btn_porfolio" onclick="fntDibujoBtnPorfolio()">
                        REGISTROS INSERTADOS
                    </button>
                    <div class="row">
                        <div class="input-group input-group-sm col-6 ">
                            <div class="input-group-prepend">
                                <span class="input-group-text  alert-primary">TITULO</span>
                            </div>
                            <input type="hidden" id="idMenuPorfolio" name="idMenuPorfolio" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                            <input type="text" id="title" name="title" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group col-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text alert-primary" for="inputGroupSelect01">ACTIVO</span>
                            </div>
                            <select class="custom-select" id="clase" name="clase" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                <option value=" " selected>ESCOGER</option>
                                <option value="filter-active">SI</option>
                                <option value=" ">NO</option>
                            </select>
                        </div>
                        <div class="input-group input-group-sm col-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text  alert-primary">ABREVIATURA</span>
                            </div>
                            <input type="text" class="form-control" id="abreviatura" name="abreviatura" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        </div>
                    </div>
                    <button type="button" class="btn btn-success" onclick="fntInsertBtnPorfolio()">
                        GUARDAR REGISTRO NUEVO
                    </button>

                    <div class="modal fade" id="modal_btn_porfolio" tabindex="-1" role="dialog" aria-labelledby="modal_btn_porfolioLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title" id="modal_btn_porfolioLabel">TABLA BOTONERA PORFOLIO</h2>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="dibujo_tabla_btn_formulario_" id="dibujo_tabla_btn_formulario_" name="dibujo_tabla_btn_formulario_"></div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="col-12"></div>
                <form id="form_data_porfolio" method="post">
                    <div class="section-title">
                        <h2><br>
                            PORFOLIO</h2>
                    </div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_porfolio" onclick="fntDibujoPorfolio()">
                        REGISTROS INSERTADOS
                    </button>
                    <div class="row">
                        <div class="input-group input-group-sm col-6 ">
                            <div class="input-group-prepend">
                                <span class="input-group-text  alert-primary" id="inputGroup-sizing-sm">TITULO</span>
                            </div>
                            <input type="hidden" id="idPorfolio" name="idPorfolio" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                            <input type="text" id="tittle" name="tittle" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group col-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text  alert-primary">CONTENIDO</span>
                            </div>
                            <textarea class="form-control" id="content" name="content" aria-label="With textarea"></textarea>
                        </div>
                        <div class="input-group input-group-sm col-12 ">
                            <div class="input-group-prepend">
                                <span class="input-group-text  alert-primary" id="inputGroup-sizing-sm">URL</span>
                            </div>
                            <input type="text" id="url" name="url" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group col-12">
                            <div class="input-group-prepend">
                                <a href="https://es.imgbb.com/" target="_blank" class="input-group-text  alert-primary">IMG</a>
                            </div>
                            <input type="text" id="img" name="img" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group col-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text alert-primary" for="inputGroupSelect01">GRUPO</span>
                            </div>
                            <select class="custom-select" id="abreviatura" name="abreviatura" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                <option value=" " selected>ESCOGER</option>
                                <?php
                                if (is_array($arrMenuPorfolio) && (count($arrMenuPorfolio) > 0)) {
                                    reset($arrMenuPorfolio);
                                    foreach ($arrMenuPorfolio as $rTMP['key'] => $rTMP['value']) {
                                ?>
                                        <option value="<?php echo  $rTMP["value"]['abreviatura']; ?>"><?php echo  $rTMP["value"]['title']; ?></option>
                                <?php

                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="input-group input-group-sm col-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text  alert-primary" id="inputGroup-sizing-sm">COMENTARIO</span>
                            </div>
                            <input type="text" class="form-control" id="coment" name="coment" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        </div>
                    </div>
                    <button type="button" class="btn btn-success" onclick="fntInsertPorfolio()">
                        GUARDAR REGISTRO NUEVO
                    </button>
                    <div class="modal fade" id="modal_porfolio" tabindex="-1" role="dialog" aria-labelledby="modal_porfolioLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modal_porfolioLabel">TABLA PORFOLIO</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="dibujo_tabla_formulario_" id="dibujo_tabla_formulario_" name="dibujo_tabla_formulario_"></div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </section><!-- End Portfolio Section -->
        <hr>
        <!-- ======= empresas Section ======= -->
        <section id="empresas" class="empresas section-bg">
            <div class="container">
                <form id="form_data_empresas" method="post">
                    <div class="section-title">
                        <h2>EMPRESAS</h2>
                    </div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_empresas" onclick="fntDibujoEmpresas()">
                        REGISTROS INSERTADOS
                    </button>
                    <div class="row">
                        <div class="input-group input-group-sm col-6 ">
                            <div class="input-group-prepend">
                                <span class="input-group-text  alert-primary" id="inputGroup-sizing-sm">PREGUNTA</span>
                            </div>
                            <input type="hidden" id="idEmpresa" name="idEmpresa" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                            <input type="text" id="nombre" name="nombre" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group col-12">
                            <div class="input-group-prepend">
                                <a href="https://es.imgbb.com/" target="_blank" class="input-group-text  alert-primary">IMG</a>
                            </div>
                            <input type="text" id="img" name="img" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group col-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text  alert-primary">DESCRIPCION</span>
                            </div>
                            <textarea class="form-control" id="descrip" name="descrip" aria-label="With textarea"></textarea>
                        </div>
                        <div class="input-group col-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text  alert-primary">URL</span>
                            </div>
                            <textarea class="form-control" id="url" name="url" aria-label="With textarea"></textarea>
                        </div>
                    </div>
                    <button type="button" class="btn btn-success" onclick="fntInsertEmpresas()">
                        GUARDAR REGISTRO NUEVO
                    </button>


                    <div class="modal fade" id="modal_empresas" tabindex="-1" role="dialog" aria-labelledby="modal_empresasLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title" id="modal_empresasLabel">TABLA EMPRESAS</h2>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="dibujo_tabla_empresas_" id="dibujo_tabla_empresas_" name="dibujo_tabla_empresas_"></div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </section><!-- End question Section -->
        <hr>
        <!-- ======= question Section ======= -->
        <section id="question" class="question section-bg">
            <div class="container">
                <form id="form_data_question" method="post">
                    <div class="section-title">
                        <h2>PREGUNTAS FRECUENTES</h2>
                    </div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_question" onclick="fntDibujoPreguntas()">
                        REGISTROS INSERTADOS
                    </button>
                    <div class="row">
                        <div class="input-group input-group-sm col-6 ">
                            <div class="input-group-prepend">
                                <span class="input-group-text  alert-primary" id="inputGroup-sizing-sm">PREGUNTA</span>
                            </div>
                            <input type="hidden" id="idQuest" name="idQuest" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                            <input type="text" id="question" name="question" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group col-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text  alert-primary">RESPUESTA</span>
                            </div>
                            <textarea class="form-control" id="answer" name="answer" aria-label="With textarea"></textarea>
                        </div>
                    </div>
                    <button type="button" class="btn btn-success" onclick="fntInsertQuestion()">
                        GUARDAR REGISTRO NUEVO
                    </button>


                    <div class="modal fade" id="modal_question" tabindex="-1" role="dialog" aria-labelledby="modal_questionLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title" id="modal_questionLabel">TABLA PREGUNTAS</h2>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="dibujo_tabla_preguntas_" id="dibujo_tabla_preguntas_" name="dibujo_tabla_preguntas_"></div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </section><!-- End question Section -->
        <hr>
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container">
                <form id="form_data_contact" method="post">
                    <div class="section-title">
                        <h2>CONTACTO</h2>
                    </div>
                    <div class="row">
                        <div class="input-group col-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text  alert-primary">INFORMACION GENERAL</span>
                            </div>
                            <textarea class="form-control" id="descrip" name="descrip" aria-label="With textarea"><?php echo $descrip ?></textarea><br>
                        </div>

                        <div class="col-12"><br></div>
                        <div class="input-group input-group-sm col-4 ">
                            <div class="input-group-prepend">
                                <span class="input-group-text  alert-primary" id="inputGroup-sizing-sm">DIRECCION</span>
                            </div>
                            <input type="text" class="form-control" id="dress" name="dress" value="<?php echo $dress ?>" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group input-group-sm col-4 ">
                            <div class="input-group-prepend">
                                <span class="input-group-text  alert-primary" id="inputGroup-sizing-sm">CORREO</span>
                            </div>
                            <input type="text" class="form-control" id="mail" name="mail" value="<?php echo $mail ?>" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group input-group-sm col-4 ">
                            <div class="input-group-prepend">
                                <span class="input-group-text  alert-primary" id="inputGroup-sizing-sm">TELEFONO</span>
                            </div>
                            <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $telefono ?>" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group col-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text  alert-primary">MAPA</span>
                            </div>
                            <textarea class="form-control" id="ubi" name="ubi" aria-label="With textarea"><?php echo $ubi ?></textarea>
                        </div>
                        <button type="button" class="btn btn-success" onclick="fntUpdateContact()">
                            ACTUALIZAR REGISTRO
                        </button>
                </form>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>SPI</span></strong>
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">Servicios Profesionales De Informatica</a>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <div id="loading-screen" style="display:none">
        <img src="assets/img/spinning-circles.svg">
    </div>

    <section class="content col-md-12">

        <style>
            #loading-screen {
                background-color: rgba(36, 113, 163, 0.2);
                height: 100%;
                width: 100%;
                position: fixed;
                z-index: 9999;
                margin-top: 0;
                top: 0;
                text-align: center;
            }

            #loading-screen img {
                width: 200px;
                height: 200px;
                position: relative;
                margin-top: -50px;
                margin-left: -50px;
                top: 50%;
            }
        </style>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
        <script src="assets/vendor/counterup/counterup.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/venobox/venobox.min.js"></script>
        <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
        <script src="assets/vendor/typed.js/typed.min.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>


        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>

        <!-- Font Osome -->
        <script src="https://kit.fontawesome.com/ed422f1332.js" crossorigin="anonymous"></script>

        <!-- ALERTS MODAL JS -->
        <script src="lib/alertify/alertify.js"></script>
        <script src="lib/alertify/alertify.min.js"></script>
        <!-- SEC  JS -->
        <!-- UPLOAD -->
        <script type="text/javascript" src="lib/jquery_upload/js/jquery.form.js"></script>
        <script type="text/javascript" src="lib/jquery_upload/js/jquery.uploadfile.js"></script>
</body>

</html>