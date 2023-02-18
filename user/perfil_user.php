<?php
session_start();
if(!isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}

include("../conexao/conexao.php");

$id = $_SESSION['id'];

$sql = "SELECT * FROM usuarios where id_usuario = $id";
$result = mysqli_query($conn, $sql);
$user_data = mysqli_fetch_array($result);

?>


<!DOCTYPE html>
<html>

<head>
    <!-- Site made with Mobirise Website Builder v5.6.13, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.6.13, mobirise.com">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image:src" content="">
    <meta property="og:image" content="">
    <meta name="twitter:title" content="home">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

    <meta name="description" content="">


    <title>Perfil</title>
    <link rel="stylesheet" href="../assets/web/assets/mobirise-icons2/mobirise2.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../assets/animatecss/animate.css">
    <link rel="stylesheet" href="../assets/dropdown/css/style.css">
    <link rel="stylesheet" href="../assets/socicon/css/styles.css">
    <link rel="stylesheet" href="../assets/theme/css/style.css">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap">
    </noscript>
    <link rel="preload" as="style" href="../assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="../assets/mobirise/css/mbr-additional.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css">



</head>

<body>
    <!-- inicio do nav -->
    <section data-bs-version="5.1" class="menu menu1 cid-tjpUezaDUt" once="menu" id="menu1-2">


        <nav class="navbar navbar-dropdown navbar-fixed-top collapsed">
            <div class="container-fluid">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <a href="tela_user.php">
                            <img src="../img/logo.png" alt="Mobirise Website Builder" style="height: 3rem;">
                        </a>
                    </span>
                    <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-7" href="tela_user.php">FloodLight</a></span>
                </div>

                <div class="col-md-2 text-center user">
                    <a href="cadastrar.php" class="btn btn-primary text-white">Cadastrar</a>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                        <li class="nav-item"><a class="nav-link link text-white show display-4" href="../index.php" aria-expanded="true">
                                <span class="mobi-mbri mobi-mbri-close-2 mbr-iconfont mbr-iconfont-btn" style="color: rgb(255, 255, 255);"></span>Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- fim do nav -->
    <section data-bs-version="5.1" class="gallery4 mbr-gallery cid-tjpWY9yyX1" id="gallery4-3">



        <div class="container border mt-5">
            <div class="row mt-5 mb-5 justify-content-center">
                <div class="col-md-8 col-lg-8 col-sm-8">
                    <div class="row align-items-center justify-content-center mb-5">
                        <div class="col-md-4">
                            <img src="<?php
                            if($user_data['img_user'] == ""){
                                echo "../img_aux/user (1).png";
                            }else{
                                echo "../img_usuarios/".$user_data['img_user'];
                            }
                            ?>" alt="" class="rounded">
                            
                            <a href='edit_img.php?id_img=$user_data[id_inscricao]' class='btn btn-primary bi bi-pencil'></a>
                        </div>

                        <div class="col-md-6">
                            <span class="nome_user"><?php echo $user_data['nome_organizador'] ?></span>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12 info">
                            Usuario: <?php echo $user_data['nome_usuario'] ?>
                        </div>

                        <div class="col-md-12 info mt-2">
                            Email: <?php echo $user_data['email_usuario'] ?>
                        </div>

                        <div class="col-md-12 info mt-2">
                            CNPJ: <?php echo $user_data['cnpj'] ?>
                        </div>

                        <div class="col-md-12 info mt-2">
                            Nome Empresa: <?php echo $user_data['nome_empresa'] ?>
                        </div>
                    </div>

                    <hr>

                    <div class="row mt-5 justify-content-center">
                        <div class="col-md-4 text-center">
                            <h2>Inscrições</h2>
                        </div>

                        <div class="col-md-12 mt-2 mb-5">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Evento</th>
                                        <th scope="col">Data</th>
                                        <th scope="col">Horário</th>
                                        <th scope="col" class="text-center">...</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $cont = 1;

                                    $sql2 = "SELECT * FROM inscricoes where id_usuario = $id";
                                    $result2 = mysqli_query($conn, $sql2);

                                    while ($data2 = mysqli_fetch_array($result2)) {

                                        $id_evento = $data2['id_evento_pub'];

                                        $sql3 = "SELECT * FROM evento_publicado where id_evento_pub = $id_evento";
                                        $result3 = mysqli_query($conn, $sql3);

                                        while ($data3 = mysqli_fetch_array($result3)) {
                                    ?>
                                            <tr>
                                                <th scope='row'><?php echo $cont++ ?></th>
                                                <td><?php echo $data3['titulo_evento_pub'] ?></td>
                                                <td><?php echo $data3['data_evento_pub'] ?></td>
                                                <td><?php echo $data3['horario_evento_pub'] ?></td>
                                                <td class="text-center"><?php echo "
                                                    <a href='delete_insc.php?id_insc=$data2[id_inscricao]' class='btn btn-danger bi bi-trash'></a>"
                                                ?>
                                                </td>
                                            </tr>
                                    <?php
                                        }
                                    }
                                    ?>






                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="col-md-4 text-center">
                    <h2>Cadastros</h2>
                </div>

                <div class="col-md-12 mt-2 mb-5">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Título</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Data</th>
                                <th scope="col">Horário</th>
                                <th scope="col">Vagas</th>
                                <th scope="col" class="text-center">...</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $cont = 1;

                            $sql4 = "SELECT * FROM eventos_usuario where id_usuario = $id";
                            $result4 = mysqli_query($conn, $sql4);

                            while ($data4 = mysqli_fetch_array($result4)) {
                            ?>
                                <tr>
                                    <th scope='row'><?php echo $cont++ ?></th>
                                    <td><?php echo $data4['titulo_evento'] ?></td>
                                    <td><?php echo $data4['descricao_evento_user'] ?></td>
                                    <td><?php echo $data4['data_evento_user'] ?></td>
                                    <td><?php echo $data4['horario_evento_user'] ?></td>
                                    <td><?php echo $data4['vagas_evento_user'] ?></td>
                                    <td class="text-center"><?php echo "
                                            <a href='edit.php?id_evento=$data4[id_evento_user]' class='btn btn-primary bi bi-pencil'></a>
                                            <a href='delete.php?id_evento=$data4[id_evento_user]' class='btn btn-danger bi bi-trash'></a>"
                                                            ?>
                                    </td>
                                </tr>

                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>




            <section class="display-7" style="padding: 0;align-items: center;justify-content: center;flex-wrap: wrap;    align-content: center;display: flex;position: relative;height: 4rem;"><a href="https://mobiri.se/2863658" style="flex: 1 1;height: 4rem;position: absolute;width: 100%;z-index: 1;"><img alt="" style="height: 4rem;" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="></a>
                <p style="margin: 0;text-align: center;" class="display-7"> &#8204;</p><a style="z-index:1" href="https://mobirise.com/offline-website-builder.html"></a>
            </section>
            <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="../assets/smoothscroll/smooth-scroll.js"></script>
            <script src="../assets/ytplayer/index.js"></script>
            <script src="../assets/dropdown/js/navbar-dropdown.js"></script>
            <script src="../assets/theme/js/script.js"></script>
    </section>
    <section>
        <div class="container-fluid bg">
            <div class="row">
                <div class="col-md-12 navbar-caption text-white m-4 align-center">
                    <a href="../index.php">

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                        </svg>
                    </a>
                    <br>
                    Feito: Éric, Gustavo, Vinnicius
                    <br>

                </div>
            </div>



        </div>
    </section>

    <input name="animation" type="hidden">


</body>

</html>