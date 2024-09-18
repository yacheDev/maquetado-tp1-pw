<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/styles.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <script src="https://kit.fontawesome.com/beec36d344.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
  <!--TODO Solucionar iconos/volver a generar-->
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon_io/favicon-16x16.png">
  <script type="text/javascript"
    src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
  <script type="text/javascript">
    emailjs.init('FC02t95CMOuFEdnxG')
  </script>
  <title>Farmacia Colon Monte Grande</title>
</head>

<body>

  <span>
    <!--TODO Aplicar arquitectura MVC-->
    <nav navbar navbar-expand-lg fixed-top navbar-light sticky>
      <div class="logo">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-heart-pulse" viewBox="0 0 16 16">
          <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053.918 3.995.78 5.323 1.508 7H.43c-2.128-5.697 4.165-8.83 7.394-5.857q.09.083.176.171a3 3 0 0 1 .176-.17c3.23-2.974 9.522.159 7.394 5.856h-1.078c.728-1.677.59-3.005.108-3.947C13.486.878 10.4.28 8.717 2.01zM2.212 10h1.315C4.593 11.183 6.05 12.458 8 13.795c1.949-1.337 3.407-2.612 4.473-3.795h1.315c-1.265 1.566-3.14 3.25-5.788 5-2.648-1.75-4.523-3.434-5.788-5" />
          <path d="M10.464 3.314a.5.5 0 0 0-.945.049L7.921 8.956 6.464 5.314a.5.5 0 0 0-.88-.091L3.732 8H.5a.5.5 0 0 0 0 1H4a.5.5 0 0 0 .416-.223l1.473-2.209 1.647 4.118a.5.5 0 0 0 .945-.049l1.598-5.593 1.457 3.642A.5.5 0 0 0 12 9h3.5a.5.5 0 0 0 0-1h-3.162z" />
        </svg>
      </div>
      <ul class="nav-links">
        <li><a href="#home">Inicio</a></li>
        <li><a href="#services">Servicios</a></li>

        <li><a href="#contact">Contacto</a></li>

        <li><a href="#location">Ubicacion</a></li>

      </ul>
      <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
        <div class="close-icon">&times;</div>
      </div>
    </nav>
  </span>

  <main>

    <section id="home" class="hero bg-home5">
      <div class="container-main container">
        <div class="main-text">
          <h1>Bienvenidos a <br><span class="highlight">Farmacia Colon</span></h1>
          <p>Tu salud es nuestra prioridad</p>
          <p><span class="years">Más de 20 años cuidándote</span></p>
        </div>
        <div class="main-img">
          <img src="assets/imgs/professionals.svg" alt="foto-profesional">
        </div>
      </div>
      <div class="d-grid gap-2">
        <a href="./pages/shop.php" class="btn btn-secondary btn-lg tienda-btn">Tienda online</a>
      </div>
    </section>

    <section id="services" class="service">
      <div class="container service">
        <div class="header-title">
          <h2>Nuestros servicios</h2>
        </div>
        <div class="services-list">
          <ul>
            <li>Asesoramiento personalizado</li>
            <li>Atención obras sociales</li>
            <li>Asesoramiento personalizado</li>
            <li>Formulas magistrales</li>
            <li>Medicion de presion arterial</li>
            <li>Aplicacion inyectables</li>
            <li>Amplia variedad de productos de perfumeria y bienestar</li>
            <li>Entrega a domicilio con <strong>PedidosYa</strong></li>
          </ul>
        </div>
        <div class="social-links">
          <i class="fa-solid fa-stethoscope fa-2x"></i>
          <i class="fa-solid fa-pills fa-2x"></i>
          <i class="fa-solid fa-kit-medical fa-2x"></i>
          <i class="fa-solid fa-crutch fa-2x"></i>
          <i class="fa-solid fa-prescription-bottle-medical fa-2x"></i>
        </div>
      </div>
    </section>

    <div class="modal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Modal body text goes here.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>


    <section id="contact" class="contact">
      <div class="container contact-us">
        <div class="header-title">
          <h2>Contacto</h2>
        </div>
        <div class="form">
          <form id="contact-form" action="pages/answer.html" method="POST" class="needs-validation" novalidate>
            <div class="mb-3">
              <label for="name" class="form-label">Nombre</label>
              <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Ingresa tu nombre" required>
            </div>
            <div class="mb-3">
              <label for="mail" class="form-label">Email</label>
              <input type="email" name="mail" class="form-control" id="mail" aria-describedby="emailHelp" placeholder="mail@ejemplo.com" required>
              <div id="emailHelp" class="form-text">Nunca compartiremos este dato con nadie.</div>
            </div>
            <div class="md-3">
              <label for="contactType" class="form-label">Tipo de contacto</label>
              <select class="form-select" name="contactType" id="contactType" required>
                <option selected disabled value="">Selecione...</option>
                <option>Reporte de problema</option>
                <option>Consulta</option>
                <option>Sugerencia</option>
              </select>
              <div class="invalid-tooltip">
                Por favor seleccione un tipo de contacto valido.
              </div>
            </div>
            <div class="mb-3">
              <label for="message">Mensaje</label>
              <textarea class="form-control" name="message" placeholder="Ingresa tu mensaje, comentario o reporte de problema." id="message" required></textarea>
            </div>
            <input type="submit" id="button" class="btn btn-primary"></input>

          </form>
        </div>
        <div>
          <p>Podes comunicarte <a href="tel:+54 42842263">011 42842263</a></p>
          <p>O seguirnos en nuestras redes sociales:</p>
        </div>
        <div class="social-links">
          <a href="" target="_blank"><i class="fa-brands fa-facebook fa-2x"></i></a>
          <a href="https://www.instagram.com/farmacia.colon.mg/" target="_blank"><i class="fa-brands fa-instagram fa-2x"></i></a>
          <a href="https://api.whatsapp.com/send?phone=541139571086&text=Hola%20Farmacia%20Col%C3%B3n!%20Quiero%20consultar..." target="_blank"><i class="fa-brands fa-whatsapp fa-2x"></i></a>
        </div>
      </div>
    </section>

    <section id="location">
      <div class="container location-container">
        <div class="header-title">
          <h2>Donde estamos</h2>
        </div>
        <div class="social-links">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13099.515725430592!2d-58.4641584!3d-34.8341364!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcd15613205083%3A0x1a6850eceda08561!2sFarmacia%20Col%C3%B3n!5e0!3m2!1ses!2sar!4v1723415715787!5m2!1ses!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </section>
  </main>

  <a href="https://api.whatsapp.com/send?phone=541139571086&text=Hola%20Farmacia%20Col%C3%B3n!%20Quiero%20consultar..." class="whatsapp" target="_blank"><i class="fa-brands fa-whatsapp fa-2x fa fa-whatsapp whatsapp-icon"></i></a>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>