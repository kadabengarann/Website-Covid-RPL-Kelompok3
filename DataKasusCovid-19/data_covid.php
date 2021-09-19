<?php
// if ($_SESSION['level_user'] != 'admin')
// {
//     echo '<script>
//     window.location.href="./index.php";
//     </script>';
// }
date_default_timezone_set('Asia/Makassar');
require_once("./services/connection.php");
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Covid</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/data_covid_style.css">
    <script src="https://kit.fontawesome.com/4ef5a16954.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav>

    </nav>
    <main>
        <section class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="card bg-transparent no-shadow mb-0">
                        <div class="card-body bg-transparent px-0">
                            <h2 class="h2 card-title mb-0">Angka Sebaran di Kalimantan Selatan</h2>
                            <small class="h4 text-muted"><?php echo date("F", strtotime(date("Y-m-d H:i:s"))) . " " . date("d, Y H:i:s");
                                                            ?></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12 ">
                    <div class="card text-white bg-warning mb-4">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="card-title">POSITIF<small> (Dirawat, Meninggal & Sembuh)</small></h3>
                                    <h3 class="card-text"><span class="h1"><?php echo $result1[0]["positif"]; ?></span> Orang</h3>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape text-dark bg-white rounded-circle shadow">
                                        <i class="fas fa-head-side-mask"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="card text-white bg-primary mb-4">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="card-title">DIRAWAT</h3>
                                    <h3 class="card-text"><span class="h1"><?php echo $result1[0]["dirawat"]; ?></span> Orang</h3>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape text-dark bg-white rounded-circle shadow">
                                        <i class="fas fa-procedures"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="card text-white bg-dark mb-4">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="card-title">MENINGGAL</h3>
                                    <h3 class="card-text"><span class="h1"><?php echo $result1[0]["meninggal"]; ?></span> Orang</h3>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape text-dark bg-white rounded-circle shadow">
                                        <i class="fas fa-skull-crossbones"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="card text-white bg-success mb-4">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="card-title">SEMBUH</h3>
                                    <h3 class="card-text"><span class="h1"><?php echo $result1[0]["sembuh"]; ?></span> Orang</h3>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape text-dark bg-white rounded-circle shadow">
                                        <i class="far fa-smile"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card bg-transparent mb-4">
                        <div class="card-body bg-transparent">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col" rowspan="2">No.</th>
                                        <th scope="col" rowspan=" 2">Kabupaten/Kota</th>
                                        <th scope="col" rowspan="2" class="align-center">Suspek</th>
                                        <th scope="col" colspan="4" class="text-center">Kasus COVID-19</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Positif</th>
                                        <th scope="col">Sembuh</th>
                                        <th scope="col">Dirawat</th>
                                        <th scope="col">Meninggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (!empty($result)) {
                                        $count = 1;
                                        foreach ($result as $row) {
                                    ?>
                                            <tr>
                                                <th scope="row"><?php echo $count; ?></th>
                                                <td><?php echo $row["nama_kabupaten_kota"]; ?></td>
                                                <td><?php echo $row["suspek"]; ?></td>
                                                <td><?php echo $row["positif"]; ?></td>
                                                <td><?php echo $row["sembuh"]; ?></td>
                                                <td><?php echo $row["dirawat"]; ?></td>
                                                <td><?php echo $row["meninggal"]; ?></td>
                                            </tr>
                                        <?php
                                            $count++;
                                        }
                                    } else {
                                        ?>
                                        <tr>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                    <?php
                                    }

                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>