<?php
/*
 * @author: Roberto Holguín Carrillo
 * Template Name: 7asemana - Programa - Version 1.4 - Pruebas
 * Template Post Type: page
 */
get_header();?>
<link rel="stylesheet" type="text/css" href="../wp-content/themes/fullstory/inc/css/fullpage.css"/-->
<link href="https://fonts.googleapis.com/css?family=Montserrat:thin,extra-light,light,100,200,300,400,500,600,700,800" rel="stylesheet">
<script type="text/javascript">
window.onbeforeunload = function () {
  window.scrollTo(0, 0);
}
</script>
<script>
    var lastScrollTop = 0;
    var bodyz = jQuery('body');

    window.addEventListener("scroll", function(){
    var st = window.pageYOffset || document.documentElement.scrollTop;
    if (st > lastScrollTop){
        console.log(st);
        bodyz.removeClass('nav-down').addClass('nav-up');
        if (st == 0){
            bodyz.removeClass('nav-up').addClass('nav-down');
        }
    }
    else {
        console.log(st);
        bodyz.removeClass('nav-down').addClass('nav-up');
        if (st == 0){
            bodyz.removeClass('nav-up').addClass('nav-down');
        }
    }
    lastScrollTop = st <= 0 ? 0 : st;
    }, false);
</script>
<style>
.post-content-wrap * {
	font-family: 'Montserrat';
	font-weight: 400;
	letter-spacing: -1px;
}
.post-style-5 .entry-content {
	padding-bottom:0;
	/*margin-bottom: -178px;*/
}
#fullpage {
	top: -147px;
}
#masobservatorio {
	display:none !important;
}
.grid-post .layouts {
	background-image: url(../wp-content/themes/fullstory/inc/img/3asemana/1-1.jpg);
	opacity: 0.9;
}
#conferencias {
	display:none;
}
</style>
<style>

#section1 * { transition: all .3s ease 0s; }

#section1 {
	height:100vh !important;
}

/* #section1 {
	padding: 0 8%;
} */

/* Background colours */

#section1 div + div article:nth-child(1) { /*background: #143a52;*/ /*background: #d9adad;*/ background:#292c72; /*background: #cdd3e8;*/ }

#section1 div + div article:nth-child(2) { background: #f56040; }

#section1 div + div article:nth-child(3) { background: #ffd3c7; }

#section1 div + div article:nth-child(4) { background: #1fb4c421; }

#section1 div + div article:nth-child(5)/*, #section1 div + div */ { background: #03a39c61; }


/* Main layout */

#section1 div + div {
  list-style: none;
  position: relative;
  display: flex;
  flex-direction: row;
  flex-wrap: nowrap;
  align-items: stretch;
  overflow: hidden;
	height: 93vh;
}

/* Articles */

.elemento-acordeon-lunes * {
	color:white;
}

.elemento-acordeon-martes * {
	color:white;
}

.elemento-acordeon * {
	color:#333678;
}

#section1 div + div article {
  flex: initial;
  width: 20%;
  height: 100%;
  text-align: center;
  color: #fff;
  text-decoration: none;
  vertical-align: bottom;
  box-sizing: border-box;
  padding: 2vh 1vw;
  position: relative;
	overflow: scroll;
	overflow-x: hidden;
	scrollbar-width: none;  /* Firefox */
}


/* Hover interaction */

#section1 div + div:hover article {
  flex: initial;
  width: 10%;
}
/* Destacar día presente en el acordeón */
/*
#section1 div + div .elemento-acordeon-lunes { width: 110%; }
#section1 div + div .elemento-acordeon-lunes > div {
  opacity: 1;
}

*/

#section1 div + div article:hover { width: 60%; }

#section1 div + div article::-webkit-scrollbar {
	width: 0;
}

#section1 div + div article:hover h2 { display:none; }

#section1 article > div {
  opacity: 0;
  transition: opacity .2s ease 0;
}

#section1 div + div article:hover > div {
  opacity: 1;
  transition: opacity .3s ease .3s;
}

/* navigation */

#section1 div + div article > h2 {
  bottom: 5vh;
  position: absolute;
  text-align: center;
  width: 100%;
  margin: 0;
  font-size: 3vh;
}

/* Article layouts */

#section1 article div {
  text-align: left;
  width: 58vw;
}

#section1 article div .destacadas .mt-post-image {
  width: 6vw !important;
}

#section1 article div p, article div div h2, article div h3 { margin: 0 0 1em 0; }

#section1 h1, h2, h3, h4, h5, h6 { text-transform: uppercase; }

h3 { color: #2c2f74 }

#section1 article div p { width: 40vw; }

@media (max-width: 900px) {

#section1 div + div article { padding: 2vh 3vw; }

#section1 div + div article > h2 {
  transform: rotate(90deg);
  bottom: 23vh;
  min-width: 12em;
  text-align: left;
  transform: rotate(-90deg);
  transform-origin: 0 0 0;
  opacity: 1;
}

#section1 div + div article:hover > h2 { opacity: 0; }

#section1 article div p { width: 50vw; }

#section1 article div {
  max-height: calc(72%);
  overflow-y: auto;
}
}
/* Estilos para columnas */
.flex-grid {
  display: flex;
	justify-content: space-between;
}
}
.col {
  flex: 1;
}
.flex-grid .col {
  width: 32%;
}
.col-destacados {
  flex: 1;
}
.flex-grid .col-destacados {
  width: 50%;
}


/* Contenedor instituciones */
.parrafo-listados {
	line-height: 1;
	padding: 0 0 13px;
}
.parrafo-instituciones {
	line-height: 1;
	padding: 0 0 13px;
}

.banner {
	background-image: url("../wp-content/themes/fullstory/inc/img/7asemana/banner_7asemana.jpg");
	background-size: contain;
	height:7%;
	position: relative;
	top: 0vh;
}
#section0 {
	background-image: url("../wp-content/themes/fullstory/inc/img/7asemana/portada_7asemana.jpg");
	/*height: 1002px !important;*/
	margin-top:41px;
}

#section2 {
	background-image: url("../wp-content/themes/fullstory/inc/img/6asemana/fondo_6asemana.jpg");
  background-size: 100%;
}
#section3 {
	background-image: url("../wp-content/themes/fullstory/inc/img/6asemana/fondo_6asemana.jpg");
  background-size: 100%;
}
#section4 {
	background-image: url("../wp-content/themes/fullstory/inc/img/6asemana/fondo_6asemana.jpg");
  background-size: 100%;
}
#section5 {
	background-image: url("../wp-content/themes/fullstory/inc/img/6asemana/fondo_6asemana.jpg");
  background-size: 100%;
}
#section6 {
	background-image: url("../wp-content/themes/fullstory/inc/img/6asemana/fondo_6asemana.jpg");
  background-size: 100%;
}
#section7 {
	background-image: url("../wp-content/themes/fullstory/inc/img/6asemana/fondo_6asemana.jpg");
  background-size: 100%;
}
#section8 {
	background-image: url("../wp-content/themes/fullstory/inc/img/6asemana/fondo_6asemana.jpg");
  background-size: 100%;
}
#section9 {
	background-image: url("../wp-content/themes/fullstory/inc/img/6asemana/fondo_6asemana.jpg");
  background-size: 100%;
}
#section10 {
	background-image: url("../wp-content/themes/fullstory/inc/img/6asemana/fondo_6asemana.jpg");
  background-size: 100%;
}
#section11 {
	background-image: url("../wp-content/themes/fullstory/inc/img/6asemana/fondo_6asemana.jpg");
  background-size: 100%;
}
#section12 {
	background-image: url("../wp-content/themes/fullstory/inc/img/6asemana/fondo_6asemana.jpg");
  background-size: 100%;
}


a {
    color: #2c2f74;
    font-weight: bold;
}

a:hover {
    color: #ab5fdb;
}
/* Flecha inicial */
.bounce {
	-moz-animation: bounce 3s infinite;
	-webkit-animation: bounce 3s infinite;
	animation: bounce 3s infinite;
}
@keyframes bounce {
  0%, 20%, 50%, 80%, 100% {
    -moz-transform: translateY(1px);
    -ms-transform: translateY(1px);
    -webkit-transform: translateY(1px);
    transform: translateY(1px);
  }
  40% {
    -moz-transform: translateY(-13px);
    -ms-transform: translateY(-13px);
    -webkit-transform: translateY(-13px);
    transform: translateY(-13px);
  }
  60% {
    -moz-transform: translateY(-7px);
    -ms-transform: translateY(-7px);
    -webkit-transform: translateY(-7px);
    transform: translateY(-7px);
  }
}
.primera-col div:nth-child(2) { height: 10% !important; }
.primera-col div:nth-child(4) { height: 10% !important; }
.destacadas .primera-col div:nth-child(2) .poster-image { width: 110px !important }
.destacadas .primera-col div:nth-child(4) .poster-image { width: 110px !important }
.primera-col-martes div:nth-child(2) { height: 10% !important; }
.primera-col-martes div:nth-child(4) { height: 10% !important; }
.destacadas .primera-col-martes div:nth-child(2) .poster-image { width: 110px !important }
.destacadas .primera-col-martes div:nth-child(4) .poster-image { width: 110px !important }
.primera-col-miercoles div:nth-child(2) { height: 10% !important; }
.primera-col-miercoles div:nth-child(4) { height: 10% !important; }
.primera-col-jueves div:nth-child(2) { height: 10% !important; }
.primera-col-jueves div:nth-child(4) { height: 10% !important; }
.primera-col-viernes div:nth-child(2) { height: 10% !important; }
.primera-col-viernes div:nth-child(4) { height: 10% !important; }

