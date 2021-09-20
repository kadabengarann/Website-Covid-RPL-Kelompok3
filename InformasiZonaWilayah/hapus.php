<?php
require_once("koneksi.php");
$stmt=$pdo_conn->prepare("delete from wilayah where id='" . $_GET['id']."'");
$stmt->execute();
header('location:index.php');
?>