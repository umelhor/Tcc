<?php
  require("conn.php");

  $tabela = $pdo->prepare("SELECT * FROM catraca.tb_funcionarios a inner join tb_entradas b on a.id_funcionario = id_entrada
  inner join tb_saidas c on a.id_funcionario = id_saida;");

  $tabela->execute();

  $rowTabela = $tabela->fetchAll();

?>

<!DOCTYPE HTML>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Cadastro Produtos</title>
    <link rel="stylesheet" href="stylesTabela.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" >
    
  </head>

  <body>
  <div class="sidebar">
    <div class="logo-details"><i></i>
      <span class="logo_name">Senai</span>
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
            <i class='bx bx-box' ></i>
            <span class="links_name">Tabela</span>
          </a>
        </li>
       
        <li>
          <a href="#">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Relatório</span>
          </a>
        </li>
        <li class="log_out">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
    <div class="container">
         <div class="sales-boxes">
          <div class="recent-sales box">
            <div class="sales-details">
              <ul class="details">
                <table class="table table-white">
                  <thead>
                    <tr>
                      <th scope="col">Nome</th>
                      <th scope="col">Data e Hora Entrada</th>
                      <th scope="col">Data e Hora Saída</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach($rowTabela as $linha){
                      echo '<tr>';
                      echo "<td>".$linha['nome_funcionario']."</td>";
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
              <a href="painel.php">Voltar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
 