.titulo-instituciones {
  text-align:left;
  padding: 2% 12% 1%;
}
.link-descarga {
	display:none;
  text-align: right;
  padding-right: 2%;
  transform: translateY(50%);
}
.link-descarga > a {
  color:white;
}
#logo_semana {
  position: relative;
  left: -45%;
  width: 80%;
}
#contenedor_logo {
  position: absolute;
  left: 50%;
  bottom:30%
}

/* Declaraciones para móviles */
@media (max-width:1300px) {
  .parrafo-listados {
  	line-height: .5;
  }
  .parrafo-instituciones {
    padding-bottom:8px;
  }
  .single p {
    font-size: 13px;
  }
  #section1 article div p, article div div h2, article div h3 {
    margin: 0;
  }
  body { font-size: 85%; }
}

@media (max-width:1000px) {
#section0 {
  background-position-y: 68px;
  background-position-x: -240px;
}
#fullpage {
  top: -126px;
}
.segunda-col {
  display:none !important;
}
.primera-col {
  padding-left: 9.5vw;
  width:100% !important;
}
.primera-col-martes {
  padding-left: 9.5vw;
  width:100% !important;
}
.primera-col-miercoles {
  padding-left: 9.5vw;
  width:100% !important;
}
.primera-col-jueves {
  padding-left: 9.5vw;
  width:100% !important;
}
.primera-col-viernes {
  padding-left: 9.5vw;
  width:100% !important;
}
.elemento-destacadas{
  display:none;
  }
.destacadas {
  width:100%;
  padding: 0 !important;
}
.titulo-instituciones {
  text-align:left;
  padding: 10% 0% 1% 6%;
}
}
@media (max-width: 800px) {
body { font-size: 95%; }
.titulo-inicial {
  font-size:28px;
  font-color:#e16242;
}
.titulo-- {
	display: none;
}
.titulo-estados  {
	width: 90% !important;
}	
.banner {
	display:none;
}
#section1 div + div {
    height: 100vh !important;
}
.flex-grid {
    display: block !important;
	height: 100%;
  }
.flex-grid .col {
	width: 100% !important;
	}
#fullpage {
  top: -127px;
}
.titulos_cartelera {
	line-height:1.3;
	font-size:12px;
	padding-left:8vw;
}
.nombres_dias {
	margin:0;
	text-align:right;
}
#section1 article div {
    text-align: left;
    width: 57vw;
}
#section1 div + div article > h2 {
    transform-origin: -17px 0px 4px;
}
#section1 div + div .elemento-acordeon-lunes { width: 110%; }
#section1 div + div .elemento-acordeon-lunes > div {
  opacity: 1;
}
#imagen_portada {
  max-width: 170%;
  right: 34%;
  position: relative;
  padding-top:95px;
}

#section2 {
	background-image: url("../wp-content/themes/fullstory/inc/img/4asemana/fondo_4asemana_movil.jpg");
	background-size: 105%;
	height:100% !important;
}

#section3 {
	background-image: url("../wp-content/themes/fullstory/inc/img/4asemana/fondo_4asemana_movil.jpg");
	background-size: 105%;
	height:100% !important;
}
#section4 {
	background-image: url("../wp-content/themes/fullstory/inc/img/4asemana/fondo_4asemana_movil.jpg");
	background-size: 105%;
	height:100% !important;
}
#section5 {
	background-image: url("../wp-content/themes/fullstory/inc/img/4asemana/fondo_4asemana_movil.jpg");
	background-size: 105%;
	height:100% !important;
}
#section6 {
	background-image: url("../wp-content/themes/fullstory/inc/img/4asemana/fondo_4asemana_movil.jpg");
	background-size: 105%;
	height:100% !important;
}
#section7 {
	background-image: url("../wp-content/themes/fullstory/inc/img/4asemana/fondo_4asemana_movil.jpg");
	background-size: 105%;
	height:100% !important;
}
#section8 {
	background-image: url("../wp-content/themes/fullstory/inc/img/4asemana/fondo_4asemana_movil.jpg");
	background-size: 105%;
	height:100% !important;
}
#section9 {
	background-image: url("../wp-content/themes/fullstory/inc/img/4asemana/fondo_4asemana_movil.jpg");
	background-size: 105%;
	height:100% !important;
}
#section10 {
	background-image: url("../wp-content/themes/fullstory/inc/img/4asemana/fondo_4asemana_movil.jpg");
	background-size: 105%;
	height:100% !important;
}
#section11 {
	background-image: url("../wp-content/themes/fullstory/inc/img/4asemana/fondo_4asemana_movil.jpg");
	background-size: 105%;
	height:100% !important;
}
#section12 {
	background-image: url("../wp-content/themes/fullstory/inc/img/4asemana/fondo_4asemana_movil.jpg");
	background-size: 105%;
	height:100% !important;
}
}
@media (max-width:400px) {
  #imagen_portada_movil {
    padding-top: 15% !important;
  }
}
@media (max-width:500px) {
  #imagen_portada_movil {
    display:block !important;
    padding-top: 0px;
  }
  #imagen_portada {
    display:none !important;
  }
  #contenedor_logo {
    position: absolute;
    left: 55%;
    bottom: 40%;
    width: 100%;
  }
  .titulos_cartelera {
    padding-bottom: 8px !important;
  }
}
@media (max-width: 1024px) {
#imagen_portada {
  max-width: 126%;
  right: 12%;
  position: relative;
  padding-top:95px;
}
.flex-grid{
  padding:0px 6% !important;
}
}
@media (max-width: 1200px) {
.banner {
  	height: 5%;
}
/* #imagen_portada {
	padding-top:2% !important;
  max-width: 122% !important;
} */
#section1 article div {
    max-height: calc(100%);
    overflow-y: auto;
}
#section1 div + div {
    height: 95vh;
}
}
/* @media (max-width: 1500px) {
#imagen_portada {
	padding-top:0px;
  max-width: 110%;
  position: relative;
  right: 12%;
}
} */
</style>

<!-- ESTILOS ACTUALIZACION VERSION 1.3 INICIO-->

  <style>
      .escaparate-movil{
        display: none!important;
      }
      .menu-estados-movil{
        display: none!important;
      }
      .menu-estados-desktop{
        display: flex!important;
      }
      #section1 div + div .escaparate-movil, #section1 div + div .flex-padre-start{
        height: fit-content!important;
      }
      .escaparate-desktop{
        display: block!important;
        height: fit-content!important;
      }
      @media (max-width: 768px) {
        .escaparate-movil{
          display: none!important;
        }
        .menu-estados-movil{
          display: block!important;
        }
        .menu-estados-desktop{
          display: none!important;
        }
        .escaparate-desktop{
          display: none!important;
        }
      }
      .flex-padre{
        display: flex!important;
        justify-content: space-around!important;
        align-items: flex-start!important;
        width: 58vw!important;
      }
      .flex-padre-start{
        display: flex!important;
        justify-content: flex-start!important;
        align-items: flex-start!important;
        width: 58vw!important;
        margin-top: 20px;
        margin-bottom: 10px;
      }
      @media (max-width: 768px) {
          .flex-padre-start{
          display: block!important;
        }
      }
      .flex-hijo-33{
        flex-basis: calc(33% - 20px)!important;
      }
      .flex-hijo-33 span{
        display: block;
        width: 100%;
      }
      .flex-hijo-33 span:nth-child(2){
        margin-top: 10px;
      }
      .flex-hijo-33 img{
        max-width: 70px;
      }
      .activo{
        font-weight: bold;
      }
      .boton-6asemana{
        color: #fff;
        background: #00b9eb;
        display: block;
      }
      .boton-6asemana:hover{
        background: #E7A72E;
      }
      .activo {
        background: #332574!important;
        font-weight: bold;
        border: 2px solid #fff;
      }
      .col-doble{
        width: 66%;
      }
    </style>
    <style>
      svg {
          width: 100%;
      }
      svg path{
          cursor: pointer;
      }
      .list-of-states{
          list-style-type: none;
          padding: 0;
          column-count: 2;
      }
          .list-of-states li{
              padding: 8px;
              width: fit-content;
              cursor: pointer;
              color: #65298b;
          }
              .list-of-states li.on, .list-of-states li:hover {
                  background: #65298b;
                  color: white;
                  font-weight: bold;
              }
      path.on {
          fill: #65298b;
          color: #fff;
      }
      /* The Modal (background) */
      .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      padding-top: 100px; /* Location of the box */
      left: 0;
      top: 50px;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
      }
      /* Modal Content */
      .modal-content {
      background-color: #fefefe;
      margin: auto;
      padding: 20px;
      border: 1px solid #888;
      width: 50%;
      }
      /* The Close Button */
      .cerrar-modal {
      color: #aaaaaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
      }
      .cerrar-modal:hover,
      .cerrar-modal:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
      }
      #section1 div + div .container-loader{
        display: none;
      }
      .loader {
      display: table;
      margin: 100px auto 0 auto;
      width: 48px;
      height: 48px;
      border-radius: 50%;
      position: relative;
      animation: rotate 1s linear infinite
    }
    .loader::before {
      content: "";
      box-sizing: border-box;
      position: absolute;
      inset: 0px;
      border-radius: 50%;
      border: 5px solid #FFF;
      animation: prixClipFix 2s linear infinite ;
    }
    @keyframes rotate {
      100%   {transform: rotate(360deg)}
    }
    @keyframes prixClipFix {
        0%   {clip-path:polygon(50% 50%,0 0,0 0,0 0,0 0,0 0)}
        25%  {clip-path:polygon(50% 50%,0 0,100% 0,100% 0,100% 0,100% 0)}
        50%  {clip-path:polygon(50% 50%,0 0,100% 0,100% 100%,100% 100%,100% 100%)}
        75%  {clip-path:polygon(50% 50%,0 0,100% 0,100% 100%,0 100%,0 100%)}
        100% {clip-path:polygon(50% 50%,0 0,100% 0,100% 100%,0 100%,0 0)}
    }

  </style>

