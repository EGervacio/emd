<?php
require_once 'includes/header.php';
?>
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/main_styles.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link rel="stylesheet" type="text/css" href="css/addstyle.css">

</head>
<body>
	<div class="super_container">
		<!-- Header -->
	<?php
		require_once 'includes/menu.php';
	?>
		<div class="home">
			<div class="hero_slider_container">
				<div class="hero_slider owl-carousel">
					
					<!-- Hero Slide -->
					<div class="hero_slide">
						<div class="hero_slide_background" style="background-image:url(images/s1.jpg)"></div>
						<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
							<div class="hero_slide_content text-center">
								<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Internet <span>Fibra Optica</span></h1>
							</div>
						</div>
					</div>
					
					<!-- Hero Slide -->
					<div class="hero_slide">
						<div class="hero_slide_background" style="background-image:url(images/s2.png)"></div>
						<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
							<div class="hero_slide_content text-center">
								<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Sistema <span>GPS</span></h1>
							</div>
						</div>
					</div>
					<div class="hero_slide">
						<div class="hero_slide_background" style="background-image:url(images/s3.jpg)"></div>
						<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
							<div class="hero_slide_content text-center">
								<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Internet <span>Satelital</span></h1>
							</div>
						</div>
					</div>

				</div>
				<div class="hero_slider_left hero_slider_nav trans_200">
					<span class="trans_200">
						<img src="images/flechaIzq.png">
					</span>
				</div>
				<div class="hero_slider_right hero_slider_nav trans_200">
					<span class="trans_200">
						<img src="images/flechaDer.png">
					</span>
				</div>
			</div>
		</div>

		<div class="hero_boxes">
			<div class="hero_boxes_inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 hero_box_col">
							</div>

						<div class="col-lg-4 hero_box_col">
							<div class="hero_box d-flex flex-row align-items-center justify-content-start">
								<img src="images/serv.png" class="svg" alt="">
								<div class="hero_box_content">
									<h2 class="hero_box_title">Servicios</h2>
									<a href="servicios.php" class="hero_box_link">Ver más</a>
								</div>
							</div>
						</div>

						<div class="col-lg-4 hero_box_col">
							<div class="hero_box d-flex flex-row align-items-center justify-content-start">
								<img src="images/inst.png" class="svg" alt="">
								<div class="hero_box_content">
									<h2 class="hero_box_title">Instalaciones</h2>
									<a href="instalaciones.php" class="hero_box_link">Ver más</a>
								</div>
							</div>
						</div>

						

					</div>
				</div>
			</div>
		</div>

		<!-- Popular -->

	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>EMD NEGOCIACIONES S.R.L.</h1>
						<div class="cont-circle">
							<img class="circle" src="images/icono.ico">
						</div>					
					</div>
					
				</div>
				<div class="col-lg-8">
					<div class="about">
						<p class="about/text">
							La tecnología es cada vez más innovadora, de igual manera tratamos de llegar a esas zonas donde no existe ningún tipo de comunicación. Así como mejorar y actualizar las áreas donde ya esta integrado un medio de enlace o comunicación. Una solución inmediata y un resultado que brinde el enlace y la conectividad de Internet Via Satélite en lugares remotos,es lo que la mayoría de las personas y negocios requieren, para lograr el acortamiento de distancias.
						</p>
						<p class="about/text">
							EMD Negociaciones S.R.L. Ha integrado los sistemas tecnológicos de "Internet Satelital", el soporte, la asesoría y el trato directo con el cliente para crear ese valor agregado que las empresas de hoy en dí a requieren.Esta tratando de realizar ese acercamiento de distancias por medios Satelitales integrados a equipos de computo para cubrir las demandas de comunicación.
						</p>						
					</div>
				</div>

			</div>

			<div class="row course_boxes">
				<div class="col-lg-12 course_box">
					<div class="section_title text-center">
						<h1>Servicios Especializados</h1>
					</div>
				</div>

				<!-- Popular Course Item -->
				<div class="col-lg-4 col-sm-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/gps.png">
						<div class="card-body text-center">
							<div class="card-title"><a href="<?php echo $GPSpag ?>">GPS Satelital</a></div>
							<div class="card-text">Servicio de monitoreo y geolocalizacion vehicular, rastreo en tiempo real e historial de desplazamiento.
								<a href="servicios.php#gps"> ver más </a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/fibra.jpg" >
						<div class="card-body text-center">
							<div class="card-title"><a href="fibra-optica.php">FIBRA OPTICA</a></div>
							<div class="card-text">Internet dedicado de alta velocidad con 100% fibra óptica mayor rapidez de navegación, cero pérdidas y mayor garantia.
								<a href="servicios.php#fibra"> ver más </a>
							</div>
						</div>

					</div>
				</div>
				<div class="col-lg-4 col-sm-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/bts.jpg">
						<div class="card-body text-center">
							<div class="card-title"><a href="">MIBROONDAS BTS</a></div>
							<div class="card-text">Radienlace para clientes pequeños que requieran transmitir datos en alta velocidad.
								<a href="servicios.php#inalambrico"> ver más </a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row course_boxes">
				<div class="col-lg-4 col-sm-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/satelital.jpg">
						<div class="card-body text-center">
							<div class="card-title"><a href="internet-satelital.php">INTERNET SATELITAL</a></div>
							<div class="card-text">Es un sistema recomendado para zonas rurales donde no existe cobertura.
								<a href="servicios.php#satelital"> ver más </a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/enlace.jpg">
						<div class="card-body text-center">
							<div class="card-title"><a href="microondas-bts.php">ENLACE INALAMBRICOS</a></div>
							<div class="card-text">Realizamos enlaces punto a punto PTP y enlace multipuntos para brindar servicios de interconexion de puntos muy lejanos.
								<a href="servicios.php#inalambrico"> ver más </a>
							</div>
						</div>
					</div>
				</div>
				<!-- Popular Course Item -->
				<div class="col-lg-4 col-sm-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/telecom.jpg">
						<div class="card-body text-center">
							<div class="card-title"><a href="otros-trabajos.php">TELECOMUNICACIONES</a></div>
							<div class="card-text">Nos especializamos en todo tipo de trabajos en telecomunicaciones, pozo a tierra, ampliación de cobertura, etc.
								<a href="servicios.php#otroserv"> ver más </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Register -->

	<div class="register">
		<div class="container-fluid">
			<div class="row row-eq-height">
				<div class="col-lg-6 nopadding">
					
					<!-- Register -->

					<div class="register_section d-flex flex-column align-items-center justify-content-center">
						<div class="register_content text-center">
							<h1 class="register_title">Necesitas orientacion  <span>Comunicate
							con nosotros</span></h1>
							<p class="register_text">Si estas pensando en internet, cobertura inalambrica, cableado estructurado o algun servicio sobre redes y telecomunicaciones.</p>
							<div class="button button_1 register_button mx-auto trans_200"><a href="contacto.php">Contactar</a></div>
						</div>
					</div>

				</div>

				<div class="col-lg-6 nopadding">
					
					<!-- Search -->

					<div class="search_section d-flex flex-column align-items-center justify-content-center">
						<div class="search_background" style="background-image:url(images/bg-whatsapp.jpg);"></div>
						<div class="search_content text-center">
							<h1 class="search_title">Contacta con un Asesor</h1>
							 <ul class="menu_whats">
								<li><img src="images/whatsapp.png"><a href="https://wa.me/51943672951" target="_blank">943672951</a></li>
								<li><img src="images/whatsapp.png"><a href="https://wa.me/51921667589" target="_blank">921667589</a></li>
								<li><img src="images/whatsapp.png"><a href="https://wa.me/51921667589" target="_blank">921667589</a></li>
								<h2 class="text-black">Deja un mensaje por whatsapp</h2>
							</ul>
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Events -->

	<div class="events page_section">
		<div class="container">
			
			<div class="row">
				<div class="col-lg-12">
					<div class="section_title text-center">
						<h1>INSTALACIONES REALIZADAS</h1>
					</div>
				</div>
			</div>
			<div class="event_items ">
				<!-- Event Item -->
				<div class="row event_item">
					<div class="col-lg-12">
						<div class="row d-flex flex-row align-items-end">
							<div class="col-lg-4 col-md-6 col-sm-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="fibra-optica.html">FIBRA OPTICA</a>
									</div>
								
									<p>Instalaciones de fibra optica de planta externa con despliegue de troncales e instalaciones internas.</p>
									<div class="btn btn-primario text-center mx-auto">
										<a href="fibra-optica.php" >Ver Galeria</a>
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-md-6 col-sm-6 order-lg-3 order-1">
								<div class="event_image">
									<img src="images/fibra1.jpg" alt="pusion fibra en ODF">
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 order-lg-3 order-1 mi-div">
								<div class="event_image">
									<img src="images/fibra2.jpg" alt="fusion fibra planta externa">
								</div>
							</div>

						</div>	
					</div>
				</div>
				
				
				<!-- Event Item -->
				<div class="row event_item">
					<div class="col-lg-12">
						<div class="row d-flex flex-row align-items-end">
							<div class="col-lg-4 col-md-6 col-sm-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="internet-satelital.html">INTERNET SATELITAL</a></div>			
									<p>Instalaciones de internet satelital para el sector educatico y comercial en lugares alejados.</p>
									<div class="btn btn-primario text-center mx-auto">
										<a href="internet-satelital.php" >Ver Galeria</a>
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-md-6 col-sm-6 order-lg-3 order-1">
								<div class="event_image">
									<img src="images/satelital1.jpg" alt="internet satelital">
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 order-lg-3 order-1 mi-div">
								<div class="event_image">
									<img src="images/satelital2.jpg" alt="internet satelital pandemia">
								</div>
							</div>

						</div>	
					</div>
				</div>
				<!-- Event Item -->
				<div class="row event_item">
					<div class="col-lg-12">
						<div class="row d-flex flex-row align-items-end">
							<div class="col-lg-4 col-md-6 col-sm-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="internet-inalambrico.html">MICROONDAS INALAMBRICO</a></div>
									<p>Instalacion de enlaces inalambricos  punto a punto y multipunto, ideal para conectar lugares y centralizarlos.</p>
									<div class="btn btn-primario text-center mx-auto">
										<a href="internet-inalambrico.php" >Ver Galeria</a>
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-md-6 col-sm-6 order-lg-3 order-1">
								<div class="event_image">
									<img src="images/bts1.jpg" alt="instalación antena bts">
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 order-lg-3 order-1 mi-div">
								<div class="event_image">
									<img src="images/bts2.jpg" alt="instalacion bts con parabolica">
								</div>
							</div>

						</div>	
					</div>
				</div>
				<!-- Event Item -->
				<div class="row event_item">
					<div class="col-lg-12">
						<div class="row d-flex flex-row align-items-end">
							<div class="col-lg-4 col-md-6 col-sm-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="radio-y-tv.html">RADIO Y TV</a></div>
									<p>Instalacion y configuración de radios estacion base, estación movil y radio portatil. Ademas de acondicionamiento de radio en vehñiculos.</p>
									<div class="btn btn-primario text-center mx-auto">
										<a href="radio-y-tv.php" >Ver Galeria</a>
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-md-6 col-sm-6 order-lg-3 order-1">
								<div class="event_image">
									<img src="images/radio.jpg" alt="revision radio">
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 order-lg-3 order-1 mi-div">
								<div class="event_image">
									<img src="images/radiotv.jpg" alt="estacion de radio">
								</div>
							</div>

						</div>	
					</div>
				</div>
				<!-- Event Item -->
				<div class="row event_item">
					<div class="col-lg-12">
						<div class="row d-flex flex-row align-items-end">
							<div class="col-lg-4 col-md-6 col-sm-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="pozo-tierra.html">POZO A TIERRA</a></div>
									<p>Instalaciones de sistemas de puesta a tierra - SPAT, mantenimiento preventivo y correctivo.</p>
									<div class="btn btn-primario text-center mx-auto">
										<a href="pozo-tierra.php" >Ver Galeria</a>
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-md-6 col-sm-6 order-lg-3 order-1">
								<div class="event_image">
									<img src="images/pozotierra.jpg" alt="pozo a tierra">
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 order-lg-3 order-1 mi-div">
								<div class="event_image">
									<img src="images/pozotierra2.jpg" alt="pozo a tierra">
								</div>
							</div>

						</div>	
					</div>
				</div>
				<!-- Event Item -->
				<div class="row event_item">
					<div class="col-lg-12">
						<div class="row d-flex flex-row align-items-end">
							<div class="col-lg-4 col-md-6 col-sm-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="telecomunicaciones.html">MAS TRABAJOS</a></div>
									<p>Conozca todos los trabajos en que nos especializamos,internet, redes, cableado estructurado y otros </p>
									<div class="btn btn-primario text-center mx-auto">
										<a href="telecomunicaciones.php" >Ver Galeria</a>
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-md-6 col-sm-6 order-lg-3 order-1">
								<div class="event_image">
									<img src="images/otros.jpg" alt="intalacion torres">
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 order-lg-3 order-1 mi-div">
								<div class="event_image">
									<img src="images/bateria.jpg" alt="mantenimiento baterias">
								</div>
							</div>

						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
require_once 'includes/footer.php';
?>

<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
</body>
</html>