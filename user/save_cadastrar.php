<?php

    session_start();

    include_once("../conexao/conexao.php");

    $id = $_SESSION['id'];

    $nome_arquivo = md5(time()) . ".png"; // Data e horário que o arquivo foi salvo e criptografado.

    $pasta = "../img_evento/";

    move_uploaded_file($_FILES["arquivo"]["tmp_name"], $pasta . $nome_arquivo); // Pegando o arquivo da pasta temporaria e enviando para a nova pasta.
    

    $titulo = $_POST['titulo_evento'];
    $descricao = $_POST['descricao_evento_user'];
    $data = $_POST['data_evento_user'];
    $horario = $_POST['horario_evento_user'];
    $vagas = $_POST['vagas_evento_user'];

    $sql = "INSERT INTO eventos_usuario (titulo_evento, descricao_evento_user, data_evento_user, horario_evento_user, vagas_evento_user, img_evento_user, id_usuario) values
    ('$titulo', '$descricao', '$data', '$horario', '$vagas', '$nome_arquivo', '$id')";

    $resultado = $conn->query($sql);

    echo "<script>alert('Solicitação enviada com sucesso!');
    window.location.href = 'solicita.php';</script>";
?>