<!-- ESTILOS ACTUALIZACION VERSION 1.3 FIN-->

<?php

if(function_exists('magazin_PostViews')){  magazin_PostViews(get_the_ID()); }

$carousel = get_post_meta(get_the_ID(), "magazin_post_carousel", true);

if ($carousel == "yes"){ ?>
	<div class="single-top">
		<?php echo do_shortcode('[posts type=carousel-post-slider]'); ?>
	</div> <?php
} else if ($carousel == "no"){
} else if (!empty($option['post_carousel'])){
	if ($option['post_carousel']=="1" or $option['post_carousel']=="yes" or $option['post_carousel']==""){ ?>
		<div class="single-top">
			<?php echo do_shortcode('[posts type=carousel-post-slider]'); ?>
		</div> <?php
	}
}
?>
<article itemscope itemtype="http://schema.org/Article">
<div class="post-content-wrap mt-content-container">
  <div style="padding:0 1%"> <!--class="container"-->
    <div class="row">
        <div itemprop="mainContentOfPage" style="border-bottom:none !important">
					<div id="fullpage">
					<div id="section0" class="section">
            <div id="contenedor_logo">
              <img id="logo_semana" src="../wp-content/themes/fullstory/inc/img/7asemana/logo_7asemana.png" alt="6a Semana Nacional de Ciencias Sociales"/>
            </div>
						<div style="position: absolute; left: 50%; bottom:10%">
							<!-- <img id="imagen_portada" src="../wp-content/themes/fullstory/inc/img/4asemana/portada_4asemana.jpg" alt="4a Semana Nacional de Ciencias Sociales"/> -->
              <!-- <img id="imagen_portada_movil" style="display:none" src="../wp-content/themes/fullstory/inc/img/3asemana/portada_3asemana_movil.jpg" alt="3a Semana Nacional de Ciencias Sociales"/> -->
              <h1 class="titulo-inicial" style="position: relative; left: -50%; text-transform: uppercase" ><a style="color:#ec6245; font-weight:bold; font-weight:bold" href="#cartelera">Programa nacional  <img class="bounce" src="../wp-content/themes/fullstory/inc/img/3asemana/down_3asemana.png"></a></h1>
						</div>
						<!-- <div>
							<h1 class="titulo-inicial" style="text-align:center;"><a style="color:#101a57" href="https://www.comecso.com/3asemana/programa#cartelera">Programa nacional  <img class="bounce" src="../wp-content/themes/fullstory/inc/img/3asemana/down_3asemana.png"></a></h1>
						</div> -->
					</div>
