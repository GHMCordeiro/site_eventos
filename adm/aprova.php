<?php

    session_start();

    include("../conexao/conexao.php");

    $id_soli = $_GET['id_soli'];

    $sql2 = "SELECT * FROM solicitacao where id_solicitacao = $id_soli";
    $result2 = mysqli_query($conn, $sql2);
    $data = mysqli_fetch_array($result2);

    $evento = $data['evento'];

    $sql3 = "SELECT * FROM eventos_usuario where id_evento_user = $evento";
    $result3 = mysqli_query($conn, $sql3);
    $data3 = mysqli_fetch_array($result3);

    $titulo = $data3['titulo_evento'];
    $descricao = $data3['descricao_evento_user'];
    $data_evento = $data3['data_evento_user'];
    $horario = $data3['horario_evento_user'];
    $vagas = $data3['vagas_evento_user'];
    $img = $data3['img_evento_user'];
    $responsavel = $data3['id_usuario'];

    $sql4 = "INSERT INTO evento_publicado (titulo_evento_pub, descricao_evento_pub, data_evento_pub, horario_evento_pub, vagas_evento_pub, responsavel_evento_pub, img_evento_pub) values
    ('$titulo', '$descricao', '$data_evento', '$horario', '$vagas', '$responsavel', '$img')";
    $result4 = mysqli_query($conn, $sql4);

    $sql5 = "DELETE FROM solicitacao WHERE id_solicitacao = $id_soli";
    $result5 = mysqli_query($conn, $sql5);

    echo "<script>window.location.href = 'tela_adm.php';</script>";

?>