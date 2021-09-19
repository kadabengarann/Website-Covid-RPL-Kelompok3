<?php
// if ($_SESSION['level_user'] != 'admin')
// {
//     echo '<script>
//     window.location.href="./index.php";
//     </script>';
// }
require_once("./services/connection.php");
// $stmt = $pdo_conn->prepare("SELECT * FROM users where level='admin'");
// $stmt->execute();
// $result = $stmt->fetchAll();

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
        <?php
        if (isset($_GET['id'])) {
            $stmt = $pdo_conn->prepare("select * FROM data_covid where id='" . $_GET["id"] . "'");
            $stmt->execute();
            $result = $stmt->fetchAll();

        ?>
            <section class="container">
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
            </section>
        <?php
        } else {
        ?>
            <section class="container">
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
            </section>
        <?php
        }

        ?>
    </main>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>