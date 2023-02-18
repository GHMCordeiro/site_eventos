<?php
session_start();

include_once("../conexao/conexao.php");

if (!empty($_POST['usuario']) && !empty($_POST['senha'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE nome_usuario = '$usuario' and senha_usuario = '$senha' ";
    $resultado_user = $conn->query($sql);
    $user = mysqli_num_rows($resultado_user);
    $user_data = mysqli_fetch_array($resultado_user);
    
    $sql = "SELECT * FROM administrador WHERE usuario_adm = '$usuario' and senha_adm = '$senha' ";
    $resultado_adm = $conn->query($sql);
    $adm = mysqli_num_rows($resultado_adm);
    $adm_data = mysqli_fetch_array($resultado_adm);

    if ($adm > 0) {
        $_SESSION['id'] = $adm_data['id_adm'];
        header('Location: ../adm/tela_adm.php');
    } else {
        if ($user > 0) {
            $_SESSION['id'] = $user_data['id_usuario'];
            header('Location: ../user/tela_user.php');
        } else {
            echo "
                <script>
                    alert('Usuário e/ou Senha incorreto(s)');
                    window.location.href = '../index/login.php';
                </script>";
        }
    }
} else {
    echo "
    <script>
        alert('Digite todos os campos!');
        window.location.href = '../index/login.php';
    </script>";
}
