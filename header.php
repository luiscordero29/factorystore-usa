<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/icons/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/carrousel/files/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/carrousel/files/owl.theme.css">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/ie-emulation-modes-warning.js"></script>
    <?php if (is_user_logged_in()): ?>
        <style type="text/css">
            header {
            	top: 32px;
            }
        </style>
    <?php endif;  ?>
</head>
<body>
    <a id="btn_mobil" onclick="view_nav();"><i class="material-icons">menu</i></a>
    <header id="left-sidebar">
    <div id="logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="<?php echo bloginfo('name'); ?>">
        </a>
    </div>
    <nav class="navbar navbar-inverse" id="nav">
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <?php echo get_mainmenu('menu-begin'); ?>
                <li id="li_home" onclick="toogle_nav('home');" >
                    <a href="#">
                        <i class="material-icons">lock</i> <span>Login</span>
                    </a>
                </li>
                <li id="li_baterias-de-cocina" onclick="toogle_nav('baterias-de-cocina');">
                    <a href="#">
                        <i class="material-icons">event_seat</i> <span>Baterias de cocina</span>
                    </a>
                </li>
                <li id="li_organizadores" onclick="toogle_nav('organizadores');">
                    <a href="#" >
                        <i class="material-icons">linked_camera</i> <span>Organizadores</span>
                    </a>
                </li>
                <li id="li_platos-desechables" onclick="toogle_nav('platos-desechables');">
                    <a href="#" >
                        <i class="material-icons">linked_camera</i> <span>Platos Desechables</span>
                    </a>
                </li>
                <?php echo get_mainmenu('menu-middle'); ?>
                <li id="li_contacto" onclick="toogle_nav('contacto');">
                    <a href="#" >
                        <i class="material-icons">email</i> <span>Contacto</span>
                    </a>
                </li>
                <?php echo get_mainmenu('menu-end'); ?>
                <!-- begin dropdown -->
                <div class="sub_menu" id="sub_home">
                    <h2>Login</h2>
                    <form action="#">
                        <input type="text" placeholder="El usuario es tu Email">
                        <input type="text" placeholder="Ingresa la contraseña">
                        <button type="submit" class="btn btn-primary">Entrar</button>
                        <center>
                            <a href="#">Registrate</a>
                        </center>
                        <center>
                            <a href="#">¿Olvidaste tu Contraseña?</a>
                        </center>
                    </form>
                </div>
                <div class="sub_menu" id="sub_baterias-de-cocina">
                    <h2>Baterias de cocina</h2>
                    <?php echo get_submenu('categories-baterias-de-cocina'); ?>
                </div>
                <div class="sub_menu" id="sub_organizadores">
                    <h2>Organizadores</h2>
                    <?php echo get_submenu('categories-organizadores'); ?>
                </div>
                <div class="sub_menu" id="sub_platos-desechables">
                    <h2>Platos Desechables</h2>
                    <?php echo get_submenu('categories-platos-desechables'); ?>
                </div>
                <div class="sub_menu" id="sub_contacto">
                    <h2>Contacto</h2>
                    <form action="#">
                        <label for="name">Nombre y Apellido</label>
                        <input type="text" id="name">

                        <label for="email">Email</label>
                        <input type="text" id="email">

                        <label for="mensaje">Cometarios</label>
                        <textarea name="" id="mensaje" ></textarea>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </ul>
        </div>
        <div class="redes">
            <?php echo get_menu_rrss('rrss'); ?>
        </div>
    </nav><!-- /.navbar -->
</header>
