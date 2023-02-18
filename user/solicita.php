<?php

    session_start();

    include("../conexao/conexao.php");

    $hoje = date('Y/m/d');

    $id = $_SESSION['id'];

    $sql = "SELECT * FROM eventos_usuario ORDER BY id_evento_user DESC";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);

    $id_evento = $data['id_evento_user'];

    $sql2 = "INSERT INTO solicitacao (liberador, solicitante, data_solicitacao, estado_evento, evento) values
    ('1', '$id', '$hoje', '0', '$id_evento')";
    $result2 = mysqli_query($conn, $sql2);

    echo "<script>window.location.href = 'perfil_user.php';</script>";

?>