<div id="section1" class="section" style="/*padding:0 .1%*/">
					<div class="banner">
            <p class="link-descarga"><a target="_blank" href="https://www.comecso.com/wp-content/uploads/2023/09/programa6sncs.pdf">Descargar</a></p>
					</div>
					<div>
					  <article class="elemento-acordeon-lunes">
					    <h2>Lunes</h2>
					    <div class="contenedor-acordeon scrollable-element">
					      <h3 class="nombres_dias">Lunes 7 de octubre</h3>
								<div class="contenedor-dia">
									<?php
									function query_titulos ($condicional,$dia) {
									$busqueda = new WP_Query($condicional);
									$posts_ids = wp_list_pluck($busqueda->posts, 'ID') ;

	                                foreach ($posts_ids as $posts_id) {
	                                        $arrayHorarios[$posts_id] = get_field('horario_inicio_'.$dia.'', $posts_id);
	                                }
											uasort($arrayHorarios, function($a, $b) {
											return (strtotime($a) > strtotime($b));
	                                });

									foreach ($arrayHorarios as $key => $value) {
               								 $array_tipos_actividad = get_field('tipo_actividad', $key);
                                    $horarioFin = get_field('horario_termino_'.$dia.'', $key);
                   									echo '<p class="titulos_cartelera" style="padding: 0"><b><a target="_blank" href="' . get_permalink($key) . '">' . $array_tipos_actividad[0]->name . ': ' . get_the_title($key) . '</a></b>, '. $arrayHorarios[$key]  .' a '. $horarioFin .'</p>';
                 								}
									}
									?>
								<div>
									<div class="destacadas" style="display:flex; padding:0 10% 0 0%;">
										<div class="primera-col" style="width:50%;">
                      <div class="elemento-destacadas">
                      <!-- <?//php echo do_shortcode('[posts item_nr=2 type="small-two-4asemana" orderby="shares_4asemana_destacadas" position="left" title_type="hide" taxonomy="dias_4asemana" taxonomy_term="lunes" ]');?> -->
                      </div>
                      <?php $condicional = array ('post_type' => '6asemana', 'dias_6asemana' => 'lunes', 'post_status' => array('publish'), 'posts_per_page' => 200);
                      $dia1 = 'lunes';
											?>
											<?php //query_titulos($condicional,$dia1) ?>

                      <!-- INICIO CODIGO ACTUALIZACION LUNES -->
                        <?php
                          function query_rand_6asemana_movil($dia){
                            $condicional = array ('post_type' => '6asemana', 'dias_6asemana' => $dia, 'post_status' => array('publish'), 'orderby' => 'rand', 'posts_per_page' => -1);
                            $busqueda = new WP_Query($condicional);
                            $posts_ids = wp_list_pluck($busqueda->posts, 'ID');
                            $contador = 0;

                            foreach ($posts_ids as $post_id) {
                              if ($contador == 0) {
                                $imagen = get_field('imagen_destacada', $post_id);
                                if (!empty($imagen)) {
                                  $thumbnail = $imagen[ 'sizes' ][ 'thumbnail' ];
                                  $titulo = get_the_title( $post_id );
                                  $permalink = get_the_permalink( $post_id );
                                  echo '<div class="container">';
                                    echo '<div class="row">';
                                      echo '<div class="col-xs-12">';
                                        echo '<p class="text-center"><a href="'.$permalink.'" target="_blank"><img src="'.esc_url($thumbnail).'" alt="thumbnail"></a></p>';
                                        echo '<p class="text-center"><a href="'.$permalink.'" target="_blank">'.$titulo.'</a></p>';
                                      echo '</div>';
                                    echo '</div>';
                                  echo '</div>';
                                  $contador++;
                                }
                              }
                            }
                          }
                          function query_rand_6asemana_desktop($dia){
                            $condicional = array ('post_type' => '6asemana', 'dias_6asemana' => $dia, 'post_status' => array('publish'), 'orderby' => 'rand', 'posts_per_page' => -1);
                            $busqueda = new WP_Query($condicional);
                            $posts_ids = wp_list_pluck($busqueda->posts, 'ID');
                            $contador = 0;

                            echo '<div class="flex-padre">';
                              foreach ($posts_ids as $post_id) {
                                if ($contador < 3) {
                                  $imagen = get_field('imagen_destacada', $post_id);
                                  if (!empty($imagen)) {
                                    $thumbnail = $imagen[ 'sizes' ][ 'thumbnail' ];
                                    $titulo = get_the_title( $post_id );
                                    $characterCount = strlen($titulo);
                                    if ($characterCount > 85) {
                                      $titulo = substr($titulo, 0, 85).'...';
                                    }
                                    $permalink = get_the_permalink( $post_id );
                                      echo '<section class="flex-hijo-33">';
                                        echo '<span class="text-center"><a href="'.$permalink.'" target="_blank"><img src="'.esc_url($thumbnail).'" alt="thumbnail" class="img-responsive"></a></span>';
                                        echo '<span class="text-center"><a href="'.$permalink.'" target="_blank">'.$titulo.'</a></span>';
                                      echo '</section>';
                                    $contador++;
                                  }
                                }
                              }
                            echo '</div>'; 
                          }
                          function pestana_inicial($dia){
                            $condicional = array ('post_type' => '6asemana', 'dias_6asemana' => $dia, 'post_status' => array('publish'), 'posts_per_page' => -1);
                            $busqueda = new WP_Query($condicional);
                            $posts_ids = wp_list_pluck($busqueda->posts, 'ID') ;

                            foreach ($posts_ids as $posts_id) {
                                if (get_field('tipo_evento', $posts_id) == 'En linea'){
                                    $arrayHorarios[$posts_id] = get_field('horario_inicio_'.$dia.'', $posts_id);
                                }
                            }

                            uasort($arrayHorarios, function($a, $b) { return (strtotime($a) > strtotime($b)); });

                            foreach ($arrayHorarios as $key => $value) {
                                $array_tipos_actividad = get_field('tipo_actividad', $key);
                                $horarioFin = get_field('horario_termino_'.$dia.'', $key);
                                echo '<p class="titulos_cartelera" style="padding: 0"><b><a target="_blank" href="' . get_permalink($key) . '">' . $array_tipos_actividad[0]->name . ': ' . get_the_title($key) . '</a></b>, '. $arrayHorarios[$key]  .' a '. $horarioFin .'</p>';
                            }
                          }
                        ?>
                               
                        <div class="escaparate-movil">
                          <?php query_rand_6asemana_movil('lunes'); ?>
                        </div>
                        
                        <div class="escaparate-desktop">
                          <?php query_rand_6asemana_desktop('lunes'); ?>
                        </div>
                        
                        <div id="menu-lunes" class="flex-padre-start">
                            <button type="button" class="boton-6asemana activo" onclick="loadDay('lunes', 'En linea', '#eventos-lunes')">En linea</button>
                            <button type="button" class="boton-6asemana" onclick="loadDay('lunes', 'Presencial', '#eventos-lunes')">Presencial</button>
                            <button type="button" class="boton-6asemana" onclick="loadDay('lunes', 'Presencial y en linea', '#eventos-lunes')">Presencial y en linea</button>
                        </div>

                        <div class="container-loader">
                          <span class="loader"></span>
                        </div>
                        
                        <section id="eventos-lunes">
                          <?php pestana_inicial('lunes'); ?>
                        </section>

                      <!-- FIN CODIGO ACTUALIZACION LUNES -->

										</div>
										<div class="segunda-col" style="width:50% !important">
											<!-- <?php echo do_shortcode('[posts item_nr=2 type="small-two-4asemana" orderby="shares_4asemana_destacadas" position="left" title_type="hide" taxonomy="dias_4asemana" offset=2 taxonomy_term="lunes" ]');?> -->
										</div>
									</div>
								</div>
							</div>
						</div>
					  </article>
					  <article class="elemento-acordeon-martes">
            <h2>Martes</h2>
            <div class="contenedor-acordeon scrollable-element">
              <h3 class="nombres_dias">Martes 8 de octubre</h3>
              <div class="destacadas" style="display:flex; padding:0 10% 0 0%;">
                  <div class="primera-col-martes" style="width:50%;">
                    <div class="elemento-destacadas">
                    <!-- <?//php echo do_shortcode('[posts item_nr=2 type="small-two-4asemana" orderby="shares_4asemana_destacadas" position="left" title_type="hide" taxonomy="dias_4asemana" taxonomy_term="martes" ]');?> -->
                    </div>
                    <?php $condicional1 = array ('post_type' => '6asemana', 'dias_6asemana' => 'martes', 'post_status' => array('publish'), 'posts_per_page' => 200); ?>
                    <?php $dia2 = 'martes'; ?>
                    <?php //query_titulos($condicional1,$dia2) ?>

                    <!-- INICIO CODIGO ACTUALIZACION MARTES -->
                        <div class="escaparate-movil">
                          <?php query_rand_6asemana_movil('martes'); ?>
                        </div>
                        
                        <div class="escaparate-desktop">
                          <?php query_rand_6asemana_desktop('martes'); ?>
                        </div>
                        
                        <div id="menu-martes" class="flex-padre-start">
                            <button type="button" class="boton-6asemana activo" onclick="loadDay('martes', 'En linea', '#eventos-martes')">En linea</button>
                            <button type="button" class="boton-6asemana" onclick="loadDay('martes', 'Presencial', '#eventos-martes')">Presencial</button>
                            <button type="button" class="boton-6asemana" onclick="loadDay('martes', 'Presencial y en linea', '#eventos-martes')">Presencial y en linea</button>
                        </div>

                        <div class="container-loader">
                          <span class="loader"></span>
                        </div>

                        <section id="eventos-martes">
                          <?php pestana_inicial('martes'); ?>
                        </section>
                    <!-- FIN CODIGO ACTUALIZACION MARTES -->

                  </div>
                  <div class="segunda-col" style="width:50% !important">
                    <!-- <?php echo do_shortcode('[posts item_nr=2 type="small-two-4asemana" orderby="shares_4asemana_destacadas" position="left" title_type="hide" taxonomy="dias_4asemana" offset=2 taxonomy_term="martes" ]');?> -->
                  </div>
              </div>
            </div>
					  </article>
					  <article class="elemento-acordeon scrollable-element">
					    <h2>Miércoles</h2>
					    <div class="contenedor-acordeon scrollable-element">
					      <h3 class="nombres_dias">Miércoles 9 de octubre</h3>
								<div class="destacadas" style="display:flex; padding:0 10% 0 0%;">
										<div class="primera-col-miercoles" style="width:50%;">
                      <div class="elemento-destacadas">
											<!-- <?php echo do_shortcode('[posts item_nr=2 type="small-two-4asemana" orderby="shares_4asemana_destacadas" position="left" title_type="hide" taxonomy="dias_4asemana" taxonomy_term="miercoles" ]');?> -->
                      </div>
                      <?php $condicional2 = array ('post_type' => '6asemana', 'dias_6asemana' => 'miercoles', 'post_status' => array('publish'), 'posts_per_page' => 200); ?>
											<?php $dia3 = 'miercoles'; ?>
											<?php //query_titulos($condicional2,$dia3) ?>

                        <!-- INICIO CODIGO ACTUALIZACION MIERCOLES -->
                          <div class="escaparate-movil">
                            <?php query_rand_6asemana_movil('miercoles'); ?>
                          </div>
                          
                          <div class="escaparate-desktop">
                            <?php query_rand_6asemana_desktop('miercoles'); ?>
                          </div>
                          
                          <div id="menu-miercoles" class="flex-padre-start">
                              <button type="button" class="boton-6asemana activo" onclick="loadDay('miercoles', 'En linea', '#eventos-miercoles')">En linea</button>
                              <button type="button" class="boton-6asemana" onclick="loadDay('miercoles', 'Presencial', '#eventos-miercoles')">Presencial</button>
                              <button type="button" class="boton-6asemana" onclick="loadDay('miercoles', 'Presencial y en linea', '#eventos-miercoles')">Presencial y en linea</button>
                          </div>

                          <div class="container-loader">
                            <span class="loader"></span>
                          </div>

                          <section id="eventos-miercoles">
                            <?php pestana_inicial('miercoles'); ?>
                          </section>
                        <!-- FIN CODIGO ACTUALIZACION MIERCOLES -->

										</div>
										<div class="segunda-col" style="width:50% !important">
											<!-- <?php echo do_shortcode('[posts item_nr=2 type="small-two-4asemana" orderby="shares_4asemana_destacadas" position="left" title_type="hide" taxonomy="dias_4asemana" offset=2 taxonomy_term="miercoles" ]');?> -->
										</div>
								</div>
							</div>
					  </article>
					  <article class="elemento-acordeon">
					    <h2>Jueves</h2>
					    <div class="contenedor-acordeon scrollable-element">
					      <h3 class="nombres_dias">Jueves 10 de octubre</h3>
								<div class="destacadas" style="display:flex; padding:0 10% 0 0%;">
										<div class="primera-col-jueves" style="width:50%;">
                      <div class="elemento-destacadas">
                      <!-- <?//php echo do_shortcode('[posts item_nr=2 type="small-two-4asemana" orderby="shares_4asemana_destacadas" position="left" title_type="hide" taxonomy="dias_4asemana" taxonomy_term="jueves" ]');?> -->
                      </div>
                      <?php $condicional3 = array ('post_type' => '6asemana', 'dias_6asemana' => 'jueves', 'post_status' => array('publish'), 'posts_per_page' => 200); ?>
											<?php $dia4 = 'jueves'; ?>
											<?php //query_titulos($condicional3,$dia4) ?>

                        <!-- INICIO CODIGO ACTUALIZACION JUEVES -->
                          <div class="escaparate-movil">
                            <?php query_rand_6asemana_movil('jueves'); ?>
                          </div>
                          
                          <div class="escaparate-desktop">
                            <?php query_rand_6asemana_desktop('jueves'); ?>
                          </div>
                          
                          <div id="menu-jueves" class="flex-padre-start">
                              <button type="button" class="boton-6asemana activo" onclick="loadDay('jueves', 'En linea', '#eventos-jueves')">En linea</button>
                              <button type="button" class="boton-6asemana" onclick="loadDay('jueves', 'Presencial', '#eventos-jueves')">Presencial</button>
                              <button type="button" class="boton-6asemana" onclick="loadDay('jueves', 'Presencial y en linea', '#eventos-jueves')">Presencial y en linea</button>
                          </div>

                          <div class="container-loader">
                            <span class="loader"></span>
                          </div>

                          <section id="eventos-jueves">
                            <?php pestana_inicial('jueves'); ?>
                          </section>
                        <!-- FIN CODIGO ACTUALIZACION JUEVES -->

										</div>
										<div class="segunda-col" style="width:50% !important">
											<!-- <?php echo do_shortcode('[posts item_nr=2 type="small-two-4asemana" orderby="shares_4asemana_destacadas" position="left" title_type="hide" taxonomy="dias_4asemana" offset=2 taxonomy_term="jueves" ]');?> -->
										</div>
								</div>
						</div>
					  </article>
					  <article class="elemento-acordeon">
					    <h2>Viernes</h2>
					    <div class="contenedor-acordeon scrollable-element">
					      <h3 class="nombres_dias">Viernes 11 de octubre</h3>
								<div class="destacadas" style="display:flex; padding:0 10% 0 0%;">
										<div class="primera-col-viernes" style="width:50%;min-height:10%">
                      <div class="elemento-destacadas">
											<!-- <?//php echo do_shortcode('[posts item_nr=2 type="small-two-4asemana" orderby="shares_4asemana_destacadas" position="left" title_type="hide" taxonomy="dias_4asemana" taxonomy_term="viernes" ]');?> -->
                      </div>
                      <?php $condicional4 = array ('post_type' => '6asemana', 'dias_6asemana' => 'viernes', 'post_status' => array('publish'), 'posts_per_page' => 200); ?>
											<?php $dia5 = 'viernes'; ?>
											<?php //query_titulos($condicional4,$dia5) ?>

                      <!-- INICIO CODIGO ACTUALIZACION VIERNES -->
                         <div class="escaparate-movil">
                            <?php query_rand_6asemana_movil('viernes'); ?>
                          </div>
                          
                          <div class="escaparate-desktop">
                            <?php query_rand_6asemana_desktop('viernes'); ?>
                          </div>
                          
                          <div id="menu-viernes" class="flex-padre-start">
                              <button type="button" class="boton-6asemana activo" onclick="loadDay('viernes', 'En linea', '#eventos-viernes')">En linea</button>
                              <button type="button" class="boton-6asemana" onclick="loadDay('viernes', 'Presencial', '#eventos-viernes')">Presencial</button>
                              <button type="button" class="boton-6asemana" onclick="loadDay('viernes', 'Presencial y en linea', '#eventos-viernes')">Presencial y en linea</button>
                          </div>

                          <div class="container-loader">
                            <span class="loader"></span>
                          </div>

                          <section id="eventos-viernes">
                            <?php pestana_inicial('viernes'); ?>
                          </section>
                      <!-- FIN CODIGO ACTUALIZACION VIERNES -->

										</div>
										<div class="segunda-col" style="width:50% !important">
											<!-- <?php echo do_shortcode('[posts item_nr=2 type="small-two-4asemana" orderby="shares_4asemana_destacadas" position="left" title_type="hide" taxonomy="dias_4asemana" offset=2 taxonomy_term="viernes" ]');?> -->
										</div>
								</div>
						 </div>
						  </div>						 
					  </article>
					  </div>
			</div>
			
			<div id="section2" class="section">
				<div class="banner">
					<p class="link-descarga"><a target="_blank" href="https://www.comecso.com/wp-content/uploads/2023/09/programa6sncs.pdf">Descargar</a></p>
				</div>
				<div style="height:92%">
				<div class="flex-grid" style="padding:1% 12%">
				   <div class="col" style="width:100%">
							<h3 style="width: 120%;">Talleres</h3>
							<?php
							$talleres = array();
                            $condicional = array ('post_type' => '7asemana', 'tipos_7asemana' => 'curso-taller', 'taxonomy' => 5665,/*'author__in'=> array(2),*/ 'post_status' => array('publish'), 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'title');
                            $busqueda = new WP_Query($condicional);
                            $posts_ids = wp_list_pluck($busqueda->posts, 'ID');

                            foreach ($posts_ids as $post_id) {
                                $titulo = get_the_title($post_id);
                                $enlace = get_permalink($post_id);
                                echo '<p class="parrafo-instituciones"><a target="_blank" href="' . esc_url( $enlace ) . '">' . $titulo . '</a></p>';
                            }
							?>
					</div>
				</div>
