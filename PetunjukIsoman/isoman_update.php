<!DOCTYPE html>
<html>
    <head>
        <title>Petunjuk Isolasi Mandiri</title>
    </head>
    <body>
        <table style="margin-left:auto;margin-right:auto;">
            <tr>
                <td style="font-family: Arial;text-align:center;background-color:royalblue;color:white;width:1920px;height:100px;">
                    <b style="font-size:30px;">Petunjuk Isolasi Mandiri COVID-19</b>
                </td> 
            </tr >
        </table>
        <hr><hr>
        <form action="" method="POST">
            <table>
            <?php
                include 'isoman_koneksi.php';
                $teks = mysqli_query($conn,"SELECT * FROM isoman") or die(mysqli_error($conn));
                while($hasil = mysqli_fetch_array($teks)){
            ?>
                <tr style="text-align:center;font-size:25px;">
                    <td style="width:700px;padding:2.5% 2.5%;font-family:Arial;text-align:center;"><b> ORIGINAL </b><br></td>
                    <td style="width:700px;padding:2.5% 2.5%;font-family:Arial;"><b> EDIT </b><br></td>
                </tr></table>
            <table border=10 bordercolor=AQUA >
                <tr>
                    <td style="width: 75px;padding:2.5% 2.5%;font-family:Arial;width:700px;">
                        <?php 
                            $print = $hasil['teks_petunjuk'];
                            echo $print ;
                            ?>
                            
                    </td>

                <?php } ?></p>

                    <td style="padding:2.5% 2.5%; width:750px;">
                        <br>
                            <textarea rows="50" cols="75" class="form-control" name="teks" placeholder="" required></textarea>
                    </td>
                </tr>
            </table>
        
        <br><br>
        <input type="submit" name="simpan" value="Simpan" style="padding:1% 2%;background-color:#009900;color:#fff;border-radius:4px;text-decoration:none;font-family:Arial;">
        <input type="button" class="button_active" value="Kembali" onclick="location.href='isoman_index_admin.php';" style="padding:1% 2%;background-color:#009900;color:#fff;border-radius:4px;text-decoration:none;font-family:Arial;">
        </form><br>
        <?php
            if(isset($_POST['simpan'])){
                $teksupdate = $_POST['teks'];
                $sql = "UPDATE isoman SET teks_petunjuk = '$teksupdate' WHERE id_petunjuk = 1";
                $update = mysqli_query($conn,$sql);
                if(!$update){
                    echo "Gagal memperbaharui";
                }
                else{
                    echo "Edit berhasil!";
                }
            }
            ?>
            <br><br>
    </body>
</html>