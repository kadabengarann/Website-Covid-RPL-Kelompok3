<?php
require_once("../../services/connection.php");
$stmt = $pdo_conn->prepare("delete from data_covid where id='" . $_GET['id'] . "';");
$stmt->execute();
echo '<script>
		window.location.href="../data_covid_adm.php";
		</script>';
