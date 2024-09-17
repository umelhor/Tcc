<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>

</head>
<body>
    
</body>
</html>
<?php
    include("conn.php");
    $login = $_POST['user'];
    $senha = $_POST['senha'];

    $usuario = $pdo->prepare('SELECT * FROM tb_administradores WHERE usuario_adm=:usuario_adm 
    AND senha_adm=:senha_adm');
    $usuario->execute(array(':usuario_adm'=>$login, ':senha_adm'=>$senha));

    $rowTabela = $usuario->fetchAll();
    
 if (empty($rowTabela)){
        echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Erro!',
            text: 'Usuário e/ou senha inválidos!!!',
            confirmButtonText: 'OK',
            onClose: function() {
                history.back();
            }
        }).then(function() {
            history.back();
        });
        </script>";

    }else{
       
    $sessao = $rowTabela[0];

    if(!isset($_SESSION)) {
    session_start();
    }

    $_SESSION['id_adm'] = $sessao['id_adm'];
    $_SESSION['usuario_adm'] = $sessao['usuario_adm'];
    
    echo "<script>
    Swal.fire({
        icon: 'success',
        title: 'Bem-vindo!',
        text: 'Login bem-sucedido! Bem-vindo, " . $_SESSION['usuario_adm'] . "!',
        confirmButtonText: 'OK',
        onClose: function() {
            window.location.href = 'painel.php';
        }
    }).then(function() {
        window.location.href = 'painel.php';
    });
    </script>";
    }
?>
