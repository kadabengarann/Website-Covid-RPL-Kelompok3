<h2>Data User Umum</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>NIK</th>
            <th>Nomor Telepon</th>
            <th>Password</th>
            <th>Alamat</th>
            <th>aksi</th>
        <tr>
    </thead>
    <tbody>
        <?php $ambil=$koneksi->query("SELECT * FROM pengguna");?>
        <?php while ($pecah = $ambil->fetch_assoc()){?>
            <tr>
                <td><?php echo $pecah['id_pengguna']; ?></td>
                <td><?php echo $pecah['nama_lengkap']; ?></td>
                <td><?php echo $pecah['jenis_kelamin']; ?></td>
                <td><?php echo $pecah['tempat_lahir']; ?></td>
                <td><?php echo $pecah['tanggal_lahir']; ?></td>
                <td><?php echo $pecah['nik']; ?></td>
                <td><?php echo $pecah['no_telp']; ?></td>
                <td><?php echo $pecah['password']; ?></td>
                <td><?php echo $pecah['alamat']; ?></td>
                <td>
                    <a href="" class="btn btn-primary">Cetak</a>
                </td>
          </tr>
        <?php } ?>
    </tbody>
</table>