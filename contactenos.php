<!DOCTYPE html>
<html lang="en">
	<head>
        <?php require_once("head.php");?>

        <title>Contáctenos | ReformasMR</title>
		<!-- LINK Y SCRIPT LEAFLET  INICIO-->
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" />
		<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>
		<!-- LINK Y SCRIPT LEAFLET  FINAL-->

	</head>

	<body>
		<div class="main-page-wrapper">

			<div id="loader-wrapper">
				<div id="loader"></div>
			</div>

			<?php require_once("header.php");?>

			<div class="theme-inner-banner section-spacing">
				<div class="overlay">
					<div class="container">
						<h2>CONTÁCTENOS</h2>
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->




			<div class="about-compnay-two no-bg section-spacing">
				<div class="overlay">
					<div class="container">
						<div class="row">
							<div class="col-lg-6 col-12 text order-lg-last">
								<div class="theme-title-one">
									<h2>Si prefieres una comunicación más directa, puedes llamarnos: </h2>
								</div> <!-- /.theme-title-one -->
								<p> ¡No esperes más! Contáctanos ahora y comienza a dar vida a tus proyectos de reforma.</p>
								<p>Nuestro equipo de expertos está ansioso por trabajar contigo y crear un espacio que refleje tu estilo y personalidad.</p>
							<!--<img src="public/images/home/sign-black.png" alt="" class="sign">-->
							</div> <!-- /.col- -->

							<div class="col-lg-6 col-12 order-lg-first">
								<img src="public/images/home/contacta.jpg" alt="" class="left-img">
							</div>

							
							
								
                     			<!--<img src="public/images/icon/whatsapp_icon2.png" alt="">-->
                        
                    	
						</div> <!-- /.row -->
						<div class="row">
							<div class="col-lg-6 col-12  order-lg-last">
							<a href="https://api.whatsapp.com/send?phone=34722217829" target="_blank" class="theme-button-one">CONTÁCTENOS</a>
							</div>
							<div class="col-lg-6 col-12  order-lg-first">
							
							</div>
							
						</div>
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.about-compnay-two -->



			
<!--
			=====================================================
				LEAFLET Map
			=====================================================
			-->
			<!-- LEAFLET Map -->
			
			
			<!--
			=============================================
				ÁREAS GLOBALDESK
			==============================================
			-->

			<!--
			<div class="branch-address">
				<div class="container">
					<div class="row">
						<div class="address-slider">
							<div class="item">
								<div class="wrapper">
									<h6>Documentación Importación</h6>
									<p><i class="fa fa-address-book-o" aria-hidden="true"></i><font size =2>Tel: (01) 209  9770</font></p>
									<p><i class="fa fa-address-book-o" aria-hidden="true"></i><font size =2>Ext: 526</font></p>
									<p><i class="fa fa-address-book-o" aria-hidden="true"></i><font size =2>docimpo@transtotalperu.com</font></p>
								</div> 
							</div>
							<div class="item">
								<div class="wrapper">
									<h6>Documentación Exportación</h6>
									<p><i class="fa fa-address-book-o" aria-hidden="true"></i><font size =2>Tel: (01) 209 9770</font></p>
									<p><i class="fa fa-address-book-o" aria-hidden="true"></i><font size =2>Ext: 546</font></p>
									<p><i class="fa fa-address-book-o" aria-hidden="true"></i><font size =2>docexpo@transtotalperu.com</font></p>
								</div> 
							</div>
							<div class="item">
								<div class="wrapper">
									<h6>Atención al Cliente</h6>
									<p><i class="fa fa-address-book-o" aria-hidden="true"></i><font size =2>Tel: (01) 209 9770</font></p>
									<p><i class="fa fa-address-book-o" aria-hidden="true"></i><font size =2>Ext: 535</font></p>
									<p><i class="fa fa-address-book-o" aria-hidden="true"></i><font size =2>atencionalcliente@transtotalperu.com</font></p>
								</div> 
							</div>
							<div class="item">
								<div class="wrapper">
									<h6>Frontdesk</h6>
									<p><i class="fa fa-address-book-o" aria-hidden="true"></i><font size =2>Tel: (01) 209 9770</font></p>
									<p><i class="fa fa-address-book-o" aria-hidden="true"></i><font size =2>Ext: 509</font></p>
									<p><i class="fa fa-address-book-o" aria-hidden="true"></i><font size =2>frontdesk@transtotalperu.com</font></p>
								</div> 
							</div>
							<div class="item">
								<div class="wrapper">
									<h6>Control de Equipos</h6>
									<p><i class="fa fa-address-book-o" aria-hidden="true"></i><font size =2>Tel: (01) 209 9770</font></p>
									<p><i class="fa fa-address-book-o" aria-hidden="true"></i><font size =2>Ext: 525</font></p>
									<p><i class="fa fa-address-book-o" aria-hidden="true"></i><font size =2>equipment@transtotalperu.com</font></p>
								</div> 
							</div>
							<div class="item">
								<div class="wrapper">
									<h6>Negocios Back Office</h6>
									<p><i class="fa fa-address-book-o" aria-hidden="true"></i><font size =2>Tel: (01) 209 9770</font></p>
									<p><i class="fa fa-address-book-o" aria-hidden="true"></i><font size =2>Ext: 531 / 544</font></p>
									<p><i class="fa fa-address-book-o" aria-hidden="true"></i><font size =2>exportacionestasa@globaldesk.pe</font></p>
								</div> 
							</div>

						</div> 
					</div>
				</div> 
			</div> 
			-->
			<?php require_once("footer.php");?>

		    <?php require_once("js.php");?>

			<script src="public/js/map-script.js"></script>
			<!-- SCRIPT TOKEN API GOOGLE MAPS, SE COMENTA YA QUE SE USARÁ MAPAS DE LEAFLET  -->
			<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjQLCCbRKFhsr8BY78g2PQ0_bTyrm_YXU"></script>-->
			<!--<script src="public/vendor/sanzzy-map/dist/snazzy-info-window.min.js"></script>-->

		</div>
	</body>
</html>