</div>
<div id="section3" class="section">
				<div class="banner">
					<p class="link-descarga"><a target="_blank" href="https://www.comecso.com/wp-content/uploads/2023/09/programa6sncs.pdf">Descargar</a></p>
				</div>
				<div style="height:92%">
				<div class="flex-grid" style="padding:1% 12%">
				   <div class="col">
							<h3 style="width: 120%;" class="titulo-estados">Estados que participan</h3>
							<?php
							$estados = get_terms([
									'taxonomy' => 'estados_7asemana',
									'hide_empty' => true,
									'number' => 15,
									'orderby' => 'name',
								]);
								if ( !empty( $estados ) && !is_wp_error( $estados ) ){
								// echo '<ul>';
								foreach ( $estados as $estado ) {
									 $estado = sanitize_term( $estado, 'estados_7asemana' );
									 $estado_link = get_term_link( $estado, 'estados_7asemana' );
										echo '<p class="parrafo-instituciones"><a target="_blank" href="' . esc_url( $estado_link ) . '">' . $estado->name . '&nbsp;(' . $estado->count . ')' . '</a></p>';
								}
								// echo '</ul>';
								}
							?>
					</div>
					<div class="col">
						<h3 class="titulo--" style="color:#2c2f74">-</h3>
							<?php
							$estados = get_terms([
									'taxonomy' => 'estados_7asemana',
									'hide_empty' => true,
									'number' => 15,
									'offset' => 15,
									'orderby' => 'name',
								]);
								if ( !empty( $estados ) && !is_wp_error( $estados ) ){
								// echo '<ul>';
								foreach ( $estados as $estado ) {
									 $estado = sanitize_term( $estado, 'estados_7asemana' );
									 $estado_link = get_term_link( $estado, 'estados_7asemana' );
										echo '<p class="parrafo-instituciones"><a target="_blank" href="' . esc_url( $estado_link ) . '">' . $estado->name . '&nbsp;(' . $estado->count . ')' . '</a></p>';
								}
								// echo '</ul>';
								}
							?>
					</div>
					<div class="col">
						<h3>Disciplinas</h3>
							<?php
							$disciplinas = get_terms([
									'taxonomy' => 'disciplinas_7asemana',
									'hide_empty' => true,
									'number' => 15,
									'orderby' => 'name',
								]);
								if ( !empty( $disciplinas ) && !is_wp_error( $disciplinas ) ){
								// echo '<ul>';
								foreach ( $disciplinas as $disciplina ) {
									 $disciplina = sanitize_term( $disciplina, 'disciplinas_7asemana' );
									 $disciplina_link = get_term_link( $disciplina, 'disciplinas_7asemana' );
										echo '<p class="parrafo-instituciones"><a target="_blank" href="' . esc_url( $disciplina_link ) . '">' . $disciplina->name . '&nbsp;(' . $disciplina->count . ')' . '</a></p>';
								}
								// echo '</ul>';
								}
							?>
					</div>
				</div>
  		    </div>
</div>
<div id="section4" class="section">
				<div class="banner">
					<p class="link-descarga"><a target="_blank" href="https://www.comecso.com/wp-content/uploads/2023/09/programa6sncs.pdf">Descargar</a></p>
				</div>
				<div style="height:92%">
				<div class="flex-grid" style="padding:1% 12%">
				   <div class="col">
							<h3>Tipos de actividad</h3>
							<?php
							$tipos = get_terms([
									'taxonomy' => 'tipos_7asemana',
									'hide_empty' => true,
									'number' => 15,
									'orderby' => 'name',
								]);
								if ( !empty( $tipos ) && !is_wp_error( $tipos ) ){
								// echo '<ul>';
								foreach ( $tipos as $tipo ) {
									 $tipo = sanitize_term( $tipo, 'tipos_7asemana' );
									 $tipo_link = get_term_link( $tipo, 'tipos_7asemana' );
										echo '<p class="parrafo-instituciones"><a target="_blank" href="' . esc_url( $tipo_link ) . '">' . $tipo->name . '&nbsp;(' . $tipo->count . ')' . '</a></p>';
								}
								// echo '</ul>';
								}
							?>
					</div>
					<div class="col">
						<h3 class="titulo--" style="color:#2c2f74">-</h3>
							<?php
							$tipos = get_terms([
									'taxonomy' => 'tipos_7asemana',
									'hide_empty' => true,
									'number' => 15,
									'offset' => 15,
									'orderby' => 'name',
								]);
								if ( !empty( $tipos ) && !is_wp_error( $tipos ) ){
								// echo '<ul>';
								foreach ( $tipos as $tipo ) {
									 $tipo = sanitize_term( $tipo, 'tipos_7asemana' );
									 $tipo_link = get_term_link( $tipo, 'tipos_7asemana' );
										echo '<p class="parrafo-instituciones"><a target="_blank" href="' . esc_url( $tipo_link ) . '">' . $tipo->name . '&nbsp;(' . $tipo->count . ')' . '</a></p>';
								}
								// echo '</ul>';
								}
							?>
					</div>
					<div class="col">
					</div>
				</div>
				</div>
