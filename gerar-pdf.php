<?php
include("conn2.php");

$sql = "SELECT tb_funcionarios.nome_funcionario,
        DATE_FORMAT(tb_entradas.dataEHoraEntrada, '%d/%m/%Y %H:%i:%s') AS data_entrada, 
        DATE_FORMAT(tb_saidas.dataEHorasaida, '%d/%m/%Y %H:%i:%s') AS data_saida
        FROM tb_funcionarios
        LEFT JOIN tb_entradas ON tb_funcionarios.id_funcionario = tb_entradas.id_funcionario
        LEFT JOIN tb_saidas ON tb_funcionarios.id_funcionario = tb_saidas.id_funcionario
        WHERE tb_funcionarios.nome_funcionario = 'Matheus Dias de Souza'
        ORDER BY tb_entradas.dataEHoraEntrada, tb_saidas.dataEHorasaida";

$res = $conn->query($sql);

if ($res && $res->num_rows > 0) {
    $html = "
    <style>
    table {
        width: 100%;
        border-collapse: collapse;
        font-family: Arial, sans-serif;
        color: #333;
    }

    th, td {
        padding: 12px;
        border: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    tr:hover {
        background-color: #f5f5f5;
    }
    </style>
    
    <table border='1'>
        <tr>
            <th>Nome</th>
            <th>Data de Entrada</th>
            <th>Data de Saída</th>
        </tr>";

    $prevRow = null;
    while ($row = $res->fetch_object()) {
        if ($prevRow && $prevRow->data_entrada === $row->data_entrada && $prevRow && $prevRow->data_saida === $row->data_saida) {
            continue; // Ignora linhas com o mesmo horário de entrada
        }

        $html .= "<tr>";
        $html .= "<td>" . $row->nome_funcionario . "</td>";
        $html .= "<td>" . ($row->data_entrada ? $row->data_entrada : '') . "</td>";
        $html .= "<td>" . ($row->data_saida ? $row->data_saida : '') . "</td>";

        $html .= "</tr>";

        $prevRow = $row;
    }

   
    $html .= "</table>";
} else {
    $html = "Nenhum registro encontrado";
}

use Dompdf\Dompdf;
require_once 'dompdf/autoload.inc.php';

$dompdf = new Dompdf();

$dompdf->loadHtml($html);

$dompdf->set_option('defaultFont', 'Arial');

$dompdf->setPaper('A4', 'portrait');

$dompdf->render();

$dompdf->stream('informacoes_funcionarios.pdf');
?>
