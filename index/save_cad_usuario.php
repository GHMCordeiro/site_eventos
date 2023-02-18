<?php

include_once("../conexao/conexao.php");

if (!empty($_POST['nome_usuario']) && !empty($_POST['email_usuario']) && !empty($_POST['senha_usuario']) && !empty($_POST['nome_organizador']) && !empty($_POST['cnpj']) && !empty($_POST['nome_empresa'])) {
    $sql = "SELECT * FROM usuarios";
    $result_validate = mysqli_query($conn, $sql);
    $user = mysqli_fetch_array($result_validate);
    $usuario_validate = $user['nome_usuario'];

    $nome = $_POST['nome_usuario'];
    $email = $_POST['email_usuario'];
    $senha = $_POST['senha_usuario'];
    $nome_organizador = $_POST['nome_organizador'];
    $cnpj = $_POST['cnpj'];
    $nome_empresa = $_POST['nome_empresa'];

    $nome_arquivo = md5(time()) . ".png"; 
    $pasta = "../img_usuarios/";


    if($usuario_validate == $nome){

        echo "<script>alert('Digite um usuario diferente!');
        window.location.href = 'cad_usuario.php';</script>";

    }else{

        $sql = "INSERT INTO usuarios (nome_usuario, email_usuario, senha_usuario, nome_organizador, cnpj, nome_empresa, img_user) values ('$nome', '$email', '$senha', '$nome_organizador', '$cnpj', '$nome_empresa', '$nome_arquivo')";
        $result = mysqli_query($conn, $sql);

        move_uploaded_file($_FILES["img_user"]["tmp_name"], $pasta . $nome_arquivo); 

    }

    echo "<script>alert('Usuario cadastrado com sucesso!');
        window.location.href = '../index/login.php';</script>";
} else {
    echo "<script>alert('Digite todos os campos!');";
}
?>