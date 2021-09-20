<?php

if (!empty($_POST["add_data_covid"])) {
	date_default_timezone_set('Asia/Makassar');
	$date = date('Y-m-d H:i:s');
	require_once("../../services/connection.php");
	$sql = "INSERT INTO `data_covid` (`kabupaten`, `suspek`, `positif`, `sembuh`, `dirawat`, `meninggal`, `updated_at`) VALUES (:kabupaten,  :suspek,:positif, :sembuh, :dirawat, :meninggal, :updated_at);";
	$stmt = $pdo_conn->prepare($sql);
	$result = $stmt->execute(array(
		':kabupaten' => $_POST['nama'], ':suspek' => $_POST['suspek'], ':positif' => $_POST['positif'], ':sembuh' => $_POST['sembuh'], ':dirawat' => $_POST['dirawat'], ':meninggal' => $_POST['meninggal'],  ':updated_at' => $date
	));
	echo "hai";
	if (!empty($result)) {
		echo '<script>
			alert(' . '"Berhasil menambahkan");
			window.location.href="../data_covid_adm.php";
			</script>';
	}
	// else {
	// 	echo '<script>
	// 	alert(' . '"Data sudah ada");
	// 	// window.location.href="../index.php?page=form_tambah&obj=Student";
	// 	</script>';
	// }
}
