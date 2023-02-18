<?php
session_start();

include_once("../conexao/conexao.php");

    $id = $_SESSION['id'];
    $id_evento = $_GET['id_evento'];

    $remove = "SELECT * FROM eventos_usuario WHERE id_usuario = $id";
    $remove_result = mysqli_query($conn, $remove);
    $user_data = mysqli_fetch_array($remove_result);
    $arquivo = $user_data['img_evento_user'];
    unlink('../img_evento/' . $arquivo); 

    $sql = "DELETE FROM eventos_usuario WHERE id_evento_user = $id_evento";
    $result = mysqli_query($conn, $sql);

    echo "<script>alert('Excluido com sucesso!');
    window.location.href = 'perfil_user.php';</script>";

?>