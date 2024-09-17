<?php
require("conn.php");
require("protected.php");

if(isset($_POST['pesquisar'])){
  $nome = $_POST['nome_pesquisa'];
  $tabela = $pdo->prepare("SELECT nome_adm, usuario_adm, email_adm FROM tb_administradores WHERE nome_adm LIKE :nome");
  $tabela->bindValue(':nome', '%' . $nome . '%');
  $tabela->execute();
  $rowTabela = $tabela->fetchAll();
} else {
  $tabela = $pdo->prepare("SELECT nome_adm, usuario_adm, email_adm FROM tb_administradores");
  $tabela->execute();
  $rowTabela = $tabela->fetchAll();
}

if (empty($rowTabela)){
  echo '<script>';
  echo 'Swal.fire({';
  echo '  icon: "error",';
  echo '  title: "Erro!",';
  echo '  text: "Não tem Funcionários Registrados.",';
  echo '  confirmButtonText: "OK"';
  echo '}).then(function() {';
  echo '  history.back();';
  echo '});';
  echo '</script>';
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="stylesADM.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500&family=Open+Sans:wght@300;400;500;600&display=swap');
    
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    .table {
      margin-top: 20px;
      font-size: 16px;
      width: 100%;
      border-collapse: collapse;
    }

    .table th {
      background-color: #f2f2f2;
      color: #555;
      padding: 10px;
      border: 1px solid #ccc;
      text-align: center;
    }

    .table td {
      background-color: #fff;
      color: #333;
      padding: 10px;
      border: 1px solid #ccc;
      text-align: center;
    }

    .form-label {
      font-weight: bold;
    }

    .form-control {
      border-radius: 0;
    }

    .btn-primary {
      border-radius: 0;
    }
  </style>
<body>
<div class="sidebar">
<div class="logo-details"><label for="">ㅤㅤㅤ</label>
      <span class="logo_name">SpotterFlow</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="painel.php" >
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
          <a href="registrarFuncionario.php" >
          <i class='bx bx-group'></i>
          <span class="links_name">Registrar Funcionário</span>
          </a>
        </li>
       
        <li>
          <a href="tabelaFuncionario.php" >
          <i class='bx bx-group'></i>
          <span class="links_name">Funcionários</span>
          </a>
        </li>
        <li>
          <a href="registrarAdm.php">
          <i class='bx bx-user-plus'></i>
          <span class="links_name">Registrar Admin</span>
          </a>
        </li>
        <li>
          <a href="tabelaAdm.php" class="active">
          <i class='bx bxs-user'></i>
          <span class="links_name">Admin Cadastrados</span>
          </a>
        </li>
        <li class="log_out">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
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
          <i class='bx bx-buildings'></i>
          <span class="links_name">Sobre Nós</span>
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
    <div class="container">
      <div class="home-content">
        <div class="sales-boxes">
          <div class="recent-sales box">
            <div class="mb-3">
              <label for="nome_pesquisa" class="form-label" style="font-weight: bold;">Pesquisar por Nome</label>
              <div class="input-group" style="margin-bottom: 10px;">
              <input type="text" class="form-control" id="nome_pesquisa" name="nome_pesquisa" required style="padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                  <button class="btn btn-primary" type="submit" name="pesquisar" style="background-color: #081D45; color: #fff; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">Pesquisar</button>

                  <button class="btn btn-primary" type="button" name="resetar" onclick="window.location.href = 'tabela.php'" style="background-color: #081D45; color: #fff; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">Limpar</button>
                  
                </form>
                
              </div>
            </div>
              <div class="sales-details">
                  <table class="table table-white">
                    <thead>
                      <tr>
                        <th scope="col">ㅤㅤㅤㅤNomeㅤㅤㅤㅤㅤ</th>
                        <th scope="col">ㅤㅤUsuário de Loginㅤㅤ</th>
                        <th scope="col">ㅤㅤㅤEmail Adminㅤㅤㅤ</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if (!empty($rowTabela)){
                        foreach($rowTabela as $linha){
                          echo '<tr>';
                          echo "<td>".$linha['nome_adm']."</td>";
                          echo "<td>".$linha['usuario_adm']."</td>";
                          echo "<td>".$linha['email_adm']."</td>";
                          echo '</tr>';
                        }
                      } else {
                        echo '<tr><td colspan="3">Nenhum resultado encontrado.</td></tr>';
                        echo '<script>';
                        echo 'Swal.fire({';
                        echo '  icon: "error",';
                        echo '  title: "Erro!",';
                        echo '  text: "Nenhum resultado encontrado.",';
                        echo '  confirmButtonText: "OK"';
                        echo '}).then(function() {';
                        echo '  history.back();';
                        echo '});';
                        echo '</script>';
                      }
                      ?>
                    </tbody>
                  </table>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
