<?php

if (!empty($_POST["add_data_covid"])) {
	// $firstname = explode(' ', $_POST['nama']);
	// $usPass = strtolower($firstname[0]);
	$positif = 6969;
	require_once("connection.php");
	$sql = "INSERT INTO `db_covid`.`data_covid` (`nama_kabupaten_kota`, `positif`, `sembuh`, `dirawat`, `meninggal`, `suspek`) VALUES (:nama_kabupaten_kota, :positif, :sembuh, :dirawat, :meninggal, :suspek);";
	$stmt = $pdo_conn->prepare($sql);
	$result = $stmt->execute(array(
		':nama_kabupaten_kota' => $_POST['nama'], ':positif' => $_POST['positif'], ':sembuh' => $_POST['sembuh'], ':dirawat' => $_POST['dirawat'], ':meninggal' => $_POST['meninggal'], ':suspek' => $_POST['suspek']
	));
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
