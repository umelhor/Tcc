<?php
require("conn.php");
require("protected.php");

  $tabela = $pdo->prepare("SELECT * FROM catraca.tb_funcionarios a inner join tb_entradas b on a.id_funcionario = id_entrada
  inner join tb_saidas c on a.id_funcionario = id_saida;");

  $tabela->execute();

  $rowTabela = $tabela->fetchAll();

  
?>

 
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesADM.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <style>
   @import url('https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500&family=Open+Sans:wght@300;400;500;600&display=swap');
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

  </style>
  <div class="sidebar">
  <div class="logo-details"><label for="">ㅤㅤㅤ</label>
      <span class="logo_name">SpotterFlow</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="painel.php" class="active">
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
          <a href="registrarAdm.php">
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
          <div class="sales-details">
            <ul class="details">
            <table class="table table-white" >
              <thead>
                <tr>
                <br>
                <th scope="col">Nomeㅤㅤㅤㅤㅤ</th>
                <th scope="col">Data e Hora Entradaㅤㅤㅤㅤㅤ</th>
                <th scope="col">Data e Hora Saídaㅤㅤㅤㅤㅤ</th>
                </tr>
                </thead>
                <tbody>
      </div>
<?php

foreach($rowTabela as $linha){
echo '<tr>';
  echo '<td style="padding:30px;">'.$linha['nome_funcionario']."</td>";
  echo "<td>".$linha['dataEHoraEntrada']."</td>";
  echo "<td>".$linha['dataEHorasaida']."</td>";
echo '</tr>';
}
?>
  </tbody>
  
  
</table>

          </ul>
          </div>
          <div class="button">
            <a href="tabela.php">Ver Tabela</a>
          </div>
        </div>

        <div class="top-sales box">
  <!-- Aqui você pode adicionar o código do calendário -->
  <iframe src="https://calendar.google.com/calendar/embed?src=seu_endereco_de_calendario" style="border: 0" width="520" height="400" frameborder="0" scrolling="no"></iframe>
</div>

      </div>
    </div>
  </section>


</body>
</html>

