<?php 
    include_once("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Rumah Sakit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <div class = "container mt-5 border py-5 px-5">
    <H1 align ="center">Masukkan Data Rumah sakit</H1>    
    <form>
        <div class="mb-3">
            <label for="InputNamaRumahSakit" class="form-label">Nama Rumah Sakit</label>
            <input type="text" class="form-control" id="" aria-describedby="">
        </div>
        <div class="mb-3">
            <label for="InputKabupaten" class="form-label">Kabupaten</label>
            <input type="text" class="form-control" id="" aria-describedby="">
        </div>
        <div class="mb-3">
            <label for="InputAlamatRumahSakit" class="form-label">Alamat Lengkap Rumah Sakit</label>
            <input type="text" class="form-control" id="" aria-describedby="">
        </div>
        <div class="mb-3">
            <label for="InputKapasitasRumahSakit" class="form-label">Kapasitas Saat Ini</label>
            <input type="number" class="form-control" id="" aria-describedby="">
        </div>
        <div class="mb-3">
            <label for="InputKontakRumahSakit" class="form-label">Nomor yang Bisa Dihubungi</label>
            <input type="text"  onkeypress="return onlyNumberKey(event)" class="form-control" id="" aria-describedby="">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>
</body>
<script>
    function onlyNumberKey(evt) {
          
        // Only ASCII character in that range allowed
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }
</script>
</html>