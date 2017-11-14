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
    <?php if (is_user_logged_in()): ?>
        <style type="text/css">
        </style>
    <?php endif;  ?>
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
  </head>
  <body>
        <a id="btn_mobil" onclick="view_nav();"><i class="material-icons">menu</i></a>
        <header id="left-sidebar">
              <div id="logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Discret69">
                </a>
              </div>
              <nav class="navbar navbar-inverse" id="nav">

                      <div id="navbar" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                          <li id="li_home" onclick="toogle_nav('home');" >
                            <a href="#">
                             <i class="material-icons">lock</i> <span>Login</span>
                            </a>
                            
                          </li>
                          <li id="li_hogar" onclick="toogle_nav('hogar');">
                            <a href="#">
                             <i class="material-icons">event_seat</i> <span>Hogar</span>
                            </a>
                          </li>
                          <li id="li_moda" onclick="toogle_nav('moda');">
                            <a href="#" >
                              <i class="material-icons">linked_camera</i> <span>Moda</span>
                            </a>
                          </li>
                          <li class="active">
                            <a href="#">
                              <i class="material-icons">gesture</i> <span>Ramko</span>
                            </a>
                          </li>
                          <li id="li_contacto" onclick="toogle_nav('contacto');">
                            <a href="#" >
                              <i class="material-icons">email</i> <span>Contacto</span>
                            </a>
                          </li>
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

                             <div class="sub_menu" id="sub_hogar">
                              <h2>Hogar</h2>
                               <ul>
                                 <li><a href="#">lorem inpust</a></li>
                                 <li><a href="#">lorem inpust</a></li>
                                 <li><a href="#">lorem inpust</a></li>
                                 <li><a href="#">lorem inpust</a></li>
                               </ul>
                            </div>

                            <div class="sub_menu" id="sub_moda">
                              <h2>Moda</h2>
                               <ul>
                                 <li><a href="#">lorem inpust</a></li>
                                 <li><a href="#">lorem inpust</a></li>
                                 <li><a href="#">lorem inpust</a></li>
                                 <li><a href="#">lorem inpust</a></li>
                               </ul>
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
                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                  </div>
              </nav><!-- /.navbar -->

        </header>
    
