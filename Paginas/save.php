<?php
include "db.php";

$numero   = $_POST['numero_relatorio'];
$titulo   = $_POST['titulo'];
$data     = $_POST['data_relatorio'];
$pesq     = $_POST['pesquisador'];
$status   = $_POST['status_relatorio'];
$desc     = $_POST['descricao'];
$obs      = $_POST['observacoes'];

if (isset($_POST['id']) && $_POST['id'] != "") {

    $id = $_POST['id'];

    $sql = "UPDATE relatorios SET
        numero_relatorio = '$numero',
        titulo = '$titulo',
        data_relatorio = '$data',
        pesquisador = '$pesq',
        status_relatorio = '$status',
        descricao = '$desc',
        observacoes = '$obs'
        WHERE id = $id";
} 
else {

    $sql = "INSERT INTO relatorios
        (numero_relatorio, titulo, data_relatorio, pesquisador, status_relatorio, descricao, observacoes)
        VALUES 
        ('$numero', '$titulo', '$data', '$pesq', '$status', '$desc', '$obs')";
}

if ($conn->query($sql)) {
    header("Location: relatorio.php");
    exit; // OBRIGATÓRIO
} else {
    echo "Erro: " . $conn->error;
}