</div>
<div id="section5" class="section">
				<div class="banner">
					<p class="link-descarga"><a target="_blank" href="https://www.comecso.com/wp-content/uploads/2023/09/programa6sncs.pdf">Descargar</a></p>
				</div>
				<div style="height:92%">
				<div class="flex-grid" style="padding:1% 12%">
				   <div class="col">
							<h3>Áreas temáticas</h3>
							<?php
							$areas = get_terms([
									'taxonomy' => 'areas_7asemana',
									'hide_empty' => true,
									'number' => 15,
									'orderby' => 'name',
								]);
								if ( !empty( $areas ) && !is_wp_error( $areas ) ){
								// echo '<ul>';
								foreach ( $areas as $area ) {
									 $area = sanitize_term( $area, 'areas_7asemana' );
									 $area_link = get_term_link( $area, 'areas_7asemana' );
										echo '<p class="parrafo-instituciones"><a target="_blank" href="' . esc_url( $area_link ) . '">' . $area->name . '&nbsp;(' . $area->count . ')' . '</a></p>';
								}
								// echo '</ul>';
								}
							?>
					</div>
					<div class="col">
						<h3 class="titulo--" style="color:#2c2f74">-</h3>
							<?php
							$areas = get_terms([
									'taxonomy' => 'areas_7asemana',
									'hide_empty' => true,
									'number' => 15,
									'offset' => 15,
									'orderby' => 'name',
								]);
								if ( !empty( $areas ) && !is_wp_error( $areas ) ){
								// echo '<ul>';
								foreach ( $areas as $area ) {
									 $area = sanitize_term( $area, 'areas_7asemana' );
									 $area_link = get_term_link( $area, 'areas_7asemana' );
										echo '<p class="parrafo-instituciones"><a target="_blank" href="' . esc_url( $area_link ) . '">' . $area->name . '&nbsp;(' . $area->count . ')' . '</a></p>';
								}
								// echo '</ul>';
								}
							?>
					</div>
					<div class="col">
						<h3 class="titulo--" style="color:#2c2f74">-</h3>
							<?php
							$areas = get_terms([
									'taxonomy' => 'areas_7asemana',
									'hide_empty' => true,
									'number' => 15,
									'offset' => 30,
									'orderby' => 'name',
								]);
								if ( !empty( $areas ) && !is_wp_error( $areas ) ){
								// echo '<ul>';
								foreach ( $areas as $area ) {
									 $area = sanitize_term( $area, 'areas_7asemana' );
									 $area_link = get_term_link( $area, 'areas_7asemana' );
										echo '<p class="parrafo-instituciones"><a target="_blank" href="' . esc_url( $area_link ) . '">' . $area->name . '&nbsp;(' . $area->count . ')' . '</a></p>';
								}
								// echo '</ul>';
								}
							?>
					</div>
				</div>
				</div>
</div>
<div id="section6" class="section">
				<div class="banner">
					<p class="link-descarga"><a target="_blank" href="https://www.comecso.com/wp-content/uploads/2023/09/programa6sncs.pdf">Descargar</a></p>
				</div>
				<div style="height:92%">
				<div class="flex-grid" style="padding:1% 12%">
				   <div class="col">
							<h3 class="titulo--">Áreas temáticas</h3>
							<?php
							$areas = get_terms([
									'taxonomy' => 'areas_7asemana',
									'hide_empty' => true,
									'number' => 15,
									'offset' => 45,
									'orderby' => 'name',
								]);
								if ( !empty( $areas ) && !is_wp_error( $areas ) ){
								// echo '<ul>';
								foreach ( $areas as $area ) {
									 $area = sanitize_term( $area, 'areas_7asemana' );
									 $area_link = get_term_link( $area, 'areas_7asemana' );
										echo '<p class="parrafo-instituciones"><a target="_blank" href="' . esc_url( $area_link ) . '">' . $area->name . '&nbsp;(' . $area->count . ')' . '</a></p>';
								}
								// echo '</ul>';
								}
							?>
					</div>
					<div class="col">
						<h3 class="titulo--" style="color:#2c2f74">-</h3>
							<?php
							$areas = get_terms([
									'taxonomy' => 'areas_7asemana',
									'hide_empty' => true,
									'number' => 15,
									'offset' => 60,
									'orderby' => 'name',
								]);
								if ( !empty( $areas ) && !is_wp_error( $areas ) ){
								// echo '<ul>';
								foreach ( $areas as $area ) {
									 $area = sanitize_term( $area, 'areas_7asemana' );
									 $area_link = get_term_link( $area, 'areas_7asemana' );
										echo '<p class="parrafo-instituciones"><a target="_blank" href="' . esc_url( $area_link ) . '">' . $area->name . '&nbsp;(' . $area->count . ')' . '</a></p>';
								}
								// echo '</ul>';
								}
							?>
					</div>
					<div class="col">
						<h3 class="titulo--" style="color:#2c2f74">-</h3>
							<?php
							$areas = get_terms([
									'taxonomy' => 'areas_7asemana',
									'hide_empty' => true,
									'number' => 15,
									'offset' => 75,
									'orderby' => 'name',
								]);
								if ( !empty( $areas ) && !is_wp_error( $areas ) ){
								// echo '<ul>';
								foreach ( $areas as $area ) {
									 $area = sanitize_term( $area, 'areas_7asemana' );
									 $area_link = get_term_link( $area, 'areas_7asemana' );
										echo '<p class="parrafo-instituciones"><a target="_blank" href="' . esc_url( $area_link ) . '">' . $area->name . '&nbsp;(' . $area->count . ')' . '</a></p>';
								}
								// echo '</ul>';
								}
							?>
					</div>
				</div>
				</div>
  		    </div>
			<div id="section7" class="section">
				<div class="banner">
          <p class="link-descarga"><a target="_blank" href="https://www.comecso.com/wp-content/uploads/2023/09/programa6sncs.pdf">Descargar</a></p>
        </div>
				<div style="height:92%">
						<h3 class="titulo-instituciones">Instituciones que participan</h3>
						<div class="flex-grid" style="padding:0 12%;">
						<div class="col">
							<?php
							$instituciones = get_terms([
									'taxonomy' => 'instituciones_7asemana',
									'hide_empty' => true,
									'number' => 15,
									'orderby' => 'name',
								]);
								if ( !empty( $instituciones ) && !is_wp_error( $instituciones ) ){
								// echo '<ul>';
								foreach ( $instituciones as $institucion ) {
									 $institucion = sanitize_term( $institucion, 'instituciones_7asemana' );
									 $institucion_link = get_term_link( $institucion, 'instituciones_7asemana' );
										echo '<p class="parrafo-instituciones"><a target="_blank" href="' . esc_url( $institucion_link ) . '">' . $institucion->name . '&nbsp;(' . $institucion->count . ')' . '</a></p>';
								}
								// echo '</ul>';
								}
							?>
						</div>
						<div class="col">
							<?php
							$instituciones = get_terms([
									'taxonomy' => 'instituciones_7asemana',
									'hide_empty' => true,
									'number' => 15,
									'offset' => 15,
									'orderby' => 'name',
								]);
								if ( !empty( $instituciones ) && !is_wp_error( $instituciones ) ){
								// echo '<ul>';
								foreach ( $instituciones as $institucion ) {
									 $institucion = sanitize_term( $institucion, 'instituciones_7asemana' );
									 $institucion_link = get_term_link( $institucion, 'instituciones_7asemana' );
										echo '<p class="parrafo-instituciones"><a target="_blank" href="' . esc_url( $institucion_link ) . '">' . $institucion->name . '&nbsp;(' . $institucion->count . ')' . '</a></p>';
								}
								// echo '</ul>';
								}
							?>
						</div>
						<div class="col">
              <?php
							$instituciones = get_terms([
									'taxonomy' => 'instituciones_7asemana',
									'hide_empty' => true,
									'number' => 15,
									'offset' => 30,
									'orderby' => 'name',
								]);
								if ( !empty( $instituciones ) && !is_wp_error( $instituciones ) ){
								// echo '<ul>';
								foreach ( $instituciones as $institucion ) {
									 $institucion = sanitize_term( $institucion, 'instituciones_7asemana' );
									 $institucion_link = get_term_link( $institucion, 'instituciones_7asemana' );
										echo '<p class="parrafo-instituciones"><a target="_blank" href="' . esc_url( $institucion_link ) . '">' . $institucion->name . '&nbsp;(' . $institucion->count . ')' . '</a></p>';
								}
								// echo '</ul>';
								}
							?>
            </div>
						</div>
			</div>
		</div>
			<div id="section8" class="section">
				<div class="banner">
          <p class="link-descarga"><a target="_blank" href="https://www.comecso.com/wp-content/uploads/2023/09/programa6sncs.pdf">Descargar</a></p>
        </div>
				<div style="height:92%">
						<h3 class="titulo-instituciones titulo--">Instituciones que participan</h3>
						<div class="flex-grid" style="padding:0 12%;">
						<div class="col">
							<?php
							$instituciones = get_terms([
									'taxonomy' => 'instituciones_7asemana',
									'hide_empty' => true,
									'number' => 15,
									'offset' => 45,
									'orderby' => 'name',
								]);
								if ( !empty( $instituciones ) && !is_wp_error( $instituciones ) ){
								// echo '<ul>';
								foreach ( $instituciones as $institucion ) {
									 $institucion = sanitize_term( $institucion, 'instituciones_7asemana' );
									 $institucion_link = get_term_link( $institucion, 'instituciones_7asemana' );
										echo '<p class="parrafo-instituciones"><a target="_blank" href="' . esc_url( $institucion_link ) . '">' . $institucion->name . '&nbsp;(' . $institucion->count . ')' . '</a></p>';
								}
								// echo '</ul>';
								}
							?>
						</div>
						<div class="col">
							<?php
							$instituciones = get_terms([
									'taxonomy' => 'instituciones_7asemana',
									'hide_empty' => true,
									'number' => 15,
									'offset' => 60,
									'orderby' => 'name',
								]);
								if ( !empty( $instituciones ) && !is_wp_error( $instituciones ) ){
								// echo '<ul>';
								foreach ( $instituciones as $institucion ) {
									 $institucion = sanitize_term( $institucion, 'instituciones_7asemana' );
									 $institucion_link = get_term_link( $institucion, 'instituciones_7asemana' );
										echo '<p class="parrafo-instituciones"><a target="_blank" href="' . esc_url( $institucion_link ) . '">' . $institucion->name . '&nbsp;(' . $institucion->count . ')' . '</a></p>';
								}
								// echo '</ul>';
								}
							?>
						</div>
						<div class="col">
              <?php
							$instituciones = get_terms([
									'taxonomy' => 'instituciones_7asemana',
									'hide_empty' => true,
									'number' => 15,
									'offset' => 75,
									'orderby' => 'name',
								]);
								if ( !empty( $instituciones ) && !is_wp_error( $instituciones ) ){
								// echo '<ul>';
								foreach ( $instituciones as $institucion ) {
									 $institucion = sanitize_term( $institucion, 'instituciones_7asemana' );
									 $institucion_link = get_term_link( $institucion, 'instituciones_7asemana' );
										echo '<p class="parrafo-instituciones"><a target="_blank" href="' . esc_url( $institucion_link ) . '">' . $institucion->name . '&nbsp;(' . $institucion->count . ')' . '</a></p>';
								}
								// echo '</ul>';
								}
							?>
            </div>
						</div>
			</div>
		</div>
