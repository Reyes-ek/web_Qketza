<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>QKETZA</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background-image: url('IMG/Web_QketZá_fondo_1 (1).png');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      background-attachment: fixed;
      min-height: 100vh;
      overflow: hidden;
      transform: scale(0.99);
      transform-origin: top center;
    }

    nav {
      width: 100%;
      height: 15vh;
    }

    .nav-container {
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 40px;
    }

    .logo {
      display: flex;
      align-items: center;
      height: 100%;
      margin-top: 10px;
    }

    img:hover {
    animation: palpitar 1s infinite;
    transition: box-shadow 0.3s ease-in-out;
    }
    .logo img {
      height: 100px;
      object-fit: contain;
    }


    .links {
      display: flex;
      gap: 100px;
    }

    .links a {
      font-size: 1.2rem;
      color: white;
      text-decoration: none;
      font-weight: 550;
      position: relative;
      transition: 0.3s linear;
      top: 0px;
      right: 80px;
    }

    .links a::before {
      content: "";
      position: absolute;
      bottom: -3px;
      left: 0;
      width: 0%;
      height: 3px;
      background-color: rgb(196, 23, 181);
      transition: 0.2s linear;
    }

    .links a:hover::before {
      width: 100%;
    }

    .links a:hover {
      color: rgb(196, 23, 181);
    }

    .hamburg,
    .cancel {
      cursor: pointer;
      position: absolute;
      right: 15px;
      top: 10px;
      color: white;
      display: none;
      font-size: clamp(2.5rem, 0.5rem + 5vw, 3rem);
    }

    .dropdown {
      z-index: 100;
      position: absolute;
      top: 0;
      transform: translateY(-500px);
      width: 100%;
      backdrop-filter: blur(4px) brightness(40%);
      box-shadow: 0 0 20px black;
      transition: 0.2s linear;
    }

    .dropdown .links {
      flex-direction: column;
      align-items: center;
      gap: 0;
    }

    .dropdown .links a {
      display: flex;
      color: white;
      text-decoration: none;
      justify-content: center;
      padding: 15px 0;
      align-items: center;
      transition: 0.2s linear;
    }

    .dropdown .links a:hover {
      background-color: #ff0000;
    }

    @media (max-width: 884px) {
      body {
        overflow-y: auto;
        transform: scale(1); /* Para que no afecte la escala en móviles */
      }

      .nav-container .links {
        display: none;
      }

      .hamburg,
      .cancel {
        display: block;
      }

      .info-container {
        flex-direction: column;
        text-align: center;
      }

      .texto {
        max-width: 90%;
      }
    }

    /* Estilos para la sección #home */
    #home {
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 0 10px;
      margin-top: -4rem;
    }

    .main-container {
      max-width: 1200px;
      width: 100%;
    }

    .imagen-1 {
      height: 17rem;
      width: 60rem;
      margin-top: -30px;
    }

    .info-container {
      display: flex;
      align-items: center;
      gap: 1.5rem;
      margin-top: 2rem;
      flex-wrap: wrap;
      justify-content: center;
      max-width: 900px;
      margin-left: auto;
      margin-right: auto;
    }

    .imagen-2 {
      height: 5rem;
      width: auto;
      left: -40px;
    }
        .imagen-1, .imagen-2:hover {
        animation: palpitar 1s infinite;
        transition: box-shadow 0.3s ease-in-out;
        }

        @keyframes palpitar {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.05);
        }
        100% {
            transform: scale(1);
        }
        }

    .texto {
      color: white;
      font-size: 1.4rem;
      line-height: 1.4;
      max-width: 560px;
      text-align: left;         /* Alinea el contenido a la izquierda */
      
    }

    @keyframes blink {
      50% {
        opacity: 0;
      }
    }
  </style>
</head>

<body>
  <nav>
    <div class="nav-container">
      <div class="logo" data-aos="zoom-in" data-aos-duration="1500">
        
        <a href="index.php"><img src="IMG/Web_QketZá_Logo.png" alt="Logo QKETZA" /></a>
      </div>

      <div class="links">
        <a href="index.php" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">¿QUIENES SOMOS?</a>
        <a href="#" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">NUESTROS TRABAJOS</a>
        <a href="#" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">CONTÁCTO</a>
      </div>

      <i class="fa-solid fa-bars hamburg" onclick="hamburg()"></i>
    </div>

    <div class="dropdown">
      <div class="links">
        <a href="#">Inicio</a>
        <a href="#">Información</a>
        <a href="#">Habilidades</a>
        <a href="#">Servicios</a>
        <a href="#">Contacto</a>
        <i class="fa-solid fa-xmark cancel" onclick="cancel()"></i>
      </div>
    </div>
  </nav>




  
  <section id="home" class="section">
    <div class="main-container">
      <div>
        <img class="imagen-1" src="Tipografia/Web_QketZá-10.png" alt="" />
        <h1 style="color: white; margin-top: -30px;">
          Diseño gráfico, contenido y creatividad con flow para marcas reales
        </h1>
      </div>

      <div class="info-container">
        <img class="imagen-2" src="Tipografia/Web_QketZá-11.png" alt="" />
        <p class="texto">
          En Qket-Zá, diseñamos más que imágenes. Creamos identidad, actitud y conexión con tu público.
          Logos, contenido, gifs, diseño editorial, diseño y creación de Landing page y más. Sin límite de ideas,
          con mucho flow.
        </p>
      </div>
    </div>
  </section>





  <script>
    function hamburg() {
      document.querySelector(".dropdown").style.transform = "translateY(0px)";
    }

    function cancel() {
      document.querySelector(".dropdown").style.transform = "translateY(-500px)";
    }
  </script>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({ offset: 0 });
  </script>
</body>
</html>
