<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
</head>
<body>
    
</body>
</html>

<?php
include('../conn.php');

$nome_funcionario = $_POST['nome_funcionario'];
$email_funcionario = $_POST['email_funcionario'];
$telefone_funcionario = $_POST['telefone_funcionario'];
$genero_funcionario = $_POST['genero_funcionario'];
$dtNasc_funcionario = $_POST['dtNasc_funcionario'];
$cpf_funcionario = $_POST['cpf_funcionario'];
$rg_funcionario = $_POST['rg_funcionario'];
$tag_cartao = $_POST['tag_cartao'];

if (empty($nome_funcionario) || empty($email_funcionario) || empty($telefone_funcionario) || empty($genero_funcionario) || empty($dtNasc_funcionario) || empty($cpf_funcionario) || empty($rg_funcionario)|| empty($tag_cartao)) {
    echo "Você precisa preencher todos os campos";
} else {
    $check_funcionario = $pdo->prepare("SELECT * FROM tb_funcionarios WHERE nome_funcionario = :nome_funcionario");
    $check_funcionario->execute(array(':nome_funcionario' => $nome_funcionario));
    $existing_funcionario = $check_funcionario->fetch();

    if ($existing_funcionario) {
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Erro!',
                text: 'Nome de funcionário já existe!',
                confirmButtonText: 'OK',
                onClose: function() {
                    history.back();
                }
            }).then(function() {
                history.back();
            });
        </script>";
    } else {
        $cad_pessoas = $pdo->prepare("INSERT INTO tb_funcionarios (nome_funcionario, email_funcionario, telefone_funcionario, genero_funcionario, dtNasc_funcionario, cpf_funcionario, rg_funcionario,tagCartao_funcionario) 
        VALUES (:nome_funcionario, :email_funcionario, :telefone_funcionario, :genero_funcionario, :dtNasc_funcionario, :cpf_funcionario, :rg_funcionario,:tag_cartao)");
        $cad_pessoas->execute(array(
            ':nome_funcionario' => $nome_funcionario,
            ':email_funcionario' => $email_funcionario,
            ':telefone_funcionario' => $telefone_funcionario,
            ':genero_funcionario' => $genero_funcionario,
            ':dtNasc_funcionario' => $dtNasc_funcionario,
            ':cpf_funcionario' => $cpf_funcionario,
            ':rg_funcionario' => $rg_funcionario,
            ':tag_cartao' => $tag_cartao
        ));

        echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Solicitação de Cadastro Enviado!',
                text: 'Aguarde 24 horas para o cadastro ser validado.',
                confirmButtonText: 'OK',
                onClose: function() {
                    window.history.back();
                }
            }).then(function() {
                window.history.back();
                window.location.href = '../registrarFuncionario.php';

            });
        </script>";
    }
}
?>
