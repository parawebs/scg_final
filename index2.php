<?php
//if "email" variable is filled out, send email

  if (isset($_REQUEST['correo']))  {

  //Email information
  //$admin_email = "info@scgbusiness.com";
  $admin_email = "info@scgbusiness.com";
  $nombre = $_REQUEST['nombre'];
  $telefono = $_REQUEST['telefono'];
  $correo = $_REQUEST['correo'];
  $mensaje = $_REQUEST['mensaje'];

  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers = 'From: '.$correo . "\r\n";

  $message = "Nombre: ". $nombre."\nTelefono: ".$telefono."\nCorreo: ".$correo."\nMensaje: ".$mensaje;


  //send email
  if(mail($admin_email, $nombre,$message, $headers)){

  }else{
    echo("<p>'.$message.'!</p>");
  }

  //Email response
  //echo "Thank you for contacting us!";
  }

?>
<!DOCTYPE html>
<html lang="es_CR">
  <head>
    <meta charset="utf-8">
    <title>SCG</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Ek+Mukta:300,400" rel="stylesheet">
    <link rel="stylesheet" href="css/index2.css">
    <link rel="stylesheet" href="css/contact.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.4/js.cookie.min.js"></script>


    <script type="text/javascript">
      
       Cookies.set('googtrans','/es/en');

    </script>

  </head>
  <body>

  	<!-- Fixed Nav -->
  	<nav class="navbar navbar-default navbar-fixed-top" id="myScrollspy">
  		<div class="container">
  			<div class="navbar-header">
  				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
  					<span class="sr-only">Toggle navigation</span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  				</button>
  				<a class="navbar-brand" href="#"><img class="logo" src="img/logo.png" alt="SCG"></a>
  			</div>
  			<div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html">INICIO</a></li>
            <li><a href="index.html#spycontact">SERVICIOS</a></li>
            <li><a href="index.html#spyquien">QUIENES SOMOS</a></li>
            <li><a href="index.html#spygallery">ALQUILER DE OFICINAS</a></li>
            <li><a href="index.html#spyproyects">PROYECTOS</a></li>
            <li><a href="index.html#spycontact">CONTÁCTENOS</a></li>
            <li>
              
              <li class="dropdown">
                <a id="activo" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img class="lang" data-lang="español" src="img/spanish.png" alt="" ></a>
                <ul class="dropdown-menu">
                  <li><a href="#" id="inactivo"><img class="lang" src="img/english.png" data-lang="inglés"  alt=""></a></li>
                </ul>
              </li>
            
              
            <!--  <li class="dropdown">

                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img id="activo" src="img/spanish.png" alt=""></a>
                <ul class="dropdown-menu">
                  <li><a href="#"><img src="img/english.png" id="inactivo" alt=""></a></li>
                </ul>
              </li>-->
            </li>
          </ul>
        </div>
  		</div>
  	</nav>
  	<!-- //Close Fixed Nav -->

    <div class="banner">
      <h1 class="banner-text">ALQUILER DE OFICINAS </h1>
    </div>

    <div class="container">
      <div class="row business">

        <div class="col-lg-6 col-md-6 col-xs-12 sectionoficina">


        <h1 class="title-section-1 ">SCG BUSINESS CENTER</h1>
        <p class="body-section-1">
          Cuenta con inmejorables instalaciones y ofrece los servicios a las
            más competentes tarifas del mercado local. Localizado en una de las
            zonas de mayor relevancia del país, a tan solo 900 metros del
            centro comercial Multiplaza de Escazú, y a 20 minutos del aeropuerto
            internacional Santamaría.
        </p>



        </div>

        <div class="col-lg-6 col-md-6 col-xs-12">
            <img src="img/oficina2.jpg" alt="SCG" class="img-responsive">
        </div>

      </div>
      <br>
      <div class="row" id="servicios">

      </div>

      <div class="row">
        <h2 class="title-2" id="titulo2">Oficinas Físicas</h2>
        <div class="col-lg-6 col-md-6 col-xs-12">
          <img src="img/oficinanew.png" class="img-responsive" alt="SCG">
          <div class="llamenos"><div class="in-llamenos">LLÁMENOS AL <strong>+(506) 2215 5000</strong></div></div>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12 sectionoficina">
          <p class="body-section-1" id="oficinasFisicas">Nuestra perfecta ubicación en Guachipelin Escazú, le permitirá disfrutar de su oficina privada en la mejor zona comercial y empresarial del país. Completamente amobladas y con tecnología de punta, SCG le ofrece oficinas físicas permanentes para aumentar tanto su imagen corporativa como su productividad. Al tener los servicios de su oficina física podrá disfrutar de las áreas de cocina y café que son un espacio perfecto para tomar un descanso corto durante la jornada laboral.

          </p>

        </div>
      </div>

      <br>
      <div class="row">
        <h2 class="title-2" id="titulo3">Oficinas Temporales</h2>
        <div class="col-lg-6 col-md-6 col-xs-12">
          <img src="img/oficinaweb.png" class="img-responsive" alt="SCG">
          <div class="llamenos"><div class="in-llamenos">LLÁMENOS AL <strong>+(506) 2215 5000</strong></div></div>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12 sectionoficina">
          <p class="body-section-1" id="oficinasTemporales">Tiene una reunión de última hora ¿No tiene oficina actualmente? ¿Desea privacidad y confort?
          <br>
          Tenemos la solución: Nuestro servicio de oficinas temporales, disponible para su uso por horas, le permitirá poder disfrutar de oficinas ejecutivas con  parqueo , aire acondicionado , servicio telefónico de larga distancia y  wifi por las horas que estime necesario. Solo llame y reserve con anticipación y de la impresión que tanto necesita su negocio al mejor costo del mercado.  Otros beneficios de nuestras oficinas temporales son:

          </p>
          <ul id="ul" class="ul-oficinasTemporales">
            <li class="li"> &nbsp;&nbsp;Oficinas y salas de reuniones lujosamente amobladas.</li>
            <li class="li"> &nbsp;&nbsp;Ambiente de alta tecnología.</li>
            <li class="li"> &nbsp;&nbsp;Líneas telefónicas y de fax únicas para cada cliente.</li>
            <li class="li"> &nbsp;&nbsp;Servicios de contestador de llamadas personalizado.</li>
            <li class="li"> &nbsp;&nbsp;Acceso a internet de alta velocidad.</li>
            <li class="li"> &nbsp;&nbsp;Servicio de apoyo administrativo en el sitio.</li>
            <li class="li"> &nbsp;&nbsp;Arrendamiento de oficinas a corto o largo plazo</li>
          </ul>
        </div>
      </div>
      <br>
      <br>
      <div class="row">
        <h2 class="title-2" id="titulo4">Oficinas Virtuales</h2>
        <div class="col-lg-6 col-md-6 col-xs-12">
          <img src="img/oficina4.jpg" class="img-responsive" alt="SCG">
          <div class="llamenos"><div class="in-llamenos">LLÁMENOS AL <strong>+(506) 2215 5000</strong></div></div>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12 sectionoficina">
          <p class="body-section-1" id="oficinasVirtuales">Este novedoso concepto de oficina es una opción para la
            operación de su empresa, accediendo a manejarla efectivamente desde
            el lugar donde se encuentre. Con este formato usted podrá utilizar
            la dirección física de SCG-Business Center, como domicilio de su
            empresa, para la recepción de documentación y traslado. Cuenta con
            los servicios de recepción y redirección de llamadas, atención a
            clientes y/o visitas, disposición de las salas de reuniones y
            oficinas.
          </p>
        </div>
      </div>
      <br>
      <div class="row virtual">
        <div class="col-lg-6 col-md-6 col-xs-12">
          <h2 class="title-services" style="
    margin-bottom: 30px;
