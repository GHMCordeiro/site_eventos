<?php
session_start();
if(!isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}

include_once("../conexao/conexao.php");

$id = $_SESSION['id'];
$id_evento = $_GET['id_evento'];

$sql = "SELECT * FROM eventos_usuario WHERE id_usuario= $id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($user_data = mysqli_fetch_array($result)) {
        $titulo = $user_data['titulo_evento'];
        $descricao = $user_data['descricao_evento_user'];
        $data = $user_data['data_evento_user'];
        $horario = $user_data['horario_evento_user'];
        $vagas = $user_data['vagas_evento_user'];
    }
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>Notícias</title>
</head>

<body>


    <div class="container-fluid">
        <div class="row justify-content-center text-center mt-5">
            <div class="col-md-4 col-lg-4 col-sm-4">
                <h3>Edição</h3>
            </div>
        </div>
        <div class="row mt-3 justify-content-center">
            <div class="col-md-6 col-sm-8 border p-3 rounded form_alterar">
                <form action="save_edit.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="titulo" placeholder="Título da notícia" class="form-control" value="<?php echo $titulo ?>">
                    <input type="text" name="descricao" placeholder="Desscrição do evento" class="form-control mt-3" value="<?php echo $descricao ?>">
                    <input type="date" name="data" class="form-control mt-3" value="<?php echo $data ?>">
                    <input type="time" name="horario" class="form-control mt-3" value="<?php echo $horario ?>">
                    <input type="text" name="vagas" placeholder="Vagas evento" class="form-control mt-3" value="<?php echo $vagas ?>">
                    <input type="file" name="arquivo" class="form-control mt-3">
                    <input type="hidden" name="id" value="<?php echo $id_evento ?>">
                    <input type="submit" value="Alterar" class="btn btn-primary mt-3 alterar">
                </form>
            </div>
        </div>

    </div>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>