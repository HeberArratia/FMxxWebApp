<!DOCTYPE html>

<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylesfront.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/pin.css">
    <link rel="stylesheet" href="css/slicknav.min.css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
    <title>FMxx</title>
  </head>

  <body class="desarrolo">

    <div id="loader">
      <div id="loaderpin">
        <div class="cp-spinner cp-bubble"></div>
      </div>
    </div>

    <div id="divisormovil"></div>

    <header id="init">
      <div id="sup" class="ed-container">
        <div id="logo" class="ed-item tablet-15 base-100">
          <h1>
            <a href="#" title="FMxx" >
              <img src="img/logo-fmxx.png" alt="fmxx">
            </a>
            <span>FMxx</span>
          </h1>
        </div>
        <nav class="nav ed-item tablet-85">
          <ul id="menu">
            <li><a href="#banner">INICIO</a></li>
            <li><a href="#descarga">DESCARGA</a></li>
            <li><a href="#team">EQUIPO</a></li>
            <li><a href="#contact">CONTACTO</a></li>
            <li><a id="visor" href="contacto.html">FMxx VISOR</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <div id="divisor"></div>



    <section id="banner">
      <div id="back">
        <div id="content" class="ed-container">
          <div class="ed-item movil-50 desde-tablet">
            <div id="b-img">
              <div id="b-content-img">
                <img src="img/biglogo.png" alt="">
              </div>
            </div>
          </div> 
          <div class="ed-item tablet-50 base-100">
            <div id="b-text">
              <div id="b-content-text">
                <h3>Modelando la variabilidad en lineas de producto de software usando diagramas de características</h3>
              </div>
            </div>
          </div> 
        </div>
      </div>
    </section>

    

    <section id="descarga">
      <div class="ed-container">
        <div class="ed-item tablet-50 descarga-item">
          <img src="img/down.png" alt="">
          <h4>ADOxx</h4>
          <p>Plataforma principal de modelado que soporta nuestra aplicación</p>
          <a href="" class="center">Descargar</a>
        </div>
        <div class="ed-item tablet-50 descarga-item">
          <img src="img/book.png" alt="">
          <h4>Biblioteca FMxx</h4>
          <p>Biblioteca que permite la configuración de ADOxx y los algoritmos propios para el diseño de diagramas de características</p>
          <a href="" class="center">Descargar</a>
        </div>
      </div>
      <div class="ed-container">
        <div class="ed-container" id="descarga-bigitem">
          <div class="ed-item tablet-30 base-100">
            <img src="img/report.png" alt="">
          </div>
          <div class="ed-item tablet-70 base-100">
            <p>Material de soporte para una instalación correcta sin problemas</p>
          </div>
        </div>
      </div>
    </section>

    <section id="team">
      <h3>EQUIPO</h3>
      <div class="ed-container">
        <div class="ed-item tablet-1-3 team-item">
          <img src="img/marceloEsperguel.jpg" alt="" class="circle">
          <p>Marcelo Esperguel, UFRO, Mg. (C)</p>
        </div>
        <div class="ed-item tablet-1-3 team-item">
          <img src="img/samuelSepulveda.jpg" alt="" class="circle">
          <p>Samuel Sepúlveda, UFRO, Phd.</p> 
        </div>
        <div class="ed-item tablet-1-3 team-item">
          <img src="img/carlosCares.jpg" alt="" class="circle">
          <p>Carlos Cares, UFRO, Phd.</p>
        </div>
      </div>
    </section>

    <section id="contact">
      <h4>¡COMUNICATE CON NOSOTROS!</h4>
      <!--<a class="center" href="">CONTACTO</a>-->

      <div id="form-c" class="ed-container">
        <div class="ed-item web-100 base-100">
          <form>
            <label for="name">TU NOMBRE (REQUERIDO)</label>
            <input type="text" id="inputNombre" name="name" placeholder="Ej: Luis Salazar" required>

            <label for="email">TU EMAIL (REQUERIDO)</label>
            <input type="text" id="inputMail" name="email" placeholder="Ej: luis.salazar@gmail.com" required>

            <label for="asunto">ASUNTO</label>
            <input type="text" id="inputMail" name="asunto" placeholder="Ingresa un asunto" required>

            <label for="message">TU MENSAJE</label>
            <textarea id="inputMensaje" name="message" placeholder="Ingresa el mensaje"  required></textarea>

            <button type="submit">ENVIAR</button>
          </form>
        </div>
      </div>

    </section>

    <footer>
      <div class="ed-container" id="logos">
        <img src="img/logodci.png" alt="">
        <img src="img/logoufro.png" alt="">
      </div>
    </footer>

   
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.navScroll.min.js"></script>
    <script src="js/scriptsfront.js"></script>
  </body>
</html>