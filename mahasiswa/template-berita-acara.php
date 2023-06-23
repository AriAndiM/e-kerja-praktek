<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/utm.png">
    <title>Cetak Berita Acara</title>
</head>

<body>
    <div style="padding: 50px;">
        <table border="1" align="center" style="border-collapse: collapse; padding-left: 0%;padding-right: 0%;max-width:max-content;">
            <tr>
                <td><img src="images/utm.png" style="width: auto; max-width: 130px; height: auto; padding: 10px;"></td>
                <td style="text-align: center; padding-left: 20px; padding-right: 20px; width: 485px; font-size:x-large;"> <b>TEKNIK INFORMATIKA</b> <br><br> <b>BERITA ACARA UJIAN <br> KERJA PRAKTEK</b></td>
                <td style="width: 25px; text-align: center;  padding: 10px; font-size:x-large;">BERKAS <br> <b> KP-3 </b></td>
            </tr>
        </table>
        <br>
        <table align="center" style="border-collapse: collapse; padding-left: 0%;padding-right: 0%;max-width:max-content;">
            <?php
            include '../koneksi.php';
            session_start();
            $nim = $_SESSION['NIM'];
            $query = "SELECT * FROM pendaftaran JOIN mahasiswa ON pendaftaran.NIM=mahasiswa.NIM JOIN dosen_pembimbing ON mahasiswa.NIM=dosen_pembimbing.NIM JOIN dosen ON dosen_pembimbing.NIP=dosen.NIP WHERE mahasiswa.NIM='$nim';";
            $sql = mysqli_query($conn, $query);
            $row = mysqli_fetch_array($sql);
            ?>
            <tr>
                <td style="padding-left: 15px; width: 745px;" colspan="4">
                    Telah dilaksanakan Ujian Kerja Praktek Tahun Ajaran <?php echo $row['semester'] ?>
                </td>
            </tr>
            <tr>
                <td>
                    <p></p>
                </td>
                <td>
                    <p></p>
                </td>
                <td>
                    <p></p>
                </td>
                <td>
                    <p></p>
                </td>
            </tr>
            <tr>
                <td style="padding-right: 20px;padding-left: 30px; width: 150px;">Hari/Tanggal</td>
                <td>: .......</td>
            </tr>
            <tr>
                <td style="padding-left: 30px;">Waktu</td>
                <td>: .......</td>
            </tr>
            <tr>
                <td>
                    <p></p>
                </td>
            </tr>
            <tr>
                <td style="padding-left: 30px;">Nama</td>
                <td>: <?php echo $row['nama_mahasiswa'] ?></td>
            </tr>
            <tr>
                <td style="padding-left: 30px;">NIM</td>
                <td>: <?php echo $nim ?></td>
            </tr>
            <tr>
                <td style="padding-left: 30px;">Judul Kerja Praktek</td>
                <td>: .......</td>
            </tr>
            <tr>
                <td>
                    <p></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p></p>
                </td>
            </tr>

        </table>
        <table align="center" style="border-collapse: collapse; padding-left: 0%;padding-right: 0%;max-width:max-content;">
            <tr>
                <td colspan="3" style="padding-left: 15px; width: 745px;">
                    Hasil Ujian KP *):
                </td>
            </tr>
            <tr>
                <td colspan="3" style="padding-left: 30px;">a. Kerja Praktek disetujui</td>
            </tr>
            <tr>
                <td style="padding-left: 30px;">b. Kerja Praktek disetujui dengan perbaikan</td>
            </tr>
            <tr>
                <td style="padding-left: 30px;">c. Kerja Praktek tidak disetujui dan Kerja Praktek harus diulang</td>
            </tr>
            <tr>
                <td>
                    <p></p>
                </td>
            </tr>
            <tr>
                <td style="padding-left: 15px;">
                    Kejadian penting selama Ujian Kerja Praktek berlangsung :
                </td>
            </tr>
        </table>
        <table align="center" border="1" style="border-collapse: collapse; padding-left: 0%;padding-right: 0%;max-width:max-content;">
            <tr>
                <td style="width: 730px; height: 130px;">
                    <p></p>
                </td>
            </tr>
        </table>
        <br>
        <table align="center" border="1" style="border-collapse: collapse; padding-left: 0%;padding-right: 0%;max-width:max-content; text-align:center;">
            <tr>
                <td colspan="2" style="width: 730px;">
                    Mengetahui Nilai
                </td>
            </tr>
            <tr>
                <td style="width: 364px;">
                    Koordinator Kerja Praktek <br><br><br><br><br> <b><u>Dr. Fika Hastarita, S.Kom., M.Eng.</u></b> <br> NIP. 198303052006042002<br>
                    <p></p>
                </td>
                <td style="width: 363px;">
                    Pembimbing Kerja Praktek <br><br><br><br><br> <b><u><?php echo $row['nama_dosen'] ?></u></b> <br> NIP. <?php echo $row['NIP'] ?><br>
                    <p></p>
                </td>
            </tr>
        </table>
    </div>
    <script>
        window.print();
    </script>
</body>

</html>