<?php

require_once("connection.php");

if (!empty($_POST["update_data_covid"])) {
    date_default_timezone_set('Asia/Makassar');
    $date = date('Y-m-d H:i:s');
    echo $date;
    $pdo_statement = $pdo_conn->prepare("update data_covid set nama_kabupaten_kota='" . $_POST['nama'] . "', positif=" . $_POST['positif'] . ", sembuh=" . $_POST['sembuh'] . ", dirawat=" . $_POST['dirawat'] . ", meninggal=" . $_POST['meninggal'] . ", suspek=" . $_POST['suspek'] . ", updated_at= '" . $date . "' where id ='" . $_GET['id'] . "'");
    $result = $pdo_statement->execute();
    if (!empty($result)) {
        echo '<script>
		alert(' . '"Berhasil mengubah");
		window.location.href="../data_covid_adm.php";
		</script>';
    }
}
// nama_kabupaten_kota`, `positif`, `sembuh`, `dirawat`, `meninggal`, `suspek`)