<?php
require_once "koneksi.php";
if(!empty($_POST["save_record"])) {
	$pdo_statement=$pdo_conn->prepare("update wilayah set nama='" . $_POST[ 'nama' ] . "', status_w='" . $_POST[ 'status_w' ]. "', tanggal='" . $_POST[ 'tanggal' ]. "' where id='" . $_POST['id']."'");
	$result = $pdo_statement->execute();
	if($result) {
		header('location:index.php');
	}
}
?>