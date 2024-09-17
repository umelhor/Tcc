<?php 

require("conn.php");
require("protected.php");

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesADM.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500&family=Open+Sans:wght@300;400;500;600&display=swap');
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}


.container {
    width: 80%;
    height: 80vh;
    display: flex;
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.212);
}

.form-image {
    width: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #fde3a7d7;
    padding: 1rem;
}

.form-image img {
    width: 31rem;
}

.form {
    width: 50%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: #fff;
    padding: 3rem;
}

.form-header {
    margin-bottom: 3rem;
    display: flex;
    justify-content: space-between;
}

.login-button {
    display: flex;
    align-items: center;
}

.login-button button {
    border: none;
    background-color: #081D45;
    padding: 0.4rem 1rem;
    border-radius: 5px;
    cursor: pointer;
}

.login-button button:hover {
    background-color: #081D45;
}

.login-button button a {
    text-decoration: none;
    font-weight: 500;
    color: #fff;
}

.form-header h1::after {
    content: '';
    display: block;
    width: 5rem;
    height: 0.3rem;
    background-color: #081D45;
    margin: 0 auto;
    position: absolute;
    border-radius: 10px;
}

.input-group {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 1rem 0;
}

.input-box {
    display: flex;
    flex-direction: column;
    margin-bottom: 1.1rem;
}

.input-box input {
    margin: 0.6rem 0;
    padding: 0.8rem 1.2rem;
    border: none;
    border-radius: 10px;
    box-shadow: 1px 1px 6px #0000001c;
    font-size: 0.8rem;
}

.input-box input:hover {
    background-color: #eeeeee75;
}

.input-box input:focus-visible {
    outline: 1px solid #081D45;
}

.input-box label,
.gender-title h6 {
    font-size: 0.75rem;
    font-weight: 600;
    color: #000000c0;
}

.input-box input::placeholder {
    color: #000000be;
}

.gender-group {
    display: flex;
    justify-content: space-between;
    margin-top: 0.62rem;
    padding: 0 .5rem;
}

.gender-input {
    display: flex;
    align-items: center;
}

.gender-input input {
    margin-right: 0.35rem;
}

.gender-input label {
    font-size: 0.81rem;
    font-weight: 600;
    color: #000000c0;
}

.continue-button button {
    width: 100%;
    margin-top: 2.5rem;
    border: none;
    background-color: #081D45;
    padding: 0.62rem;
    border-radius: 5px;
    cursor: pointer;
}

.continue-button button:hover {
    background-color: #081D45;
}

.continue-button button a {
    text-decoration: none;
    font-size: 0.93rem;
    font-weight: 500;
    color: #fff;
}

@media screen and (max-width: 1330px) {
    .form-image {
        display: none;
    }
    .container {
        width: 50%;
    }
    .form {
        width: 100%;
    }
}

@media screen and (max-width: 1064px) {
    .container {
        width: 90%;
        height: auto;
    }
    .input-group {
        flex-direction: column;
        z-index: 5;
        padding-right: 5rem;
        max-height: 10rem;
        overflow-y: scroll;
        flex-wrap: nowrap;
    }
    .gender-inputs {
        margin-top: 2rem;
    }
    .gender-group {
        flex-direction: column;
    }
    .gender-title h6 {
        margin: 0;
    }
    .gender-input {
        margin-top: 0.5rem;
    }
}

    </style>
  </head>
  <body>
    <div class="sidebar">
    <div class="logo-details"><label for="">ㅤㅤㅤ</label>
      <span class="logo_name">SpotterFlow</span>
      </div>
      <ul class="nav-links">
<li>
          <a href="painel.php">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Painel Administrativo</span>
          </a>
        </li>
        <li>
          <a href="tabela.php">
          <i class='bx bx-receipt'></i>
          <span class="links_name">Registros</span>
          </a>
        </li>
        <li>
          <a href="registrarFuncionario.php">
          <i class='bx bx-group'></i>
          <span class="links_name">Registrar Funcionário</span>
          </a>
        </li>
       
        <li>
          <a href="tabelaFuncionario.php">
          <i class='bx bx-group'></i>
          <span class="links_name">Funcionários</span>
          </a>
        </li>
        <li>
          <a href="registrarAdm.php"  class="active">
          <i class='bx bx-user-plus'></i>
          <span class="links_name">Registrar Admin</span>
          </a>
        </li>
        <li>
          <a href="tabelaAdm.php">
          <i class='bx bxs-user'></i>
          <span class="links_name">Admin Cadastrados</span>
          </a>
        </li>


        
       <li class="log_out">
          <a href="#" onclick="confirmLogout();">
              <i class='bx bx-log-out'></i>
              <span class="links_name">Log out</span>
          </a>
        </li>
        
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <li>
          <a href="sobre.php">
          <i class='bx bx-buildings'></i>          <span class="links_name">Sobre Nós</span>
          </a>
        </li>


        
          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
          <script>
         function confirmLogout() {
            Swal.fire({
              title: 'Deseja Realmente Sair da Conta?',
              icon: 'question',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Sim',
              cancelButtonText: 'Cancelar'
            }).then((result) => {
              if (result.isConfirmed) {
                // Redirecionar para a página de logout
                window.location.href = 'logout.php';
              }
            });
          }


          </script>
      </ul>
  </div>
<section class="home-section">
    <nav>
    <a href="painel.php" class="sidebar-button">
      <span class="dashboard"></span>
      <img src="logo.png" alt="" height="50" width="275">
    </a>
    </nav>
 <div class="home-content">
        <div class="sales-boxes">
          <div class="recent-sales box">
          
        <div class="form">
        <form action="./CRUD/cad_admin.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Registro de Administrador</h1>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Nome Completo</label>
                        <input id="firstname" type="text" name="nome_adm" placeholder="Digite seu primeiro nome" required>
                    </div>

                    <div class="input-box">
                        <label for="lastname">Email</label>
                        <input id="lastname" type="text" name="email_adm" placeholder="Digite seu email" required>
                    </div>
                
                    <div class="input-box">
                        <label for="text">Usuário</label>
                        <input id="number" type="tel" name="user_adm" placeholder="Digite seu usuário" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="senha_adm" placeholder="Digite sua senha" required>
                    </div>


    
                </div>

                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6></h6>
                    </div>

                  

                  

                </div>

                <div class="continue-button">
                    <button><a href="#">Continuar</a> </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
