<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="stylevaksin.css">
    </head>
    <body>
        <header>
            <nav>
                <ul class="topnav">
                    <li><a href="syaratvaksin.html">Syarat</a></li>
                    <li><a class="active" href="daftarvaksin.php">Pendaftaran</a></li>
                    <li><a href="#contact">Tempat dan Waktu</a></li>
                </ul>
            </nav>
        </header>
        <div class="container">
            <h1> Formulir Vaksinasi</h1> 
            <form class="formvaksin" name="frmvaksin" method="post" action="form-database.php"> 
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
                    Jenis Kelamin<br>
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
                <br>
                <button class="button button1" type="submit" form="" value="Submit">Submit</button>
                <button class="button button2" type="button" href="syaratvaksin.html">Kembali </button>
            </form>
        </div>
    </body>
</html>