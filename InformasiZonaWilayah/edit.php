<?php
require_once("koneksi.php");
$stmt = $pdo_conn->prepare("SELECT * FROM wilayah where id='" . $_GET["id"] . "'");
$stmt->execute();
$result = $stmt->fetchAll();
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

        <title>Update Informasi Zona Wilayah</title>
    </head>
    <body>
        <div class="container body" align="center">
        <br><h1 align="center">Update Data</h1>
        <form name="frmAdd" action="update.php" method="POST">
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align">ID Wilayah</label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" class="form-control"  name="id" value="<?php echo $result[0]['id']; ?>" required readonly>
              </div>
            </div>
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align">Wilayah</label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" class="form-control"  name="nama" value="<?php echo $result[0]['nama']; ?>" required>
              </div>
            </div>
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align">Status</label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" class="form-control"  name="status_w" value="<?php echo $result[0]['status_w']; ?>" required>
              </div>
            </div>
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal</label>
              <div class="col-md-6 col-sm-6 ">
                <input type="date" class="form-control" name="tanggal" value="<?php echo $result[0]['tanggal']; ?>"required>
              </div>    
            </div>
            <br>
            <div class="item form-group">
				<div  class="col-md-6 col-sm-6 ">
                    <input type="submit" name="save_record" class="btn btn-primary" value="tambah">
                    <a class="btn btn-danger" href="index.php" role="button">Kembali</a>
                </div>
			</div>
          </form>
        </div>
    </body>
</html>
