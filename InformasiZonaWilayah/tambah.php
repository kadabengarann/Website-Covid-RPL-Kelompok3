<?php
if (!empty($_POST["add_record"])) {
    require_once ("koneksi.php");
    $sql = "INSERT INTO wilayah (id, nama, status_w, tanggal) VALUES (:id, :nama, :status_w, :tanggal)";
    $stmt = $pdo_conn->prepare($sql);
    $result = $stmt->execute(array(':id' => $_POST['id'], ':nama' => $_POST['nama'], ':status_w' => $_POST['status_w'], ':tanggal' => $_POST['tanggal']));
    if (!empty($result)) {
        header('location:index.php');
    } else {
        echo 'Wilayah sudah ada sebelumnya';
    }
}
?>