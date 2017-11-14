<?php get_header(); ?>
			
	<section id="content">
		<div class="container-fluid">
			<section class="row">
				<article class="col-md-12 banner">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner2.jpg" alt="">
				</article>
			</section>
			<section class="row" id="baner2">
				<article class="col-md-12">
					<center>
						<a href="#" onclick="view_nav();"><i class="material-icons">public</i> Sucursales</a>
						<a href="#"> <i class="material-icons">redo</i> Servicios</a>
					</center>
				</article>
			</section>
			<section class="row" id="home">
				<article class="col-md-12">
					<h1 class="center">Conoce nuestros catalagos</h1>
					<div class="row">
						<div class="col-xs-3 img_depar">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/hogar2.jpg" alt="">
						</div>
						<div class="col-xs-3 departamento right">
							<h2>HOGAR</h2>
							<p>Línea de Productos de alta calidad para el hogar</p>
							<a href="#" class="btn btn-primary"> Productos <i class="material-icons">add_shopping_cart</i></a>
							<br><br>
							<a href="#" class="btn btn-primary">Catalagos <i class="material-icons">library_books</i></a>
						</div>
						<div class="col-xs-3 departamento">
							<h2>MODA</h2>
							<p>Toda la línea de calzados, carteras 
							y accesorios a su disposición</p>
							<a href="#" class="btn btn-primary"> <i class="material-icons">beach_access</i> Productos</a>
							<br><br>
							<a href="#" class="btn btn-primary"><i class="material-icons">library_books</i> Catalagos </a>
						</div>
						<div class="col-xs-3 img_depar">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/moda.png" alt="">
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<center class="regis">
								<p>¿Quieres conocer los precios de nuestros productos y las próximas tendencias? </p>
								<a href="#" class="btn btn-primary">Registrate</a>
							</center>
						</div>
					</div>
				</article>
			</section>
			<section class="row">
				<article class="col-md-12" id="slide">
					<div>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide1.jpg" alt="">
					</div>
					<div>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide2.jpg" alt="">
					</div>
					<div>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide3.jpg" alt="">
					</div>
				</article>
			</section>
			<section class="row" id="about">
				<article class="col-md-12">
					<h1 class="center">Factory Store Usa</h1>
					<div class="row">
						<div class="col-md-12" id="mision">
							<h1>Mision</h1>
							<p>
								Ofrecer a los clientes establecidos y potenciales un excelente servicio de importación a la medida, orientado en la búsqueda, desarrollo, producción y distribución de productos, de forma confiable, eficaz y eficiente.
							</p>
						</div>
					</div>
				</article>
			</section>

			<?php get_footer(); ?>
		</div>
	</section>
			


    