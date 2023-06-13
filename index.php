<?php
	//require_once("config/conexion.php");
	//require_once("models/Comunicado.php");
	//$comunicado = new Comunicado();
	//$comx = $comunicado->get_comunicado();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require_once("head.php");?>

		<title>Inicio | ReformasMR</title>

		<!-- LINK Y SCRIPT LEAFLET  INICIO-->
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" />
		<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>
		<!-- LINK Y SCRIPT LEAFLET  FINAL-->
   		
		   <style>
				video {
				width: 100%;
				height: auto;
				}
			</style>


	</head>

			
	<body>


	<!--=====INICIO MODAL======-->
					
		<?php
			//for ($i = 0; $i < sizeof($comx); $i++) {
		?>
		<!--
			 <div class="modal fade" id="myModal<?php echo $comx[$i]["id_com"] ?>" role="dialog">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>					
						</div>
						<div class="modal-body">
							<div><img src="<?php echo $comx[$i]["ruta_com"] ?>" alt="" style="margin: auto;"></div>					
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
						</div>
					</div>
				</div>
			</div>
			-->
		<?php
			//}
		?>

	<!--=====FIN MODAL======-->


		<div class="main-page-wrapper">
			<div id="loader-wrapper">
				<div id="loader"></div>
			</div>

			<?php require_once("header.php");?>

			<!--=====BANNER======-->
			<div id="theme-main-banner" class="banner-one">
				<div data-src="public/images/home/reforma2inv.jpg">
					<div class="camera_caption">
						<div class="container">
							<p class="wow fadeInUp animated">Somos ReformasMR, un socio en quien confiar.</p>
							<h1 class="wow fadeInUp animated" data-wow-delay="0.2s">Transformamos espacios para crear hogares únicos <br>y funcionales.</h1>
							<a href="contactenos" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s">Contáctenos</a>
						</div>
					</div>
				</div>
				<div data-src="public/images/home/pinturas.jpg">
					<div class="camera_caption">
						<div class="container">
							<p class="wow fadeInUp animated">Reformar un piso tiene muchas ventajas</p>
							<h1 class="wow fadeInUp animated" data-wow-delay="0.2s">pero todas se reducen a una sola<br>mereces vivir mejor.</h1>
							<a href="contactenos" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s">Contáctenos</a>
						</div>
					</div>
				</div>
				<div data-src="public/images/home/slide-3.jpg">
					<div class="camera_caption">
						<div class="container">
							<p class="wow fadeInUp animated">Piensa en reformas piensa en nosotros	.</p>
							<h1 class="wow fadeInUp animated" data-wow-delay="0.2s">Integridad, Excelencia y Entusiasmo.</h1>
							<a href="contactenos" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s">Contáctenos</a>
						</div>
					</div>
				</div>
			</div>
			<!--=====FIN BANNER======-->

			<!--=====CARRUSEL======-->
			<div class="top-feature section-spacing">
				<div class="top-features-slide">

				</div> <!-- /.top-features-slide -->
			</div>
			<!--=====FIN CARRUSEL======-->

			<!--=====NUESTRA COMPAÑIA======-->
			<div class="about-compnay section-spacing">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-12"><img src="public/images/home/imgcocina.jpg" alt=""></div>
						<div class="col-lg-6 col-12">
							<div class="text">
								<div class="theme-title-one">
									<h2>Sobre Nosotros</h2>
									<p>Nuestra misión es brindar soluciones de reformas de alta calidad a nuestros clientes, asegurando su satisfacción y bienestar en cada proyecto. Nos comprometemos a trabajar con profesionalismo, responsabilidad y compromiso en cada trabajo que realizamos.</p>
									<p>Nosotros queremos ser la empresa líder en el sector de reformas, reconocidos por nuestro compromiso y profesionalismo en cada trabajo que realizamos. Buscamos consolidarnos como la mejor opción en el mercado, manteniendo altos estándares de calidad en todos nuestros proyectos y manteniendo una excelente relación con nuestros clientes</p>
								</div> <!-- /.theme-title-one -->
							</div> <!-- /.text -->
						</div> <!-- /.col- -->
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div>
			<!--=====FIN NUESTRA COMPAÑIA======-->


			<!--=====INICIO VIDEO TAM======-->
			<!--
			<div class="section-spacing">
				<video autoplay muted loop width="10">
						<source src="public/videos/TRANSTOTAL_12segundos_2.mp4" type="video/mp4">
						Your browser does not support HTML5 video.
					</video>
			</div>
			-->
			<!--=====FIN VIDEO TAM======-->
			

			<!--=====OTROS SERVICIO======-->
			<div class="service-style-one section-spacing">
				<div class="container">
					<div class="theme-title-one">
						<h2>Servicios</h2>
						<p>Brindamos los siguientes servicios: </p>
					</div> <!-- /.theme-title-one -->
					<div class="wrapper">
						<div class="row">
							<div class="col-xl-4 col-md-6 col-12">
								<div class="single-service">
									<div class="img-box"><img src="public/images/home/3.jpg"></div>
									<div class="text">
										<h5><a>Cotizaciones de Reformas y Presupuestos.</a></h5>
										<p></p>
										<!--<a href="servicios" class="read-more"> Leer más <i class="fa fa-angle-right" aria-hidden="true"></i></a>
									-->
									</div> <!-- /.text -->
								</div> <!-- /.single-service -->
							</div> <!-- /.col- -->
							<div class="col-xl-4 col-md-6 col-12">
								<div class="single-service">
									<div class="img-box"><img src="public/images/home/4.jpg"></div>
									<div class="text">
										<h5><a>Reformas Integrales en todo Madrid .   	</a></h5>
										<p></p>
									</div> <!-- /.text -->
								</div> <!-- /.single-service -->
							</div> <!-- /.col- -->
							<div class="col-xl-4 col-md-6 col-12">
								<div class="single-service">
									<div class="img-box"><img src="public/images/home/5.jpg" alt=""></div>
									<div class="text">
										<h5><a>Planificacion de Obra y Solicitud de permisos.</a></h5>
										<p></p>
									</div> <!-- /.text -->
								</div> <!-- /.single-service -->
							</div> <!-- /.col- -->
							<div class="col-xl-4 col-md-6 col-12">
								<div class="single-service">
									<div class="img-box"><img src="public/images/home/6.jpg" alt=""></div>
									<div class="text">
										<h5><a>Recojo de Escombros y Materiales de Contruccion.</a></h5>
										<p></p>
									</div> <!-- /.text -->
								</div> <!-- /.single-service -->
							</div> <!-- /.col- -->
							<div class="col-xl-4 col-md-6 col-12">
								<div class="single-service">
									<div class="img-box"><img src="public/images/home/7.jpg" alt=""></div>
									<div class="text">
										<h5><a>Reformas de Baños y Cocinas.    </a></h5>
										<p></p>
									</div> <!-- /.text -->
								</div> <!-- /.single-service -->
							</div> <!-- /.col- -->
							<div class="col-xl-4 col-md-6 col-12">
								<div class="single-service">
									<div class="img-box"><img src="public/images/home/8.jpg" alt=""></div>
									<div class="text">
										<h5><a>Pago de Materiales de Reforma.</a></h5>
										<p></p>
									</div> <!-- /.text -->
								</div> <!-- /.single-service -->
							</div> <!-- /.col- -->
						</div> <!-- /.row -->
					</div> <!-- /.wrapper -->
					<div class="contact-text">
						<h4>También puede enviarnos un correo electrónico y nos pondremos en contacto en breve, o llámenos.</h4>
						<h5><a href="mailto:reformasmr23@gmail.com">reformasmr23@gmail.com</a>  (o)  <a href="tel:722217829">(+34 ) 722 21 78 29</a></h5>
					</div>
				</div> <!-- /.container -->
			</div>
			<!--=====FIN OTROS SERVICIO======-->

			<!--=====SERVICIO======-->
			<div class="feature-banner section-spacing">
				<div class="opacity">					
					<div class="container">					
						<h2>Brindamos servicios de alta calidad y soluciones innovadoras para el crecimiento confiable</h2>
						<!-- 
							<a href="servicios" class="theme-button-one">Servicios</a>
						-->
						</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div>
			<!--=====FIN SERVICIO======-->

			<!--=====EXITO======-->
			<div class="theme-counter section-spacing">
				<div class="container">
					<div class="bg">
						<h6>ÉXITO DE LA COMPAÑÍA</h6>
						<h2>Algunos datos sobre nuestro negocio:</h2>

						<div class="cunter-wrapper">
							<div class="row">
								<div class="col-md-3 col-6">
									<div class="single-counter-box">
				        				<div class="number"><span class="timer" data-from="0" data-to="10" data-speed="1200" data-refresh-interval="5">0</span>+</div>
				        				<p>Años de excelencia</p>
				        			</div> <!-- /.single-counter-box -->
								</div>  <!-- /.col- -->
								<div class="col-md-3 col-6">
									<div class="single-counter-box">
				        				<div class="number"><span class="timer" data-from="0" data-to="100" data-speed="1200" data-refresh-interval="5">0</span>%</div>
				        				<p>Satisfacción del cliente</p>
				        			</div> <!-- /.single-counter-box -->
								</div>  <!-- /.col- -->
								<div class="col-md-3 col-6">
									<div class="single-counter-box">
				        				<div class="number"><span class="timer" data-from="0" data-to="53" data-speed="1200" data-refresh-interval="5">0</span>k</div>
				        				<p>Casos Completados</p>
				        			</div> <!-- /.single-counter-box -->
								</div>  <!-- /.col- -->
								<div class="col-md-3 col-6">
									<div class="single-counter-box">
				        				<div class="number"><span class="timer" data-from="0" data-to="24" data-speed="1200" data-refresh-interval="5">0</span></div>
				        				<p>Consultas</p>
				        			</div> <!-- /.single-counter-box -->
								</div>  <!-- /.col- -->
							</div> <!-- /.row -->
						</div> <!-- /.cunter-wrapper -->
					</div> <!-- /.bg -->
				</div> <!-- /.container -->
			</div>
			<!--=====FIN EXITO======-->

			<!--=====CLIENTE======-->
			<!--
			<div class="partner-section">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-4 col-12">
							<h6>Nuestros <br>Clientes:</h6>
						</div>
						<div class="col-md-9 col-sm-8 col-12">
							<div class="partner-slider">
								<div class="item"><img src="public/images/logo/p-1.png" alt=""></div>
								<div class="item"><img src="public/images/logo/p-2.png" alt=""></div>
								<div class="item"><img src="public/images/logo/p-3.png" alt=""></div>
								<div class="item"><img src="public/images/logo/p-4.png" alt=""></div>
								<div class="item"><img src="public/images/logo/p-5.png" alt=""></div>
								<div class="item"><img src="public/images/logo/p-6.png" alt=""></div>
								<div class="item"><img src="public/images/logo/p-7.png" alt=""></div>
								<div class="item"><img src="public/images/logo/p-8.png" alt=""></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			-->
			<!--=====FIN CLIENTE======-->

			<!-- LEAFLET Map -->
			<div class="google-map-two section-spacing"><div class="map-canvas" id="map"></div></div>
			<!--=====FIN MAPA======-->


			<?php require_once("footer.php");?>

			<button class="scroll-top tran3s">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>

			<?php require_once("js.php");?>

			<script src="public/js/map-script.js"></script>

			<script>
				$(document).ready(function(){

					<?php
						for ($i = 0; $i < sizeof($comx); $i++) {
					?>
						$("#myModal<?php echo $comx[$i]["id_com"] ?>").modal('show');
					<?php
						}
					?>

				});
			</script>


			<!-- LANZA EL MODAL -->

			<!-- FIN LANZA EL MODAL -->
			

		</div>
	</body>
</html>

<?php

?>

