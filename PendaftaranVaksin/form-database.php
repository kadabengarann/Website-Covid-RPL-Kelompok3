<?php 
    include 'connection.php';
    $nama = $_POST['nama'];
    $nik = $_POST['NIK'];
    $tgllahir = date('Y-m-d',strtotime($_POST['tgllahir']));
    $gender = $_POST['gender'];
    $notelp = $_POST['notelp'];
    $provinsi = $_POST['provinsi'];
    $kota = $_POST['kota'];

    $search = mysqli_query($db,"SELECT nama FROM form_vaksinasi WHERE NIK = '$nik'");
    if ($search->num_rows == 0){
        mysqli_query($db,"INSERT INTO form_vaksinasi VALUES('$nama','$nik','$gender','$tgllahir','$notelp','$provinsi','$kota')");
        echo '<script>
        window.location.href="../PendaftaranVaksin/syaratvaksin.php";
        </script>';
    }
    else{
        echo '<script>
        alert("NIK Sudah Terdaftar!");
        window.location.href="../PendaftaranVaksin/daftarvaksin.php";
        </script>';
    }
?>