<div id="section9" class="section">
  <div class="banner">
    <p class="link-descarga"><a target="_blank" href="https://www.comecso.com/wp-content/uploads/2023/09/programa6sncs.pdf">Descargar</a></p>
  </div>
  <div style="height:92%">
      <h3 class="titulo-instituciones titulo--">Entidades que participan</h3>
      <div class="flex-grid" style="padding:0 12%;">
 <div class="col">
            <?php
            $entidades = get_terms([
                'taxonomy' => 'entidades_7asemana',
                'hide_empty' => true,
                'number' => 14,
                'offset' => 0,
                'orderby' => 'name',
              ]);
              if ( !empty( $entidades ) && !is_wp_error( $entidades ) ){
              // echo '<ul>';
              foreach ( $entidades as $entidad ) {
                 $entidad = sanitize_term( $entidad, 'entidades_7asemana' );
                 $entidad_link = get_term_link( $entidad, 'entidades_7asemana' );
                  echo '<p class="parrafo-instituciones"><a target="_blank" href="' . esc_url( $entidad_link ) . '">' . $entidad->name . '&nbsp;(' . $entidad->count . ')' . '</a></p>';
              }
              // echo '</ul>';
              }
            ?>
          </div>
        <div class="col">
          <?php
          $entidades = get_terms([
              'taxonomy' => 'entidades_7asemana',
              'hide_empty' => true,
              'number' => 14,
              'offset' => 14,
              'orderby' => 'name',
            ]);
            if ( !empty( $entidades ) && !is_wp_error( $entidades ) ){
            // echo '<ul>';
            foreach ( $entidades as $entidad ) {
               $entidad = sanitize_term( $entidad, 'entidades_7asemana' );
               $entidad_link = get_term_link( $entidad, 'entidades_7asemana' );
                echo '<p class="parrafo-instituciones"><a target="_blank" href="' . esc_url( $entidad_link ) . '">' . $entidad->name . '&nbsp;(' . $entidad->count . ')' . '</a></p>';
            }
            // echo '</ul>';
            }
          ?>
        </div>
        <div class="col">
          <?php
          $entidades = get_terms([
              'taxonomy' => 'entidades_7asemana',
              'hide_empty' => true,
              'number' => 14,
              'offset' => 28,
              'orderby' => 'name',
            ]);
            if ( !empty( $entidades ) && !is_wp_error( $entidades ) ){
            // echo '<ul>';
            foreach ( $entidades as $entidad ) {
               $entidad = sanitize_term( $entidad, 'entidades_7asemana' );
               $entidad_link = get_term_link( $entidad, 'entidades_7asemana' );
                echo '<p class="parrafo-instituciones"><a target="_blank" href="' . esc_url( $entidad_link ) . '">' . $entidad->name . '&nbsp;(' . $entidad->count . ')' . '</a></p>';
            }
            // echo '</ul>';
            }
          ?>
        </div>
      </div>
</div>
</div>
<div id="section10" class="section">
  <div class="banner">
    <p class="link-descarga"><a target="_blank" href="https://www.comecso.com/wp-content/uploads/2023/09/programa6sncs.pdf">Descargar</a></p>
  </div>
  <div style="height:92%">
      <h3 class="titulo-instituciones titulo--">Entidades que participan</h3>
      <div class="flex-grid" style="padding:0 12%;">
        <div class="col">
          <?php
          $entidades = get_terms([
              'taxonomy' => 'entidades_7asemana',
              'hide_empty' => true,
              'number' => 14,
              'offset' => 42,
              'orderby' => 'name',
            ]);
            if ( !empty( $entidades ) && !is_wp_error( $entidades ) ){
            // echo '<ul>';
            foreach ( $entidades as $entidad ) {
               $entidad = sanitize_term( $entidad, 'entidades_7asemana' );
               $entidad_link = get_term_link( $entidad, 'entidades_7asemana' );
                echo '<p class="parrafo-instituciones"><a target="_blank" href="' . esc_url( $entidad_link ) . '">' . $entidad->name . '&nbsp;(' . $entidad->count . ')' . '</a></p>';
            }
            // echo '</ul>';
            }
          ?>
        </div>
      <div class="col">
        <?php
        $entidades = get_terms([
            'taxonomy' => 'entidades_7asemana',
            'hide_empty' => true,
            'number' => 14,
            'offset' => 56,
            'orderby' => 'name',
          ]);
          if ( !empty( $entidades ) && !is_wp_error( $entidades ) ){
          // echo '<ul>';
          foreach ( $entidades as $entidad ) {
             $entidad = sanitize_term( $entidad, 'entidades_7asemana' );
             $entidad_link = get_term_link( $entidad, 'entidades_7asemana' );
              echo '<p class="parrafo-instituciones"><a target="_blank" href="' . esc_url( $entidad_link ) . '">' . $entidad->name . '&nbsp;(' . $entidad->count . ')' . '</a></p>';
          }
          // echo '</ul>';
          }
        ?>
      </div>
      <div class="col">
        <?php
        $entidades = get_terms([
            'taxonomy' => 'entidades_7asemana',
            'hide_empty' => true,
            'number' => 14,
            'offset' => 70,
            'orderby' => 'name',
          ]);
          if ( !empty( $entidades ) && !is_wp_error( $entidades ) ){
          // echo '<ul>';
          foreach ( $entidades as $entidad ) {
             $entidad = sanitize_term( $entidad, 'entidades_7asemana' );
             $entidad_link = get_term_link( $entidad, 'entidades_7asemana' );
              echo '<p class="parrafo-instituciones"><a target="_blank" href="' . esc_url( $entidad_link ) . '">' . $entidad->name . '&nbsp;(' . $entidad->count . ')' . '</a></p>';
          }
          // echo '</ul>';
          }
        ?>
      </div>
      </div>
</div>
</div>
<div id="section11" class="section">
  <div class="banner">
    <p class="link-descarga"><a target="_blank" href="https://www.comecso.com/wp-content/uploads/2023/09/programa6sncs.pdf">Descargar</a></p>
  </div>
  <div style="height:92%">
      <h3 class="titulo-instituciones titulo--">Entidades que participan</h3>
      <div class="flex-grid" style="padding:0 12%;">
        <div class="col">
            <?php
            $entidades = get_terms([
                'taxonomy' => 'entidades_7asemana',
                'hide_empty' => true,
                'number' => 14,
                'offset' => 84,
                'orderby' => 'name',
              ]);
              if ( !empty( $entidades ) && !is_wp_error( $entidades ) ){
              // echo '<ul>';
              foreach ( $entidades as $entidad ) {
                 $entidad = sanitize_term( $entidad, 'entidades_7asemana' );
                 $entidad_link = get_term_link( $entidad, 'entidades_7asemana' );
                  echo '<p class="parrafo-instituciones"><a target="_blank" href="' . esc_url( $entidad_link ) . '">' . $entidad->name . '&nbsp;(' . $entidad->count . ')' . '</a></p>';
              }
              // echo '</ul>';
              }
            ?>
          </div>
        <div class="col">
          <?php
          $entidades = get_terms([
              'taxonomy' => 'entidades_7asemana',
              'hide_empty' => true,
              'number' => 14,
              'offset' => 98,
              'orderby' => 'name',
            ]);
            if ( !empty( $entidades ) && !is_wp_error( $entidades ) ){
            // echo '<ul>';
            foreach ( $entidades as $entidad ) {
               $entidad = sanitize_term( $entidad, 'entidades_7asemana' );
               $entidad_link = get_term_link( $entidad, 'entidades_7asemana' );
                echo '<p class="parrafo-instituciones"><a target="_blank" href="' . esc_url( $entidad_link ) . '">' . $entidad->name . '&nbsp;(' . $entidad->count . ')' . '</a></p>';
            }
            // echo '</ul>';
            }
          ?>
        </div>
        <div class="col">
          <?php
          $entidades = get_terms([
              'taxonomy' => 'entidades_7asemana',
              'hide_empty' => true,
              'number' => 14,
              'offset' => 112,
              'orderby' => 'name',
            ]);
            if ( !empty( $entidades ) && !is_wp_error( $entidades ) ){
            // echo '<ul>';
            foreach ( $entidades as $entidad ) {
               $entidad = sanitize_term( $entidad, 'entidades_7asemana' );
               $entidad_link = get_term_link( $entidad, 'entidades_7asemana' );
                echo '<p class="parrafo-instituciones"><a target="_blank" href="' . esc_url( $entidad_link ) . '">' . $entidad->name . '&nbsp;(' . $entidad->count . ')' . '</a></p>';
            }
            // echo '</ul>';
            }
          ?>
        </div>
      </div>
