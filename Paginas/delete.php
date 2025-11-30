<?php
include "db.php";

$id = $_GET['id'];
$conn->query("DELETE FROM relatorios WHERE id = $id");

header("Location: relatorio.php");
?>
