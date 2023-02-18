<?php

session_start();
if(isset($_SESSION['id'])){
    header('Location: ../user/tela_user.php');
    exit();
}

?>

<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v5.6.13, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.6.13, mobirise.com">
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image:src" content="">
  <meta property="og:image" content="">
  <meta name="twitter:title" content="Login">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta name="description" content="">
  
  
  <title>Login</title>
  <link rel="stylesheet" href="../assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="../assets/animatecss/animate.css">
  <link rel="stylesheet" href="../assets/dropdown/css/style.css">
  <link rel="stylesheet" href="../assets/socicon/css/styles.css">
  <link rel="stylesheet" href="../assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="../assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="../assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="../css/style.css"> 
  
  
</head>
<body>

  <!-- inicio do nav 
poderia usar um include-->

  <section data-bs-version="5.1" class="menu menu1 cid-tjpUezaDUt" once="menu" id="menu1-2">
    

    <nav class="navbar navbar-dropdown navbar-fixed-top collapsed">
        <div class="container-fluid">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="../index.php">
                        <img src="../img/logo.png" alt="Mobirise Website Builder" style="height: 3rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-7" href="../index.php">FloodLight</a></span>
            </div>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-white show display-4" href="login.php" aria-expanded="true"><span class="mobi-mbri mobi-mbri-user-2 mbr-iconfont mbr-iconfont-btn" style="color: rgb(255, 255, 255);"></span>Login</a>
                    </li></ul>
            </div>
        </div>
    </nav>
</section>

<!-- fim di nav -->

<section data-bs-version="5.1" class="form6 cid-tjpUlxEMoo" id="form6-1">
    
    
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>Cadastro</strong></h3>
            
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="save_cad_usuario.php" method="POST" class="mbr-form form-with-styler mx-auto" data-form-title="Form Name" enctype="multipart/form-data">
                    <div class="dragArea row">
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="nome_usuario">
                            <input type="text" name="nome_usuario" placeholder="Usuário" data-form-field="nome_usuario" class="form-control " value="" id="nome_usuario-form6-1">
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="email_usuario">
                            <input type="email" name="email_usuario" placeholder="Email" data-form-field="email_usuario" class="form-control " value="" id="email_usuario-form6-1">
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="senha_usuario">
                            <input type="password" name="senha_usuario" placeholder="Senha" data-form-field="senha_usuario" class="form-control " value="" id="senha_usuario-form6-1">
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="nome_organizador">
                            <input type="text" name="nome_organizador" placeholder="Nome Completo" data-form-field="nome_organizador" class="form-control " value="" id="nome_organizador-form6-1">
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="cnpj">
                            <input type="text" name="cnpj" placeholder="CNPJ" data-form-field="cnpj" class="form-control " value="" id="cnpj-form6-1">
                        </div>
                        
                        <div data-for="phone" class="col-lg-12 col-md-12 col-sm-12 form-group mb-3">
                            <input type="text" name="nome_empresa" placeholder="Nome Empresa" data-form-field="nome_empresa" class="form-control" value="" id="nome_empresa-form6-1">
                        </div>

                        <div data-for="phone" class="col-lg-12 col-md-12 col-sm-12 form-group mb-3">
                            <input type="file" name="img_user" data-form-field="nome_empresa" class="form-control" value="" id="img_user-form6-1">
                        </div>

                        <div class="col-auto mbr-section-btn align-center">
                            <input type="submit" class="btn rounded-4 btn-outline-dark" value="Cadastrar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section><section class="display-7" style="padding: 0;align-items: center;justify-content: center;flex-wrap: wrap;    align-content: center;display: flex;position: relative;height: 4rem;"><a href="https://mobiri.se/2863658" style="flex: 1 1;height: 4rem;position: absolute;width: 100%;z-index: 1;"><img alt="" style="height: 4rem;" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="></a><p style="margin: 0;text-align: center;" class="display-7"> &#8204;</p><a style="z-index:1" href="https://mobirise.com/offline-website-builder.html"></a></section><script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="../assets/smoothscroll/smooth-scroll.js"></script>  <script src="../assets/ytplayer/index.js"></script>  <script src="../assets/dropdown/js/navbar-dropdown.js"></script>  <script src="../assets/theme/js/script.js"></script>  <script src="../assets/formoid/formoid.min.js"></script>  
  
  <input name="animation" type="hidden">
  </body>
</html>