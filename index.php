<?php
include_once("./services/loginsessioncheck.php");


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./vendors/argon-design-system-master/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./vendors/argon-design-system-master/assets/img/favicon.png">
  <title>
    Website Covid Kel3
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="./vendors/argon-design-system-master/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./vendors/argon-design-system-master/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link href="./vendors/argon-design-system-master/assets/css/font-awesome.css" rel="stylesheet" />
  <link href="./vendors/argon-design-system-master/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="./vendors/argon-design-system-master/assets/css/argon-design-system.css?v=1.2.2" rel="stylesheet" />
</head>

<body class="landing-page">
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light py-2">
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
                  <a href="./InformasiZonaWilayah/" class="dropdown-item">Kelola Zona Wilayah</a>
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
                <a class="dropdown-item" href="./services/logout.php">Logout</a>
              </div>
            </li>
          <?php
          } else {
          ?>
            <li class="nav-item">
              <a class="btn btn-neutral" href="./Login/login.php">
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
    <div class="section section-hero section-shaped">
      <div class="shape shape-style-3 shape-default">
        <span class="span-150"></span>
        <span class="span-50"></span>
        <span class="span-50"></span>
        <span class="span-75"></span>
        <span class="span-100"></span>
        <span class="span-75"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
      </div>
      <div class="page-header">
        <div class="container shape-container d-flex align-items-center py-lg">
          <div class="col px-0">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-6 text-center mt-7 mb-7">
                <h1 class="text-white display-1">Website Covid-19</h1>
                <h2 class="display-4 font-weight-normal text-white">Informasi covid-19 di tangan anda!</h2>
                <div class="row justify-content-center">
                  <div class="col-xs-4 mr-5">
                    <div class="btn-wrapper mt-4">
                      <a href="./DataKasusCovid-19/data_covid.php" class="btn btn-warning btn-icon mt-3 mb-sm-0">
                        <span class="btn-inner--text">Data covid terkini</span>
                      </a>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="btn-wrapper mt-4">
                      <a href="./InformasiZonaWilayah/tampilp.php" class="btn text-white btn-outline-secondary btn-icon mt-3 mb-sm-0">
                        <span class="btn-inner--text">Status zona</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <div class="section features-1">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <span class="badge badge-primary badge-pill mb-3">Layanan</span>
            <h3 class="display-3">Layanan Kami</h3>
            <p class="lead">Semua layanan kami
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mt-3 mb-3">
            <div class="info">
              <a href="#" class="text-primary">
                <div class="icon icon-lg icon-shape icon-shape-primary shadow rounded-circle">
                  <i class="ni ni-settings-gear-65"></i>
                </div>
              </a>
              <h6 class="info-title text-uppercase text-primary">Tempat Vaksinasi</h6>
              <p class="description opacity-8">Don't get your heart broken by people we love, even that we give them all
                we have. Then we lose family over time. As we live, our hearts turn colder.</p>
              <a href="#" class="text-primary">Klik untuk lebih lanjut
                <i class="ni ni-bold-right text-primary"></i>
              </a>
            </div>
          </div>
          <div class="col-md-4 mt-3 mb-3">
            <div class="info">
              <a href="#" class="text-primary">
                <div class="icon icon-lg icon-shape icon-shape-success shadow rounded-circle">
                  <i class="ni ni-atom"></i>
                </div>
              </a>
              <h6 class="info-title text-uppercase text-success">Informasi Test SWAB/PCR</h6>
              <p class="description opacity-8">Don't get your heart broken by people we love, even that we give them all
                we have. Then we lose family over time. As we live, our hearts turn colder.</p>
              <a href="#" class="text-primary">Klik untuk lebih lanjut
                <i class="ni ni-bold-right text-primary"></i>
              </a>
            </div>
          </div>
          <div class="col-md-4 mt-3 mb-3">
            <div class="info">
              <a href="#" class="text-primary">
                <div class="icon icon-lg icon-shape icon-shape-warning shadow rounded-circle">
                  <i class="ni ni-world"></i>
                </div>
              </a>
              <h6 class="info-title text-uppercase text-warning">Informasi RS Rujukan</h6>
              <p class="description opacity-8">What else could rust the heart more over time? Blackgold. The time is now
                for it to be okay to be great. or being a bright color. For standing out.</p>
              <a href="#" class="text-primary">Klik untuk lebih lanjut
                <i class="ni ni-bold-right text-primary"></i>
              </a>
            </div>
          </div>
          <div class="col-md-4 mt-3 mb-3">
            <div class="info">
              <a href="#" class="text-primary">
                <div class="icon icon-lg icon-shape icon-shape-warning shadow rounded-circle">
                  <i class="ni ni-world"></i>
                </div>
              </a>
              <h6 class="info-title text-uppercase text-warning">Petunjuk Isoman</h6>
              <p class="description opacity-8">What else could rust the heart more over time? Blackgold. The time is now
                for it to be okay to be great. or being a bright color. For standing out.</p>
              <a href="#" class="text-primary">Klik untuk lebih lanjut
                <i class="ni ni-bold-right text-primary"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br /><br />
    <footer class="footer">
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
  <script src="./vendors/argon-design-system-master/assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./vendors/argon-design-system-master/assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./vendors/argon-design-system-master/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="./vendors/argon-design-system-master/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="./vendors/argon-design-system-master/assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./vendors/argon-design-system-master/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <script src="./vendors/argon-design-system-master/assets/js/plugins/moment.min.js"></script>
  <script src="./vendors/argon-design-system-master/assets/js/plugins/datetimepicker.js" type="text/javascript"></script>
  <script src="./vendors/argon-design-system-master/assets/js/plugins/bootstrap-datepicker.min.js"></script>
  <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="./vendors/argon-design-system-master/assets/js/argon-design-system.min.js?v=1.2.2" type="text/javascript"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-design-system-pro"
      });
  </script>
</body>

</html>