<?php

    session_start();

    include("../conexao/conexao.php");

    $id_soli = $_GET['id_soli'];

    $sql5 = "DELETE FROM solicitacao WHERE id_solicitacao = $id_soli";
    $result5 = mysqli_query($conn, $sql5);

    echo "<script>window.location.href = 'tela_adm.php';</script>";

?>