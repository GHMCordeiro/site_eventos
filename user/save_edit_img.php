<?php
session_start();
include("../conexao/conexao.php");
$id = $_SESSION['id'];

$sql = "SELECT * FROM usuarios where id_usuario = $id";
$result = mysqli_query($conn, $sql);
$user_data = mysqli_fetch_array($result);
$img_user = $user_data['img_user'];

$nome_arquivo = md5(time()) . ".png";
$pasta = "../img_usuarios/";
move_uploaded_file($_FILES["img"]["tmp_name"], $pasta . $nome_arquivo);
unlink("../img_usuarios/".$img_user);

$sql2 = "UPDATE usuarios set img_user = '$nome_arquivo' where id_usuario = $id";
$result2 = mysqli_query($conn, $sql2);

echo "<script>alert('Alterado com sucesso!');
    window.location.href = 'perfil_user.php';</script>";


?>