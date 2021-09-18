<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="stylevaksin.css">
    </head>
    <body>
        <div class="container">
        <fieldset>
            <legend>Form Pendaftaran Vaksinasi</legend>
            <form id="formvaksin" name="frmvaksin" method="post" action="form-database.php">
                <p>
                    <label for="Nama">Nama</label><br>
                    <input type="text" name="Name" id="Name">
                </p>
                <p>
                    <label for="NIK">NIK</label><br>
                    <input type="number" name="NIK" id="NIK">
                </p>
                <p>
                    <label for="Tlahir">Tanggal Lahir</label><br>
                    <input type="date" name="BornDate" id="Borndate">
                </p>
                <p>
                    Gender<br>
                    <input type="radio" name="Gender" id="Laki">
                    <label for="Laki">Laki - laki</label><br>
                    <input type="radio" name="Gender" id="Prmpuan">
                    <label for="Prmpuan">Perempuan</label><br>
                </p>
                <p>
                    <label for="Nponsel">Nomor Ponsel</label><br>
                    <input type="tel" name="NomorPonsel" id="NomorPonsel">
                </p>
                <p>
                    <label for="Prov">Provinsi</label><br>
                    <select id="Province">
                        <option value="">Provinsi</option>
                        <?php
                            //Koneksi database ke form untuk dropdown
                        ?>
                    </select>
                </p>
                <p>
                    <label for="Kota">Kota/Kabupaten</label><br>
                    <select id="City">
                        <option value="">Kota/Kabupaten</option>
                        <?php
                            //Koneksi database ke form untuk dropdown
                        ?>
                    </select>
                </p>
                <button class="button button1" type="submit" form="" value="Submit">Submit</button>
                <button class="button button2" type="button" href="syaratvaksin.html">Kembali </button>
            </form>
        </fieldset>
        </div>
    </body>
</html>