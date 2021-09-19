<?php
// if ($_SESSION['level_user'] != 'admin')
// {
//     echo '<script>
//     window.location.href="./index.php";
//     </script>';
// }
require_once("./services/connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../vendors/argon-design-system-master/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../vendors/argon-design-system-master/assets/img/favicon.png">
    <title>
        Data Covid-19 Terkini | Website Covid Kel3
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="../vendors/argon-design-system-master/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../vendors/argon-design-system-master/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link href="../vendors/argon-design-system-master/assets/css/font-awesome.css" rel="stylesheet" />
    <link href="../vendors/argon-design-system-master/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="../vendors/argon-design-system-master/assets/css/argon-design-system.css?v=1.2.2" rel="stylesheet" />

    <link rel="stylesheet" href="./style/data_covid_style.css">
    <script src="https://kit.fontawesome.com/4ef5a16954.js" crossorigin="anonymous"></script>

</head>

<body class="index-page">
    <!-- Navbar -->
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg bg-white navbar-light position-sticky top-0 shadow py-2">
        <div class="container">
            <a class="navbar-brand mr-lg-5" href="#">
                <img src="./assets/img/logo_white.png">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="">
                                <img src="./assets/img/logo_ color.png">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
                            <i class="ni ni-collection d-lg-none"></i>
                            <span class="nav-link-inner--text">Layanan</span>
                        </a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Tempat Vaksinasi</a>
                            <a href="#" class="dropdown-item">Tempat test SWAB/PCR</a>
                            <a href="#" class="dropdown-item">Informasi RS Rujukan</a>
                            <a href="#" class="dropdown-item">Petunjuk Isoman</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
                            <i class="ni ni-collection d-lg-none"></i>
                            <span class="nav-link-inner--text">Admin</span>
                        </a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Kelola Tempat Vaksinasi</a>
                            <a href="#" class="dropdown-item">Kelola Tempat test SWAB/PCR</a>
                            <a href="#" class="dropdown-item">Kelola Informasi RS Rujukan</a>
                            <a href="#" class="dropdown-item">Kelola Petunjuk Isoman</a>
                            <a href="./DataKasusCovid-19/data_covid_adm.php" class="dropdown-item">Kelola Data Covid Terkini</a>
                            <a href="#" class="dropdown-item">Kelola Zona Wilayah</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                    <li class="nav-item">
                        <a class="btn btn-neutral" href="./Login/login.php">
                            <span class="nav-link-inner--text">Log In</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper">
        <div class="section pt-4">
            <div class="container">
                <div class="card shadow">
                    <div class="px-5 pt-2">
                        <?php
                        if (isset($_GET['id'])) {
                            $stmt = $pdo_conn->prepare("select * FROM data_covid where id='" . $_GET["id"] . "'");
                            $stmt->execute();
                            $result = $stmt->fetchAll();

                        ?>

                            <div class="row justify-content-center">
                                <div class="col">
                                    <div class="card bg-transparent no-shadow mb-0">
                                        <div class="card-body bg-transparent px-0">
                                            <h2 class="h2 card-title mb-0">Edit Data Sebaran Covid di Kalimantan Selatan</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form name="frmUpdt" method="POST" action="./services/update.php?id=<?php echo $_GET['id']; ?>" id="UpdateDataCov">
                                <div class="row mb-3">
                                    <div class="col-md-12 border-right">
                                        <div class="card bg-transparent mb-0">
                                            <div class="card-body bg-transparent">
                                                <div class="p-3 pb-2">
                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                        <h4 class="text-right">Data Covid</h4>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-md-12"><label class="labels  mb-2">Nama Kabupaten/Kota</label><input type="text" class="form-control" placeholder="Nama Kabupaten/Kota" value="<?php echo $result[0]['nama_kabupaten_kota']; ?>" name="nama" required></div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-md-3 mb-3"><label class="labels">Sembuh</label><input type="text" class="form-control editInput" id="edit1" value="<?php echo $result[0]['sembuh']; ?>" placeholder="" name="sembuh" required=""></div>
                                                        <div class="col-md-3 mb-3"><label class="labels">Dirawat</label><input type="text" class="form-control editInput" id="edit2" value="<?php echo $result[0]['dirawat']; ?>" placeholder="" name="dirawat" required=""></div>
                                                        <div class="col-md-3 mb-3"><label class="labels">Meniggal</label><input type="text" class="form-control editInput" id="edit3" value="<?php echo $result[0]['meninggal']; ?>" placeholder="" name="meninggal" required=""></div>
                                                        <div class="col-md-3 mb-3"><label class="labels">Suspek</label><input type="text" class="form-control editInput" value="<?php echo $result[0]['suspek']; ?>" placeholder="" name="suspek" required=""></div>
                                                        <div class="col-md-3 mb-3"><label class="labels">Positif</label><input type="text" class="form-control fixedEditInput" placeholder="" name="positif" required="" readonly></div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card bg-transparent mb-0">
                                            <div class="card-body bg-transparent text-center">
                                                <button class="btn btn-success profile-button" name="update_data_covid" type="submit" form="UpdateDataCov" value="update_data_covid"><i class="fas fa-save"></i> Simpan</button>
                                                <!-- <a class="btn btn-primary" href="?page=form_tambah&amp;obj=Student"><i class="fas fa-save"></i> Simpan</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        <?php
                        } else {
                        ?>
                            <div class="row justify-content-center">
                                <div class="col">
                                    <div class="card bg-transparent no-shadow mb-0">
                                        <div class="card-body bg-transparent px-0">
                                            <h2 class="h2 card-title mb-0">Input Data Sebaran Covid di Kalimantan Selatan</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form name="frmAdd" method="POST" action="./services/add.php" id="AddDataCov">
                                <div class="row mb-3">
                                    <div class="col-md-12 border-right">
                                        <div class="card bg-transparent mb-0">
                                            <div class="card-body bg-transparent">
                                                <div class="p-3 pb-2">
                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                        <h4 class="text-right">Data Covid</h4>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-md-12"><label class="labels  mb-2">Nama Kabupaten/Kota</label><input type="text" class="form-control" placeholder="Nama Kabupaten/Kota" value="" name="nama" required></div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-md-3 mb-3"><label class="labels">Sembuh</label><input type="text" class="form-control fieldInput" id="input1" placeholder="" name="sembuh" required=""></div>
                                                        <div class="col-md-3 mb-3"><label class="labels">Dirawat</label><input type="text" class="form-control fieldInput" id="input2" placeholder="" name="dirawat" required=""></div>
                                                        <div class="col-md-3 mb-3"><label class="labels">Meniggal</label><input type="text" class="form-control fieldInput" id="input3" placeholder="" name="meninggal" required=""></div>
                                                        <div class="col-md-3 mb-3"><label class="labels">Suspek</label><input type="text" class="form-control fieldInput" placeholder="" name="suspek" required=""></div>
                                                        <div class="col-md-3 mb-3"><label class="labels">Positif</label><input type="text" class="form-control fixedInput" placeholder="" name="positif" required="" readonly></div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card bg-transparent mb-0">
                                            <div class="card-body bg-transparent text-center">
                                                <button class="btn btn-success profile-button" name="add_data_covid" type="submit" form="AddDataCov" value="add_data_covid"><i class="fas fa-plus-circle"></i> Tambah</button>
                                                <!-- <a class="btn btn-primary" href="?page=form_tambah&amp;obj=Student"><i class="fas fa-save"></i> Simpan</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        <?php
                        }

                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer has-cards">
        <div class="container">
            <hr>
            <div class="row align-items-center justify-content-md-between">
                <div class="col-md-6">
                    <div class="copyright">
                        &copy; 2021 <a href="" target="_blank">Kelompok-3 RPL</a>.
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="nav nav-footer justify-content-end">
                        <li class="nav-item">
                            <a href="" class="nav-link" target="_blank">Creative Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link" target="_blank">About Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    </div>
    <script>
        <?php
        if (isset($_GET['id'])) {
        ?>
            const fixedEditInput = document.querySelector('.fixedEditInput');
            let edit1 = parseInt(document.querySelector('#edit1').value);
            let edit2 = parseInt(document.querySelector('#edit2').value);
            let edit3 = parseInt(document.querySelector('#edit3').value);
            fixedEditInput.value = edit1 + edit2 + edit3;
            document.addEventListener("DOMContentLoaded", event => {

                document.querySelectorAll('.editInput').forEach(item => {
                    item.addEventListener('change', (event) => {
                        edit1 = parseInt(document.querySelector('#edit1').value);
                        edit2 = parseInt(document.querySelector('#edit2').value);
                        edit3 = parseInt(document.querySelector('#edit3').value);

                        console.log("woy");
                        fixedEditInput.value = edit1 + edit2 + edit3;
                        console.log(fixedEditInput.value);

                    })
                })
            })
        <?php
        } else {
        ?>

            const fixedInput = document.querySelector('.fixedInput');
            let input1 = parseInt(document.querySelector('#input1').value);
            let input2 = parseInt(document.querySelector('#input2').value);
            let input3 = parseInt(document.querySelector('#input3').value);
            fixedInput.value = 0;
            document.addEventListener("DOMContentLoaded", event => {

                document.querySelectorAll('.fieldInput').forEach(item => {
                    item.addEventListener('change', (event) => {
                        input1 = parseInt(document.querySelector('#input1').value);
                        input2 = parseInt(document.querySelector('#input2').value);
                        input3 = parseInt(document.querySelector('#input3').value);

                        console.log("woy");
                        fixedInput.value = input1 + input2 + input3;
                        console.log(fixedInput.value);

                    })
                })
            })
        <?php
        }
        ?>
    </script>

    <!--   Core JS Files   -->
    <script src="../vendors/argon-design-system-master/assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="../vendors/argon-design-system-master/assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="../vendors/argon-design-system-master/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="../vendors/argon-design-system-master/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="../vendors/argon-design-system-master/assets/js/plugins/bootstrap-switch.js"></script>
    <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
</body>

</html>