</div>
</div>
<div id="section12" class="section">
  <div class="banner">
    <p class="link-descarga"><a target="_blank" href="https://www.comecso.com/wp-content/uploads/2023/09/programa6sncs.pdf">Descargar</a></p>
  </div>
  <div style="height:92%">
      <h3 class="titulo-instituciones titulo--">Entidades que participan</h3>
      <div class="flex-grid" style="padding:0 12%;">
          <div class="col">
            <?php
            $entidades = get_terms([
                'taxonomy' => 'entidades_7asemana',
                'hide_empty' => true,
                'number' => 14,
                'offset' => 126,
                'orderby' => 'name',
              ]);
              if ( !empty( $entidades ) && !is_wp_error( $entidades ) ){
              // echo '<ul>';
              foreach ( $entidades as $entidad ) {
                 $entidad = sanitize_term( $entidad, 'entidades_7asemana' );
                 $entidad_link = get_term_link( $entidad, 'entidades_7asemana' );
                  echo '<p class="parrafo-instituciones"><a target="_blank" href="' . esc_url( $entidad_link ) . '">' . $entidad->name . '&nbsp;(' . $entidad->count . ')' . '</a></p>';
              }
              // echo '</ul>';
              }
            ?>
          </div>
        <div class="col">
          <?php
          $entidades = get_terms([
              'taxonomy' => 'entidades_7asemana',
              'hide_empty' => true,
              'number' => 14,
              'offset' => 140,
              'orderby' => 'name',
            ]);
            if ( !empty( $entidades ) && !is_wp_error( $entidades ) ){
            // echo '<ul>';
            foreach ( $entidades as $entidad ) {
               $entidad = sanitize_term( $entidad, 'entidades_7asemana' );
               $entidad_link = get_term_link( $entidad, 'entidades_7asemana' );
                echo '<p class="parrafo-instituciones"><a target="_blank" href="' . esc_url( $entidad_link ) . '">' . $entidad->name . '&nbsp;(' . $entidad->count . ')' . '</a></p>';
            }
            // echo '</ul>';
            }
          ?>
        </div>
        <div class="col">
          <?php
          $entidades = get_terms([
              'taxonomy' => 'entidades_7asemana',
              'hide_empty' => true,
              'number' => 14,
              'offset' => 154,
              'orderby' => 'name',
            ]);
            if ( !empty( $entidades ) && !is_wp_error( $entidades ) ){
            // echo '<ul>';
            foreach ( $entidades as $entidad ) {
               $entidad = sanitize_term( $entidad, 'entidades_7asemana' );
               $entidad_link = get_term_link( $entidad, 'entidades_7asemana' );
                echo '<p class="parrafo-instituciones"><a target="_blank" href="' . esc_url( $entidad_link ) . '">' . $entidad->name . '&nbsp;(' . $entidad->count . ')' . '</a></p>';
            }
            // echo '</ul>';
            }
          ?>
        </div>
      </div>
</div>
</div>
<!-- Fin de las secciones -->
  </div>
</div>
</div>
</div>
</div>
<div class="hidde" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
	<meta itemprop="url" content="<?php echo get_the_post_thumbnail_url(get_the_ID(),"large"); ?>">
	<meta itemprop="width" content="1200"><meta itemprop="height" content="801">
</div>
<div class="hidde" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
	<div class="hidde" itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
	<?php $option = get_option("fullstory_theme_options"); ?>
	<?php if(!empty($option['header_logo'])) { ?><meta itemprop="url" content="<?php echo esc_url($option['header_logo']); ?>"><?php } ?>
	<?php if(!empty($option['logo_width'])) { ?><meta itemprop="width" content="<?php echo esc_attr($option['logo_width']); ?>"><?php } ?>
	<?php if(!empty($option['logo_height'])) { ?><meta itemprop="height" content="<?php echo esc_attr($option['logo_height']); ?>"><?php } ?>
	</div>
	<?php $publisher = get_option("mt_shema_publisher");  if(!empty($publisher)) {  ?><meta itemprop="name" content="<?php echo esc_attr($publisher); ?>"><?php } ?>
</div>
</article>
<script type="text/javascript" src="../wp-content/themes/fullstory/inc/js/scrolloverflow.js"></script>
<script type="text/javascript" src="../wp-content/themes/fullstory/inc/js/fullpage.js"></script>
<script type="text/javascript">
var myFullpage = new fullpage('#fullpage', {
		anchors: ['portada','cartelera','talleres','estados','tipos','tematicas','tematicas-','instituciones','instituciones-','entidades','entidades-','entidades--','entidades---'],
		sectionsColor: ['white', 'white'],
		normalScrollElements: '.scrollable-element',
		//menu: true,
		verticalCentered: false,
		responsiveWidth: 800,
		//scrollOverflow: true,
		scrollBar: true
});
</script>
<script>
(function($) {
    var $window = jQuery(window),
        $html = jQuery('#section1');

    $window.resize(function resize(){
        if ($window.width() < 800) {
            return $html.addClass('scrollable-element');
        }
        $html.removeClass('scrollable-element');
    }).trigger('resize');
})(jQuery);
(function($) {
    var $window = jQuery(window),
        $html = jQuery('#section2');

    $window.resize(function resize(){
        if ($window.width() < 800) {
            return $html.addClass('scrollable-element');
        }
        $html.removeClass('scrollable-element');
    }).trigger('resize');
})(jQuery);
(function($) {
    var $window = jQuery(window),
        $html = jQuery('#section3');

    $window.resize(function resize(){
        if ($window.width() < 800) {
            return $html.addClass('scrollable-element');
        }
        $html.removeClass('scrollable-element');
    }).trigger('resize');
})(jQuery);
(function($) {
    var $window = jQuery(window),
        $html = jQuery('#section4');

    $window.resize(function resize(){
        if ($window.width() < 800) {
            return $html.addClass('scrollable-element');
        }
        $html.removeClass('scrollable-element');
    }).trigger('resize');
})(jQuery);
(function($) {
    var $window = jQuery(window),
        $html = jQuery('#section5');

    $window.resize(function resize(){
        if ($window.width() < 800) {
            return $html.addClass('scrollable-element');
        }
        $html.removeClass('scrollable-element');
    }).trigger('resize');
})(jQuery);
(function($) {
    var $window = jQuery(window),
        $html = jQuery('#section6');

    $window.resize(function resize(){
        if ($window.width() < 800) {
            return $html.addClass('scrollable-element');
        }
        $html.removeClass('scrollable-element');
    }).trigger('resize');
})(jQuery);
(function($) {
    var $window = jQuery(window),
        $html = jQuery('#section7');

    $window.resize(function resize(){
        if ($window.width() < 800) {
            return $html.addClass('scrollable-element');
        }
        $html.removeClass('scrollable-element');
    }).trigger('resize');
})(jQuery);
</script>
<!--
<script>
  // --------------		
  // BOTONES LINEA PRESENCIAL AMBOS
  // -----
  
  // Obtén todos los botones del menú
  var botones = document.querySelectorAll("#menu-lunes button");
  var botones2 = document.querySelectorAll("#menu-martes button");
  var botones3 = document.querySelectorAll("#menu-miercoles button");
  var botones4 = document.querySelectorAll("#menu-jueves button");
  var botones5 = document.querySelectorAll("#menu-viernes button");

  // Agrega un evento clic a cada botón
  botones.forEach(function(boton) {
    boton.addEventListener("click", function() {
      // Elimina la clase "activo" de todos los botones
      botones.forEach(function(boton) {
        boton.classList.remove("activo");
      });

      // Agrega la clase "activo" solo al botón que se hizo clic
      this.classList.add("activo");
    });
  });
  botones2.forEach(function(boton2) {
    boton2.addEventListener("click", function() {
      // Elimina la clase "activo" de todos los botones
      botones2.forEach(function(boton2) {
        boton2.classList.remove("activo");
      });

      // Agrega la clase "activo" solo al botón que se hizo clic
      this.classList.add("activo");
    });
  });
  botones3.forEach(function(boton3) {
    boton3.addEventListener("click", function() {
      // Elimina la clase "activo" de todos los botones
      botones3.forEach(function(boton3) {
        boton3.classList.remove("activo");
      });

      // Agrega la clase "activo" solo al botón que se hizo clic
      this.classList.add("activo");
    });
  });
  botones4.forEach(function(boton4) {
    boton4.addEventListener("click", function() {
      // Elimina la clase "activo" de todos los botones
      botones4.forEach(function(boton4) {
        boton4.classList.remove("activo");
      });

      // Agrega la clase "activo" solo al botón que se hizo clic
      this.classList.add("activo");
    });
  });
  botones5.forEach(function(boton5) {
    boton5.addEventListener("click", function() {
      // Elimina la clase "activo" de todos los botones
      botones5.forEach(function(boton5) {
        boton5.classList.remove("activo");
      });

      // Agrega la clase "activo" solo al botón que se hizo clic
      this.classList.add("activo");
    });
  });

  function loadDay(dia, tipo, contenedor){
        $.ajax({
            type: 'POST',
            url: "https://www.comecso.com/wp-admin/admin-ajax.php",
            data: {
                'action' : 'comecso_pestanas_6sncs',
                'dia' : dia,
                'tipo' : tipo
            },
            success:function(data) {
                $(contenedor).html(data);
            },
            error: function(errorThrown){
                console.log(errorThrown);
            }
        });
    }
</script>
-->
<script>
</script>
<?php get_footer(); ?>
