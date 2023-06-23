<?php
session_start();
include '../koneksi.php';

//cek apakah sudah login
if (empty($_SESSION['login'])) {
    header("location:../login_mahasiswa.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian</title>
</head>

<body>
    <div style="padding: 50px;">
        <table border="1" align="center" style="border-collapse: collapse; padding-left: 0%;padding-right: 0%;max-width:max-content;">
            <tr>
                <td><img src="images/utm.png" style="width: auto; max-width: 130px; height: auto; padding: 10px;"></td>
                <td style="text-align: center; padding-left: 20px; padding-right: 20px; width: 485px; font-size:x-large;"><b>TEKNIK INFORMATIKA</b> <br><br> <b>PENILAIAN <br> KERJA PRAKTEK</b></td>
                <td style="width: 25px; text-align: center;  padding: 10px; font-size:x-large;"><b>BERKAS</b> <br> <b> KP-4b </b></td>
            </tr>
        </table>
        <br>
        <table align="center" style="border-collapse: collapse;max-width:max-content; padding-left: 0%;padding-right: 0%;">

            <tr>
                <?php
                $nim = $_SESSION['NIM'];
                $query2 = "SELECT * FROM mahasiswa WHERE NIM = '$nim'";
                $sql2 = mysqli_query($conn, $query2);
                $row = mysqli_fetch_array($sql2);
                ?>
                <td style="width: 130px;">Nama Mahasiswa</td>
                <td style="width: 600px;">: <?php echo $row['nama_mahasiswa'] ?>
                </td>
            </tr>
            <tr>
                <td style="width: 130px;">NRP</td>
                <td style="width: 130px;">: <?php echo $nim ?></td>
            </tr>
        </table>
        <table align="center" style="border-collapse: collapse; padding-left: 0%;padding-right: 0%;max-width:max-content;">
            <tr>
                <td colspan="3" style="padding-left: 15px; width: 745px;">
                    <p>Penilaian Lapangan :</p>
                </td>
            </tr>
        </table>
        <table align="center" border="1" style="border-collapse: collapse; padding-left: 0%;padding-right: 0%;max-width:max-content;">
            <tr>
                <td colspan="6"><b>Dari Perusahaan</b></td>
            </tr>
            <?php
            error_reporting(0);
            $nim = $_SESSION['NIM'];
            $query3 = "SELECT * FROM pembimbing_lapangan JOIN daftar_pembimbing ON pembimbing_lapangan.id_daftar_pembimbing=daftar_pembimbing.id_daftar_pembimbing JOIN monitoring_instansi ON daftar_pembimbing.id_daftar_pembimbing=monitoring_instansi.id_daftar_pembimbing JOIN penilaian_instansi ON monitoring_instansi.id_monitoring_instansi=penilaian_instansi.id_monitoring_instansi WHERE penilaian_instansi.NIM='$nim' AND pembimbing_lapangan.NIM='$nim';";
            $sql3 = mysqli_query($conn, $query3);
            $row3 = mysqli_fetch_array($sql3);
            ?>
            <tr style="text-align: center; ">
                <th style="padding-left: 10px; padding-right:10px; text-align: center;width: 480px;">Kriteria</th>
                <th style="padding-left: 10px; padding-right:10px; text-align: center;">Bobot (%)</th>
                <th style="padding-left: 10px; padding-right:10px; text-align: center; width: 50px;">Nilai (0-100)</th>
                <th style="padding-left: 10px; padding-right:10px; text-align: center;  width: 40px;">Nilai Huruf</th>
            </tr>
            <tr>
                <?php
                $nil_kemampuan = $row3['kemampuan'];
                if ($nil_kemampuan > 0 && $nil_kemampuan < 45) {
                    $hasil_nil_kemampuan = 'E';
                } elseif ($nil_kemampuan >= 45 && $nil_kemampuan < 50) {
                    $hasil_nil_kemampuan = 'D';
                } elseif ($nil_kemampuan >= 50 && $nil_kemampuan < 55) {
                    $hasil_nil_kemampuan = 'D+';
                } elseif ($nil_kemampuan >= 55 && $nil_kemampuan < 60) {
                    $hasil_nil_kemampuan = 'C';
                } elseif ($nil_kemampuan >= 60 && $nil_kemampuan < 70) {
                    $hasil_nil_kemampuan = 'C+';
                } elseif ($nil_kemampuan >= 70 && $nil_kemampuan < 75) {
                    $hasil_nil_kemampuan = 'B';
                } elseif ($nil_kemampuan >= 75 && $nil_kemampuan <= 80) {
                    $hasil_nil_kemampuan = 'B+';
                } elseif ($nil_kemampuan > 80 && $nil_kemampuan <= 100) {
                    $hasil_nil_kemampuan = 'A';
                }
                ?>
                <td style="padding-left:10px;">Kemampuan menyelesaikan tugas</td>
                <td style="text-align: center;">15</td>
                <td style="text-align: center;"><?php echo $nil_kemampuan ?></td>
                <td style="text-align: center;"><?php echo $hasil_nil_kemampuan ?></td>
            </tr>
            <tr>
                <?php
                $nil_sikap = $row3['sikap'];
                if ($nil_sikap > 0 && $nil_sikap < 45) {
                    $hasil_nil_sikap = 'E';
                } elseif ($nil_sikap >= 45 && $nil_sikap < 50) {
                    $hasil_nil_sikap = 'D';
                } elseif ($nil_sikap >= 50 && $nil_sikap < 55) {
                    $hasil_nil_sikap = 'D+';
                } elseif ($nil_sikap >= 55 && $nil_sikap < 60) {
                    $hasil_nil_sikap = 'C';
                } elseif ($nil_sikap >= 60 && $nil_sikap < 70) {
                    $hasil_nil_sikap = 'C+';
                } elseif ($nil_sikap >= 70 && $nil_sikap < 75) {
                    $hasil_nil_sikap = 'B';
                } elseif ($nil_sikap >= 75 && $nil_sikap <= 80) {
                    $hasil_nil_sikap = 'B+';
                } elseif ($nil_sikap > 80 && $nil_sikap <= 100) {
                    $hasil_nil_sikap = 'A';
                }
                ?>
                <td style="padding-left:10px;">Tingkah laku/sikap</td>
                <td style="text-align: center;">20</td>
                <td style="text-align: center;"><?php echo $nil_sikap ?></td>
                <td style="text-align: center;"><?php echo $hasil_nil_sikap ?></td>
            </tr>
            <tr>
                <?php
                $nil_kedisiplinan = $row3['kedisiplinan'];
                if ($nil_kedisiplinan > 0 && $nil_kedisiplinan < 45) {
                    $hasil_nil_kedisiplinan = 'E';
                } elseif ($nil_kedisiplinan >= 45 && $nil_kedisiplinan < 50) {
                    $hasil_nil_kedisiplinan = 'D';
                } elseif ($nil_kedisiplinan >= 50 && $nil_kedisiplinan < 55) {
                    $hasil_nil_kedisiplinan = 'D+';
                } elseif ($nil_kedisiplinan >= 55 && $nil_kedisiplinan < 60) {
                    $hasil_nil_kedisiplinan = 'C';
                } elseif ($nil_kedisiplinan >= 60 && $nil_kedisiplinan < 70) {
                    $hasil_nil_kedisiplinan = 'C+';
                } elseif ($nil_kedisiplinan >= 70 && $nil_kedisiplinan < 75) {
                    $hasil_nil_kedisiplinan = 'B';
                } elseif ($nil_kedisiplinan >= 75 && $nil_kedisiplinan <= 80) {
                    $hasil_nil_kedisiplinan = 'B+';
                } elseif ($nil_kedisiplinan > 80 && $nil_kedisiplinan <= 100) {
                    $hasil_nil_kedisiplinan = 'A';
                }
                ?>
                <td style="padding-left:10px;">Kedisiplinan</td>
                <td style="text-align: center;">15</td>
                <td style="text-align: center;"><?php echo $nil_kedisiplinan ?></td>
                <td style="text-align: center;"><?php echo $hasil_nil_kedisiplinan ?></td>
            </tr>
            <tr>
                <?php
                $sumnilai = $nil_kemampuan + $nil_sikap + $nil_kedisiplinan;
                $nilai = $sumnilai / 3;
                $nilaifinal = number_format($nilai, 1, '.', '');
                if ($nilai > 0 && $nilai < 45) {
                    $nilai_huruf = 'E';
                } elseif ($nilai >= 45 && $nilai < 50) {
                    $nilai_huruf = 'D';
                } elseif ($nilai >= 50 && $nilai < 55) {
                    $nilai_huruf = 'D+';
                } elseif ($nilai >= 55 && $nilai < 60) {
                    $nilai_huruf = 'C';
                } elseif ($nilai >= 60 && $nilai < 70) {
                    $nilai_huruf = 'C+';
                } elseif ($nilai >= 70 && $nilai < 75) {
                    $nilai_huruf = 'B';
                } elseif ($nilai >= 75 && $nilai <= 80) {
                    $nilai_huruf = 'B+';
                } elseif ($nilai > 80 && $nilai <= 100) {
                    $nilai_huruf = 'A';
                }
                ?>
                <td style="text-align: center;" colspan="3">TOTAL</td>
                <td style=" text-align: center;"><?php echo $sumnilai ?></td>
            </tr>
            <tr>
                <td style="text-align: center;" colspan="3">NILAI HURUF</td>
                <td style=" text-align: center;"><?php echo $nilai_huruf ?></td>
            </tr>

        </table>
        <br>

        <table align="center" style="border-collapse: collapse; padding-left: 0%;padding-right: 0%;max-width:max-content; text-align:center;">
            <tr>
                <td style="width: 400px;">
                    <p></p>
                </td>
                <td style="width: 300px; text-align: left;">
                    <b>Nilai Sidang Kerja Praktek = <?php echo $nilaifinal ?> </b> <br> Bangkalan, <?php echo date('d-m-Y', strtotime($row3['tanggal_penilaian_instansi'])) ?> <br><br><br><br><br><br> <b><u><?php echo $row3['nama_pembimbing_lapangan'] ?></u></b> <br> NIP. <?php echo $row3['NIP_pembimbing_lapangan'] ?>
                </td>
            </tr>
        </table>
        <br><br><br><br><br><br>
        <!-- <table align="center" style="border-collapse: collapse; padding-left: 0%;padding-right: 0%;max-width:max-content; text-align:center;">
            <tr>
                <td style="width: 250px;">A : (80 < Nilai <=100)</td>
                <td style="width: 250px;">C+ : (60 <= Nilai < 70)</td>
                <td style="width: 250px;">D : (45 <= Nilai < 50)</td>
            </tr>
            <tr>
                <td style="width: 250px;">B+ : (75 <= Nilai < 80)</td>
                <td style="width: 250px;">C : (55 <= Nilai < 60)</td>
                <td style="width: 250px;">E : (0 <= Nilai < 45)</td>
            </tr>
            <tr>
                <td style="width: 250px;">B : (70 <= Nilai < 75)</td>
                <td style="width: 250px;">D+ : (50 <= Nilai < 55)</td>
            </tr>
        </table> -->
    </div>
    <script>
        window.print();
    </script>
</body>

</html>