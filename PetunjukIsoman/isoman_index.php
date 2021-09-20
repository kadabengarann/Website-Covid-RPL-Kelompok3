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
        <table>
            <?php
                include 'isoman_koneksi.php';
                $teks = mysqli_query($conn,"SELECT * FROM isoman") or die(mysqli_error($conn));
                while($hasil = mysqli_fetch_array($teks)){
            ?>

                <tr>
                    <td style="font-family:Arial;font-size:20px;">
                    <?php echo $hasil['teks_petunjuk'] ?></p>
                    </td>
                </tr>
                <?php } ?></p>
        </table>
    </body>
</html>