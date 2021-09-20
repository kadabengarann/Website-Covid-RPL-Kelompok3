<?php
include_once("../services/loginsessioncheck.php");
date_default_timezone_set('Asia/Makassar');
require_once("../services/connection.php");
$stmt = $pdo_conn->prepare("SELECT * FROM data_covid");
$stmt->execute();
$result = $stmt->fetchAll();

$stmt1 = $pdo_conn->prepare("select sum(positif) AS positif,sum(sembuh) AS sembuh,sum(dirawat) AS dirawat,sum(meninggal) AS meninggal,sum(suspek) AS suspek from data_covid");
$stmt1->execute();
$result1 = $stmt1->fetchAll();
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
            <a class="navbar-brand mr-lg-5" href="../index.php">
                <img src="../assets/img/logo_ color.png">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="">
                                <img src="../assets/img/logo_ color.png">
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
                    <?php
                    if (isset($_SESSION['login_user'])) {
                        if ($_SESSION['level_user'] == 'admin') {
                    ?>
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
                    <?php
                        }
                    }
                    ?>
                </ul>
                <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                    <?php
                    if (isset($_SESSION['login_user'])) {
                    ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle nav-link-icon" href="javascript:;" id="nav-inner-success_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ni ni-settings-gear-65"></i>
                                <span class="nav-link-inner--text d-lg-none">Settings</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="nav-inner-success_dropdown_1">
                                <a class="dropdown-item" href="javascript:;">Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../services/logout.php">Logout</a>
                            </div>
                        </li>
                    <?php
                    } else {
                    ?>
                        <li class="nav-item">
                            <a class="btn btn-neutral" href="../Login/login.php">
                                <span class="nav-link-inner--text">Log In</span>
                            </a>
                        </li>

                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper">
        <div class="section pt-4">
            <div class="container">
                <a class="navbar-brand mr-lg-5" href="../">
                    <img src="../assets/img/logo_ color.png">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbar_global">
                    <div class="navbar-collapse-header">
                        <div class="row">
                            <div class="col-6 collapse-brand">
                                <a href="">
                                    <img src="../assets/img/logo_ color.png">
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
                                <a href="../PendaftaranVaksin/syaratvaksin.php" class="dropdown-item">Pendaftaran Vaksinasi</a>
                                <a href="#" class="dropdown-item">Tempat test SWAB/PCR</a>
                                <a href="#" class="dropdown-item">Informasi RS Rujukan</a>
                                <a href="#" class="dropdown-item">Petunjuk Isoman</a>
                            </div>
                        </li>
                        <?php
                        if (isset($_SESSION['login_user'])) {
                            if ($_SESSION['level_user'] == 'admin') {
                        ?>
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
                                        <a href="./data_covid_adm.php" class="dropdown-item">Kelola Data Covid Terkini</a>
                                        <a href="../InformasiZonaWilayah/" class="dropdown-item">Kelola Zona Wilayah</a>
                                    </div>
                                </li>
                        <?php
                            }
                        }
                        ?>
                    </ul>
                    <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                        <?php
                        if (isset($_SESSION['login_user'])) {
                        ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle nav-link-icon" href="javascript:;" id="nav-inner-success_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ni ni-settings-gear-65"></i>
                                    <span class="nav-link-inner--text d-lg-none">Settings</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="nav-inner-success_dropdown_1">
                                    <a class="dropdown-item" href="javascript:;">Profile</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="../services/logout.php">Logout</a>
                                </div>
                            </li>
                        <?php
                        } else {
                        ?>
                            <li class="nav-item">
                                <a class="btn btn-neutral" href="../Login/login.php">
                                    <span class="nav-link-inner--text">Log In</span>
                                </a>
                            </li>

                        <?php
                        }
                        ?>
                    </ul>
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