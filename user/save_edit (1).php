<?php
session_start();

include_once("../conexao/conexao.php");


if (!empty($_FILES['arquivo'])) {

    $id_evento = $_POST['id'];
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $data = $_POST['data'];
    $horario = $_POST['horario'];
    $vagas = $_POST['vagas'];

    $remove = "SELECT * FROM eventos_usuario WHERE id_evento_user = $id_evento";
    $remove_result = mysqli_query($conn, $remove);
    $user_data = mysqli_fetch_array($remove_result);
    $arquivo = $user_data['img_evento_user'];

    $nome_arquivo = md5(time()) . ".png"; // Data e horário que o arquivo foi salvo e criptografado.

    $pasta = "img_evento/";


    move_uploaded_file($_FILES["arquivo"]["tmp_name"], $pasta . $nome_arquivo); // Pegando o arquivo da pasta temporaria e enviando para a nova pasta.
    unlink('../img_evento/' . $arquivo);

    $sql = "UPDATE eventos_usuario SET titulo_evento = '$titulo', descricao_evento_user = '$descricao', data_evento_user = '$data', horario_evento_user = '$horario', vagas_evento_user = '$vagas', img_evento_user = '$nome_arquivo' WHERE id_evento_user = '$id_evento'";

    $resultado = $conn->query($sql);

    echo "<script>alert('Alterado com sucesso!');
    window.location.href = 'perfil_user.php';</script>";

} else {

    $id_evento = $_POST['id'];
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $data = $_POST['data'];
    $horario = $_POST['horario'];
    $vagas = $_POST['vagas'];

    $sql = "UPDATE eventos_usuario SET titulo_evento = '$titulo', descricao_evento_user = '$descricao', data_evento_user = '$data', horario_evento_user = '$horario', vagas_evento_user = '$vagas' WHERE id_evento_user = '$id'";

    $resultado = $conn->query($sql);

    echo "<script>alert('Alterado com sucesso!');
    window.location.href = 'cadastros.php';</script>";
}
<?php
session_start();

include_once("../conexao/conexao.php");


if (!empty($_FILES['arquivo'])) {

    $id_evento = $_POST['id'];
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $data = $_POST['data'];
    $horario = $_POST['horario'];
    $vagas = $_POST['vagas'];

    $remove = "SELECT * FROM eventos_usuario WHERE id_evento_user = $id_evento";
    $remove_result = mysqli_query($conn, $remove);
    $user_data = mysqli_fetch_array($remove_result);
    $arquivo = $user_data['img_evento_user'];

    $nome_arquivo = md5(time()) . ".png"; // Data e horário que o arquivo foi salvo e criptografado.

    $pasta = "img_evento/";


    move_uploaded_file($_FILES["arquivo"]["tmp_name"], $pasta . $nome_arquivo); // Pegando o arquivo da pasta temporaria e enviando para a nova pasta.
    unlink('../img_evento/' . $arquivo);

    $sql = "UPDATE eventos_usuario SET titulo_evento = '$titulo', descricao_evento_user = '$descricao', data_evento_user = '$data', horario_evento_user = '$horario', vagas_evento_user = '$vagas', img_evento_user = '$nome_arquivo' WHERE id_evento_user = '$id_evento'";

    $resultado = $conn->query($sql);

    echo "<script>alert('Alterado com sucesso!');
    window.location.href = 'perfil_user.php';</script>";

} else {

    $id_evento = $_POST['id'];
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $data = $_POST['data'];
    $horario = $_POST['horario'];
    $vagas = $_POST['vagas'];

    $sql = "UPDATE eventos_usuario SET titulo_evento = '$titulo', descricao_evento_user = '$descricao', data_evento_user = '$data', horario_evento_user = '$horario', vagas_evento_user = '$vagas' WHERE id_evento_user = '$id'";

    $resultado = $conn->query($sql);

    echo "<script>alert('Alterado com sucesso!');
    window.location.href = 'cadastros.php';</script>";
}
