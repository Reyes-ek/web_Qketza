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
      transition: background-image 0.5s ease;
      min-height: 100vh;
    }

    nav {
      width: 100%;
      height: 15vh;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 40px;

    }

    .logo img {
      height: 80px;
    }

    .links {
      display: flex;
      gap: 40px;
    }

    .links a {
      font-size: 1.1rem;
      color: white;
      text-decoration: none;
      font-weight: 500;
      position: relative;
    }

    .links a::before {
      content: "";
      position: absolute;
      bottom: -4px;
      left: 0;
      width: 0%;
      height: 2px;
      background-color: magenta;
      transition: 0.3s;
    }

    .links a:hover::before {
      width: 100%;
    }

    .links a:hover {
      color: magenta;
    }

    #contenido {
      display: flex;
      justify-content: center;
      align-items: center;

    }

    iframe {
      width: 98%;
      height: 80vh;
      border: none;

    }

    @media (max-width: 768px) {
      .links {
        flex-direction: column;
        gap: 10px;
      }

      iframe {
        height: 70vh;
        width: 95%;
      }

      nav {
        flex-direction: column;
        height: auto;
        padding: 20px;
      }
    }
  </style>
</head>

<body>
  <nav>
    <div class="logo" data-aos="zoom-in">
      <a href="#"><img src="IMG/Web_QketZá_Logo.png" alt="Logo QKETZA"></a>
    </div>

    <div class="links">
      <a href="#" onclick="cargar('quienes_somos.php', 'IMG/Fondo_1.png')">¿QUIENES SOMOS?</a>
      <a href="#" onclick="cargar('trabajos.html', 'IMG/fondo2.jpg')">NUESTROS TRABAJOS</a>
      <a href="#" onclick="cargar('contacto.html', 'IMG/fondo3.jpg')">CONTÁCTO</a>
    </div>
  </nav>

  <section id="contenido">
    <iframe id="miIframe" src="quienes_somos.php"></iframe>
  </section>

  <script>
    function cargar(pagina, fondo) {
      document.getElementById("miIframe").src = pagina;
      document.body.style.backgroundImage = `url('${fondo}')`;
    }
  </script>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({ offset: 0 });
  </script>
</body>
</html>
