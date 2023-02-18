<?php

session_start();

include("../conexao/conexao.php");

$id = $_SESSION['id'];

$id_evento = $_SESSION['id_evento'];


$sql = "INSERT INTO inscricoes (id_usuario, id_evento_pub) values
('$id', '$id_evento')";
$result = mysqli_query($conn, $sql);

$sql2 = "SELECT * FROM evento_publicado where id_evento_pub = $id_evento";
$result2 = mysqli_query($conn, $sql2);
$data = mysqli_fetch_array($result2);

$vagas = $data['vagas_evento_pub'];
$vagas = $vagas - 1;

$sql3 = "UPDATE evento_publicado set vagas_evento_pub = $vagas where id_evento_pub = $id_evento";
$result3 = mysqli_query($conn, $sql3);


echo "<script>alert('Inscrito com sucesso!');
    window.location.href = 'tela_user.php';</script>";

?>