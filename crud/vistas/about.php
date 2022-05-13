<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>About US</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	font-family: "Open Sans", sans-serif;
}
h2 {
	color: #333;
	text-align: center;
	text-transform: uppercase;
	font-family: "Roboto", sans-serif;
	font-weight: bold;
	position: relative;
	margin: 30px 0 60px;
}
h2::after {
	content: "";
	width: 100px;
	position: absolute;
	margin: 0 auto;
	height: 3px;
	background: #8fbc54;
	left: 0;
	right: 0;
	bottom: -10px;
}
.col-center {
	margin: 0 auto;
	float: none !important;
}
.carousel {
	padding: 0 70px;
}
.carousel .carousel-item {
	color: #999;
	font-size: 14px;
	text-align: center;
	overflow: hidden;
	min-height: 290px;
}
.carousel .carousel-item .img-box {
	width: 135px;
	height: 135px;
	margin: 0 auto;
	padding: 5px;
	border: 1px solid #ddd;
	border-radius: 50%;
}
.carousel .img-box img {
	width: 100%;
	height: 100%;
	display: block;
	border-radius: 50%;
}
.carousel .testimonial {
	padding: 30px 0 10px;
}
.carousel .overview {	
	font-style: italic;
}
.carousel .overview b {
	text-transform: uppercase;
	color: #7AA641;
}
.carousel-control-prev, .carousel-control-next {
	width: 40px;
	height: 40px;
	margin-top: -20px;
	top: 50%;
	background: none;
}
.carousel-control-prev i, .carousel-control-next i {
	font-size: 68px;
	line-height: 42px;
	position: absolute;
	display: inline-block;
	color: rgba(0, 0, 0, 0.8);
	text-shadow: 0 3px 3px #e6e6e6, 0 0 0 #000;
}
.carousel-indicators {
	bottom: -40px;
}
.carousel-indicators li, .carousel-indicators li.active {
	width: 12px;
	height: 12px;
	margin: 1px 3px;
	border-radius: 50%;
	border: none;
}
.carousel-indicators li {	
	background: #999;
	border-color: transparent;
	box-shadow: inset 0 2px 1px rgba(0,0,0,0.2);
}
.carousel-indicators li.active {	
	background: #555;		
	box-shadow: inset 0 2px 1px rgba(0,0,0,0.2);
}
</style>
</head>
<body>
<div class="container-xl">
	<div class="row">
		<div class="col-lg-8 mx-auto">
			<h2>Equipo CRMTools</h2>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Carousel indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                    <li data-target="#myCarousel" data-slide-to="5"></li>
                    <li data-target="#myCarousel" data-slide-to="6"></li>
				</ol>   
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="img-box"><img src="./img/crm.jpeg" alt="CRM Tools"></div>
						<p class="testimonial">
                            <h4> ¿POR QUE CRMTools?</h4>
                            Con CRM Tools podras:
                            <p>Descargar y Almacenar archivos de una manera mas agil,
                            buscar informacion en tiempo real, es amigable con el usuario y aligera los tiempos de entrega de los reportes.
                            Despues de lo anteriormente mencionado y por mucho mas somos los mejores del mercado.</p>
						</div>
					<div class="carousel-item">
						<div class="img-box"><img src="./img/1.jpg" alt=""></div>
						<p class="testimonial">Lider del equipo de desarrollo de CRMTools, con apenas 26 años dueño de su propia empresa de venta de esclavos.</p>
						<p class="overview"><b>Richarth Madera</b>, Web Developer</p>
					</div>
                    <div class="carousel-item">
						<div class="img-box"><img src="./img/2.jpg" alt=""></div>
						<p class="testimonial">Sabrá dios cuantos años tiene, tiene muy en claro la problematica de la empresa cruz verde por que trabaja ahi, la tiene clara Mauro.</p>
						<p class="overview"><b>Mauricio Velasquez</b>, Web Developer</p>
					</div>
					<div class="carousel-item">
						<div class="img-box"><img src="./img/3.jpg" alt=""></div>
						<p class="testimonial">Es el payaso del grupo, le faltan como 30Cm de altura para que se puedan tener en cuenta sus insultos.</p>
						<p class="overview"><b>Bryan Perez</b>, Media Analyst</p>
					</div>
                    <div class="carousel-item">
						<div class="img-box"><img src="./img/4.jpg" alt=""></div>
						<p class="testimonial">Jhoncito la buena pal sosito que siempre se viste elegante en las sustentaciones</p>
						<p class="overview"><b>jhon Torres</b>, Media Analyst</p>
					</div>
                    <div class="carousel-item">
						<div class="img-box"><img src="./img/5.jpg" alt=""></div>
						<p class="testimonial">A veces no se baña pero buena muchacha, es la novia del enano.</p>
						<p class="overview"><b>Laura Riso</b>, Seo Analyst</p>
					</div>
                    <div class="carousel-item">
						<div class="img-box"><img src="./img/crm.jpeg" alt=""></div>
						<p class="testimonial"> <h4>RECUERDE QUE:</h4> 
                            CRM Tools es una herramienta ERP que ayuda en la gestion de datos de tu empresa,
                             mejorando, agilizando y optimizando el rendimiento de trabajo de tus empleados.</p>	
					</div>
				</div>
				<!-- Carousel controls -->
				<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="carousel-control-next" href="#myCarousel" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
			</div>
		</div>
	</div>
</div>
</body>
</html>
<br>
<br>
<br>
<br>
<br>
<br>
<?php require_once "../vistas/plantillas/parte_inferior.php" ?>

