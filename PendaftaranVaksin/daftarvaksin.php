<!DOCTYPE html>
<html>
<head>
<link href="../assets/stylevaksin.css" rel="stylesheet">
</head>
    <body>
        <div class="form">
            <progress id="loading" value="66" max="100"> 66% </progress>
            <h1> Formulir Vaksinasi</h1> 
            <form class="formvaksin" name="frmvaksin" method="post" action="form-database.php"> 
                <p>
                    <label for="Nama">Nama</label><br>
                    <input type="text" name="nama" placeholder="Nama" required>
                </p>
                <p>
                    <label for="NIK">NIK</label><br>
                    <input type="number" name="NIK" placeholder="Nomor Induk Kependudukan" required>
                </p>
                <p>
                    <label for="Tlahir">Tanggal Lahir</label><br>
                    <input type="date" name="tgllahir" placeholder="Tanggal Lahir" required>
                </p>
                <p>
                    Jenis Kelamin<br>
                    <input type="radio" name="gender" id="Laki" value="laki">
                    <label for="Laki">Laki - laki</label><br>
                    <input type="radio" name="gender" id="Prmpuan" value="prmpn">
                    <label for="Prmpuan">Perempuan</label><br>
                </p>
                <p>
                    <label for="Ntelpon">Nomor Telpon</label><br>
                    <input type="tel" name="notelp" placeholder="Nomor Telpon" required>
                </p>
                <p>
                    <label for="Prov">Provinsi</label><br>
                    <select name="provinsi"> 
                    <option value="" disabled selected hidden>Provinsi</option>
                        <?php
                            require_once('connection.php');
                            $records = mysqli_query($db, "SELECT kabupaten From data_covid");

                            while($data = mysqli_fetch_array($records))
                            {
                                echo "<option value='". $data['kabupaten'] ."'>" .$data['kabupaten'] ."</option>";
                            }	
                        ?>
                    </select>
                </p>
                <p>
                    <label for="Kota">Kota/Kabupaten</label><br>
                    <select name="kota">
                    <option value="" disabled selected hidden>Kota/Kabupaten</option>
                        <?php
                            $records = mysqli_query($db, "SELECT kabupaten From data_covid");

                            while($data = mysqli_fetch_array($records))
                            {
                                echo "<option value='". $data['kabupaten'] ."'>" .$data['kabupaten'] ."</option>";
                            }	
                        ?>
                    </select>
                </p>
                <br>
                <button class="btn btn1" type="submit" value="Submit">Submit</button>
                <button class="btn btn2" type="button" value="Kembali" onclick="history.back()">Kembali</button>
            </form>
        </div>
    </body>
</html>