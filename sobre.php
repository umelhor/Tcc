<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre nos</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css"/>
  <style>
body {
    box-sizing: border-box;
    font-family: "Barlow Condensed", sans-serif;
    color: #242424;
    width: 100%;
    background-color: white;
    text-align: center;
    font-size: 1.4rem;
  }
  .background-image {
    background-image: url('predio2.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 80vh; /* Faz com que a imagem ocupe 100% da altura da tela */
  }

  .image-container {
    width: 1200px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    grid-gap: 15px;
    margin: 0 auto;
  }

  h2,
  h5,
  h6,
  .family-name,
  .linkedin-link a {
    color: #1874cd;
  }

  h2,
  h4,
  h5,
  h6,
  #sideNav {
    font-family: "Poppins", sans-serif;
    font-weight: 700;
  }

  h1,
  .mobile-name {
    font-family: "Just Another Hand", cursive;
    font-size: 7.5rem;
    letter-spacing: 0.1rem;
  }

  h1,
  .mobile-name,
  .edu-icons {
    color: #696969;
  }

  .list-social-icons a,
  a:hover,
  a:focus {
    color: #c4c4c4;
  }

  @media (min-width: 320px) and (max-width: 992px) {
    h1,
    h4 {
      font-size: 5rem;
      display: none;
    }

    .mobile-name {
      font-size: 3rem;
    }

    .mobile-profession {
      font-size: 1.5rem;
      font-weight: 700;
    }

    .resume-section {
      padding-top: 7rem !important;
      min-height: 100vh;
    }

    .linkedin-link {
      text-align: center !important;
    }
  }

  .contact-form {
    flex-direction: column;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .mobile-name {
    font-size: 3rem;
  }

  .form-group {
    width: 50%;
  }

  .mobile-name,
  .mobile-profession {
    display: none;
  }

  .card {
      position: relative;
      width: 300px;
      height: 350px;
      background: #fff;
      margin: 0 auto;
      border-radius: 4px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, .2);
    }

    .card:before,
    .card:after {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border-radius: 4px;
      background: #081D45;
      transition: 0.5s;
      z-index: -1;
    }

    .card:hover:before {
      transform: rotate(20deg);
      box-shadow: 0 2px 20px rgba(0, 0, 0, .2);
    }

    .card:hover:after {
      transform: rotate(10deg);
      box-shadow: 0 2px 20px rgba(0, 0, 0, .2);
    }

    .card .imgBx {
      position: absolute;
      top: 10px;
      left: 10px;
      bottom: 10px;
      right: 10px;
      background: #222;
      transition: 0.5s;
      z-index: 1;
    }

    .card:hover .imgBx {
      bottom: 80px;
    }

    .card .imgBx img {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .card .details {
      position: absolute;
      left: 10px;
      right: 10px;
      bottom: 10px;
      height: 60px;
      text-align: center;
    }

    .card .details h2 {
      margin: 0;
      padding: 0;
      font-weight: 600;
      font-size: 20px;
      color: black;
      text-transform: uppercase;
    }

    .card .details h2 span {
      font-weight: 500;
      font-size: 16px;
      color: blue;
      display: block;
      margin-top: 5px;
    }
    .background {
  background-color: rgba(0, 0, 0, 0.5); /* Cor preta com 50% de opacidade */
  padding: 20px;
  border-radius: 10px;
  backdrop-filter: blur(5px);
}
.mb-3 {
  color: white; /* Cor branca */
}
.bg-primary {
    background-color: #0A2458!important;
}
.navbar-dark .navbar-nav .nav-link {
    color: rgb(255 255 255 / 100%);
}
.navbar-logo {
  height: 50px;
  position: absolute;
  top: 5px;
  left: 5px;
}
.button-container {
        position: fixed;
        top: 10px;
        right: 110px;
    };
  </style>
</head>
<body>
<div class="background-image">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="background-color: #0A2458;">
    <div class="container">
    <a class="navbar-brand">
  <img src="logo.png" alt="Logo" class="navbar-logo">
</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" background-color:   #0A2458>
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#about">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#skills">Membros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#experience">Instrutoresㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</a>
          </li>
        </ul>
        <div class="button-container">
    <a class="btn btn-danger" href="painel.php">Voltar</a>
    </div>
  </nav>  
  <div class="container-fluid p-0">
    <section class="resume-section p-3 p-lg-5" id="about">
      <div class="my-auto">
        <p class="mobile-name">
          <img src="logo.png" alt="">
        </p>
        <p class="mobile-name">Spotter <span class="family-name"> Flow</span></p>
        <h1 class="mb-3 mt-5">
          Spotter
          <span class="family-name"> Flow</span>
        </h1>
        <div class="background">
  <p class="mb-3">
    Nós da SpotterFlow somos uma empresa especializada em soluções de controle de acesso, com um foco específico no desenvolvimento e implementação de catracas inteligentes. Fundamos nossa empresa com a missão de proporcionar segurança, praticidade e eficiência, visando atender às suas necessidades de controle de fluxo de pessoas em diversos ambientes, como empresas, condomínios, academias, eventos e outros espaços.
    Nossas catracas inteligentes são projetadas para oferecer uma experiência segura e fluida aos usuários. Utilizamos tecnologias avançadas, como leitura de cartões RFID, reconhecimento facial e integração com sistemas de segurança existentes, para garantir um controle de acesso eficiente e confiável.
    Além disso, entendemos que cada cliente possui necessidades específicas. Portanto, nossas soluções são altamente personalizáveis, permitindo adaptar as catracas de acordo com o seu ambiente e suas preferências. Nosso compromisso é oferecer produtos que sejam fáceis de usar, de instalar e de manter, proporcionando tranquilidade e conveniência para você.
  </p>
</div>
<br>
<br>
<br>
      </div>
    </section>
    <section class="resume-section p-3 p-lg-5" id="skills">
    <h2 class="mb-4">Membros</h2>
      <div class="my-auto image-container">
        <div class="card">
          <div class="imgBx">
            <img src="matheus_ddiias-20230619-0001.jpg" alt="images">
          </div>
          <div class="details">
            <h2>Matheus dias<br><span>Programação/Arduino</span></h2>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="card">
          <div class="imgBx">
            <img src="paulo.jpg" alt="images">
          </div>
          <div class="details">
            <h2>Paulo Ricardo<br><span>Programaçao/Documentação</span></h2>
                </a>
              </li>
            </ul>
          </div>
        </div>  
        <div class="card">
          <div class="imgBx">
            <img src="IMG-20230406-WA0064.jpg" alt="images">
          </div>
          <div class="details">
            <h2>Carlos Alcântara<br><span>Programação/Design</span></h2>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="card">
          <div class="imgBx">
            <img src="enrico.jpg" alt="images">
          </div>
          <div class="details">
            <h2>Enrico Schultz Breda<br><span>Documentação</span></h2>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="card">
          <div class="imgBx">
            <img src="gabs.jpg" alt="images">
          </div>
          <div class="details">
            <h2>Gabriel Pontes<br><span>Documentação</span></h2>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="card">
          <div class="imgBx">
            <img src="IMG_20230220_132608.jpg" alt="images">
          </div>
          <div class="details">
            <h2>Lucas Carvalho<br><span>Veterinário</span></h2>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="resume-section p-3 p-lg-5" id="experience">
      <h2 class="mb-4">Instrutores</h2>
      <div class="my-auto image-container">
        <div class="card">
          <div class="imgBx">
            <img src="IMG-20230619-WA0046.jpg" alt="images">
          </div>
          <div class="details">
            <h2>Isabel Maria <br><span>Instrutora</span></h2>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="card">
          <div class="imgBx">
            <img src="reni.ssonsouza-20230620-0001.jpg" alt="images">
          </div>
          <div class="details">
            <h2>Renisson<br><span>Instrutor</span></h2>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
