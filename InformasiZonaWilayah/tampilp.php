<?php
require_once("koneksi.php");
include_once "paging.php";
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

        <title>Informasi Zona Wilayah</title>
    </head> 
    <body>
        <div class="container">
            <br>
            <center><h1>Informasi Zona Wilayah</h1></center><br>
            <a class="btn btn-primary" href="../index.php" role="button">Kembali</a>
            <div class="table-responsive">
            <table class="table table-striped jambo_table bulk_action">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Wilayah</th>
                        <th>Zona</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($result)) {
                        foreach ($result as $row) {
                    ?>
                            <tr>
                                <td><?php echo $row["id"]; ?></td>
                                <td><?php echo $row["nama"]; ?></td>
                                <td><?php echo $row["status_w"]; ?></td>
                                <td><?php echo $row["tanggal"]; ?></td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
            </div>
            <div class="text-center">
                <ul class="pagination">
                    <?php
                        for ($j = 0; $j < $paginations; $j++) {
                            echo " <li class='page-item'><a class='page-link' href=?start=$j>" . $j . "</a> <li>";
                        }
                    ?>
            </div>
        </div>
    </body>
</html>

