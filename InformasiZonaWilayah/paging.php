<?php 
require_once("koneksi.php");
$start = 0;
$per_page = 25;
$page_counter=0;

if(isset($_GET['start'])){
$start = $_GET['start'];
$page_counter = $_GET['start'];
$start = $start * $per_page;
}

// query untuk menampilkan data pada tabel murid dengan batasan pagination
$q = "SELECT * FROM wilayah LIMIT $start, $per_page";
$query = $pdo_conn->prepare($q);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);

//menghitung jumlah total baris pada tabel murid
$count_query = "SELECT * FROM wilayah";
$query_jlh = $pdo_conn->prepare($count_query);
$query_jlh->execute();
$count = $query_jlh->rowCount();

//menghitung jumlah pagination dengan membagi jumlah baris dengan jumlah tampil data per halaman
$paginations = ceil($count / $per_page); //ceil fungsi pembulatan
?>