<?php
session_start();

include_once("../conexao/conexao.php");

$id = $_SESSION['id'];
$id_insc = $_GET['id_insc'];

$sql1 = "SELECT * FROM inscricoes where id_inscricao = $id_insc";
$result1 = mysqli_query($conn, $sql1);
$data1 = mysqli_fetch_array($result1);

$id_evento = $data1['id_evento_pub'];

$remove = "DELETE FROM inscricoes WHERE id_inscricao = $id_insc";
$remove_result = mysqli_query($conn, $remove);

$sql2 = "SELECT * FROM evento_publicado where id_evento_pub = $id_evento";
$result2 = mysqli_query($conn, $sql2);
$data = mysqli_fetch_array($result2);

$vagas = $data['vagas_evento_pub'];
$vagas = $vagas + 1;

$sql3 = "UPDATE evento_publicado set vagas_evento_pub = $vagas where id_evento_pub = $id_evento";
$result3 = mysqli_query($conn, $sql3);


echo "<script>alert('Excluido com sucesso!');
    window.location.href = 'perfil_user.php';</script>";

?>