" id="titulo5">Virtual Oro</h2>
          <ul id="ul" class="virtualOro">
            <li class="li"> &nbsp;&nbsp;Domicilio físico de su empresa en SCG Business Centre</li>
            <li class="li"> &nbsp;&nbsp;Toma y reporte de mensajes</li>
            <li class="li"> &nbsp;&nbsp;Descuentos en salas y oficinas</li>
            <li class="li"> &nbsp;&nbsp;Atención de visitas</li>
            <li class="li"> &nbsp;&nbsp;Recepción de paquetes y documentos</li>
            <li class="li"> &nbsp;&nbsp;Manejo ilimitado de llamadas entrando</li>
            <li class="li"> &nbsp;&nbsp;Servicio de contestadora de llamadas personalizadas</li>
            <li class="li"> &nbsp;&nbsp;Servicio Bilingüe</li>
            <li class="li"> &nbsp;&nbsp;Servicio de desvió/transferencia de llamadas</li>
            <li class="li"> &nbsp;&nbsp;Estacionamiento libre durante sus visitas al Business Center</li>
            <li class="li"> &nbsp;&nbsp;Apartado postal local y en USA</li>
          </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12">
          <h2 class="title-services" style="
    margin-bottom: 30px;
" id="titulo6">Virtual Platinum</h2>
          <ul id="ul" class="virtualPlatinum">
            <li class="li"> &nbsp;&nbsp;Domicilio físico de su empresa en SCG Business Center</li>
            <li class="li"> &nbsp;&nbsp;Toma y reporte de mensajes</li>
            <li class="li"> &nbsp;&nbsp;Descuento en uso de salas y oficinas</li>
            <li class="li"> &nbsp;&nbsp;Atención de visitas</li>
            <li class="li"> &nbsp;&nbsp;Recepción de paquetes y documentos</li>
            <li class="li"> &nbsp;&nbsp;Manejo ilimitado de llamadas entrantes</li>
            <li class="li"> &nbsp;&nbsp;Servicio de contestadora de llamadas personalizadas</li>
             <li class="li"> &nbsp;&nbsp;Servicio Bilingüe </li>
             <li class="li"> &nbsp;&nbsp;Servicio de desvió/transferencia de llamadas</li>
             <li class="li"> &nbsp;&nbsp;Estacionamiento libre durante visitas al Business Center</li>
             <li class="li"> &nbsp;&nbsp;Apartado postal local y en USA</li>
             <li class="li"> &nbsp;&nbsp;Cuatro horas mensuales de uso de oficina o sala de reuniones</li>
             <li class="li"> &nbsp;&nbsp;Seis mensajerías al mes dentro del gran área metropolitana</li>
          </ul>
        </div>
      </div>

    </div>

    <div class="form-contact">
      <form action="" method="post">
        <div class="form-group">
          <label for="name">Nombre y Apellido:</label>
          <input type="email" class="form-control" id="name">
        </div>
        <div class="form-group">
          <label for="telefono">Teléfono:</label>
          <input type="text" class="form-control" id="telefono">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="text" class="form-control" id="email">
        </div>
        <div class="form-group">
          <label for="mensaje">Mensaje:</label>
          <textarea class="form-control" id="mensaje"></textarea>
        </div>
      </form>
      <div class="contactar">
        <div class="cont">
          CONTACTAR
        </div>
      </div>
    </div>

    <div class="contact" id="spycontact">
      <div class="contact-top left">
        <div class="contact-top-text">
          <h2 class="contact-title" > Contáctenos</h2>
          <p class="contact-body1">
            Ofrecemos servicios profesionales de estructuración y desarrollo de
            proyectos inmobiliarios, que satisfacen los requerimientos y necesidades
            de nuestros clientes antes, durante y después de finalizado el proyecto, cumpliendo con los estándares de calidad y plazos definidos.
          </p>
        </div>
      </div>
      <div class="contact-bottom left">
        <div class="inline">
          <img src="img/logo.png" class="contact-logo" alt="SCG">
          <div class="telefonos">
            <h2 class="telefono">(506) 2215 5000</h2>
            <p class="sub-telefono center">Teléfono</p>
          </div>
        </div>
        <p class="address"><strong>Dirección :</strong>Edificio SCG, de la rotonda de Multiplaza de Escazú, 900 metros norte, Guachipelin, Costa Rica.
    </p>
           <div class="email">
             <div class="center">
               info@scgbusiness.com
             </div>
           </div>
      </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://www.gstatic.com/firebasejs/4.1.3/firebase.js"></script>


    <?php
    if (isset($_GET['lang'])) {
            $lang = $_GET['lang'];
            if($lang == "en"){
              ?>


              <div id="google_translate_element"></div><script type="text/javascript">
              function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'es', includedLanguages: 'en,es', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate_element');
              }
              </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


        <?php
      }
    }
    ?>

    <script type="text/javascript" src="js/bandera2.js"></script>


    <script src="js/data2.js"></script>
  </body>
</html>
