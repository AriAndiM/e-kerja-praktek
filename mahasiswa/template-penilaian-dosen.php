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
                <td style="width: 25px; text-align: center;  padding: 10px; font-size:x-large;"><b>BERKAS</b> <br> <b> KP-4a </b></td>
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
                    <p>Komponen Penilaian Ujian Kerja Praktek :</p>
                </td>
            </tr>
        </table>
        <table align="center" border="1" style="border-collapse: collapse; padding-left: 0%;padding-right: 0%;max-width:max-content;">
            <?php
            error_reporting(0);
            $nim = $_SESSION['NIM'];
            $query3 = "SELECT * FROM dosen JOIN dosen_pembimbing ON dosen.NIP=dosen_pembimbing.NIP JOIN monitoring_dosen ON dosen_pembimbing.id_dosen_pembimbing=monitoring_dosen.id_dosen_pembimbing JOIN penilaian_dosen ON monitoring_dosen.id_monitoring_dosen=penilaian_dosen.id_monitoring_dosen WHERE penilaian_dosen.NIM='$nim';";
            $sql3 = mysqli_query($conn, $query3);
            $row3 = mysqli_fetch_array($sql3);
            ?>
            <tr style="text-align: center; ">
                <th style="padding-left: 10px; padding-right:10px; text-align: center;">No.</th>
                <th style="padding-left: 10px; padding-right:10px; text-align: center;width: 120px;">Kriteria</th>
                <th style="padding-left: 10px; padding-right:10px; text-align: center;width: 300px;">Indikator Penilaian</th>
                <th style="padding-left: 10px; padding-right:10px; text-align: center;">Bobot (%)</th>
                <th style="padding-left: 10px; padding-right:10px; text-align: center; width: 50px;">Nilai (0-100)</th>
                <th style="padding-left: 10px; padding-right:10px; text-align: center;  width: 40px;">Nilai Huruf</th>
            </tr>
            <tr>
                <?php
                $nil_rumusan_masalah = $row3['rumusan_masalah'];
                if ($nil_rumusan_masalah > 0 && $nil_rumusan_masalah < 45) {
                    $hasil_nil_rumusan_masalah = 'E';
                } elseif ($nil_rumusan_masalah >= 45 && $nil_rumusan_masalah < 50) {
                    $hasil_nil_rumusan_masalah = 'D';
                } elseif ($nil_rumusan_masalah >= 50 && $nil_rumusan_masalah < 55) {
                    $hasil_nil_rumusan_masalah = 'D+';
                } elseif ($nil_rumusan_masalah >= 55 && $nil_rumusan_masalah < 60) {
                    $hasil_nil_rumusan_masalah = 'C';
                } elseif ($nil_rumusan_masalah >= 60 && $nil_rumusan_masalah < 70) {
                    $hasil_nil_rumusan_masalah = 'C+';
                } elseif ($nil_rumusan_masalah >= 70 && $nil_rumusan_masalah < 75) {
                    $hasil_nil_rumusan_masalah = 'B';
                } elseif ($nil_rumusan_masalah >= 75 && $nil_rumusan_masalah <= 80) {
                    $hasil_nil_rumusan_masalah = 'B+';
                } elseif ($nil_rumusan_masalah > 80 && $nil_rumusan_masalah <= 100) {
                    $hasil_nil_rumusan_masalah = 'A';
                }
                ?>
                <td style="text-align: center;">1.</td>
                <td style="padding-left:10px;">Perumusan Masalah</td>
                <td style="padding-left:10px;">Ketajaman Perumusan Masalah, Tujuaan Penelitian / Kerja Praktek, Kebaharuan dan Originalitas, Kesesuaian Judul dengan Isi</td>
                <td style="text-align: center;">15</td>
                <td style="text-align: center;"><?php echo $nil_rumusan_masalah ?></td>
                <td style="text-align: center;"><?php echo $hasil_nil_rumusan_masalah ?></td>
            </tr>
            <tr>
                <?php
                $nil_manfaat_hasil = $row3['manfaat'];
                if ($nil_manfaat_hasil > 0 && $nil_manfaat_hasil < 45) {
                    $hasil_nil_manfaat_hasil = 'E';
                } elseif ($nil_manfaat_hasil >= 45 && $nil_manfaat_hasil < 50) {
                    $hasil_nil_manfaat_hasil = 'D';
                } elseif ($nil_manfaat_hasil >= 50 && $nil_manfaat_hasil < 55) {
                    $hasil_nil_manfaat_hasil = 'D+';
                } elseif ($nil_manfaat_hasil >= 55 && $nil_manfaat_hasil < 60) {
                    $hasil_nil_manfaat_hasil = 'C';
                } elseif ($nil_manfaat_hasil >= 60 && $nil_manfaat_hasil < 70) {
                    $hasil_nil_manfaat_hasil = 'C+';
                } elseif ($nil_manfaat_hasil >= 70 && $nil_manfaat_hasil < 75) {
                    $hasil_nil_manfaat_hasil = 'B';
                } elseif ($nil_manfaat_hasil >= 75 && $nil_manfaat_hasil <= 80) {
                    $hasil_nil_manfaat_hasil = 'B+';
                } elseif ($nil_manfaat_hasil > 80 && $nil_manfaat_hasil <= 100) {
                    $hasil_nil_manfaat_hasil = 'A';
                }
                ?>
                <td style="text-align: center;">2.</td>
                <td style="padding-left:10px;">Manfaat Hasil Kerja Praktek</td>
                <td style="padding-left:10px;">Pengembangan Ipteks, Pembangunan dan atau Pengembangan Kelembagaan</td>
                <td style="text-align: center;">20</td>
                <td style="text-align: center;"><?php echo $nil_manfaat_hasil ?></td>
                <td style="text-align: center;"><?php echo $hasil_nil_manfaat_hasil ?></td>
            </tr>
            <tr>
                <?php
                $nil_tinjauan_pustaka = $row3['tinjauan_pustaka'];
                if ($nil_tinjauan_pustaka > 0 && $nil_tinjauan_pustaka < 45) {
                    $hasil_nil_tinjauan_pustaka = 'E';
                } elseif ($nil_tinjauan_pustaka >= 45 && $nil_tinjauan_pustaka < 50) {
                    $hasil_nil_tinjauan_pustaka = 'D';
                } elseif ($nil_tinjauan_pustaka >= 50 && $nil_tinjauan_pustaka < 55) {
                    $hasil_nil_tinjauan_pustaka = 'D+';
                } elseif ($nil_tinjauan_pustaka >= 55 && $nil_tinjauan_pustaka < 60) {
                    $hasil_nil_tinjauan_pustaka = 'C';
                } elseif ($nil_tinjauan_pustaka >= 60 && $nil_tinjauan_pustaka < 70) {
                    $hasil_nil_tinjauan_pustaka = 'C+';
                } elseif ($nil_tinjauan_pustaka >= 70 && $nil_tinjauan_pustaka < 75) {
                    $hasil_nil_tinjauan_pustaka = 'B';
                } elseif ($nil_tinjauan_pustaka >= 75 && $nil_tinjauan_pustaka <= 80) {
                    $hasil_nil_tinjauan_pustaka = 'B+';
                } elseif ($nil_tinjauan_pustaka > 80 && $nil_tinjauan_pustaka <= 100) {
                    $hasil_nil_tinjauan_pustaka = 'A';
                }
                ?>
                <td style="text-align: center;">3.</td>
                <td style="padding-left:10px;">Tinjauan Pustaka</td>
                <td style="padding-left:10px;">Relevansi dan Kemutakhiran, Kedalaman, Tinjauan Pustaka</td>
                <td style="text-align: center;">15</td>
                <td style="text-align: center;"><?php echo $nil_tinjauan_pustaka ?></td>
                <td style="text-align: center;"><?php echo $hasil_nil_tinjauan_pustaka ?></td>
            </tr>
            <tr>
                <?php
                $nil_metode_penelitian = $row3['metode_penelitian'];
                $nil_ujian = $row3['nilai_ujian_kerja_praktek'];
                if ($nil_metode_penelitian > 0 && $nil_metode_penelitian < 45) {
                    $hasil_nil_metode_penelitian = 'E';
                } elseif ($nil_metode_penelitian >= 45 && $nil_metode_penelitian < 50) {
                    $hasil_nil_metode_penelitian = 'D';
                } elseif ($nil_metode_penelitian >= 50 && $nil_metode_penelitian < 55) {
                    $hasil_nil_metode_penelitian = 'D+';
                } elseif ($nil_metode_penelitian >= 55 && $nil_metode_penelitian < 60) {
                    $hasil_nil_metode_penelitian = 'C';
                } elseif ($nil_metode_penelitian >= 60 && $nil_metode_penelitian < 70) {
                    $hasil_nil_metode_penelitian = 'C+';
                } elseif ($nil_metode_penelitian >= 70 && $nil_metode_penelitian < 75) {
                    $hasil_nil_metode_penelitian = 'B';
                } elseif ($nil_metode_penelitian >= 75 && $nil_metode_penelitian <= 80) {
                    $hasil_nil_metode_penelitian = 'B+';
                } elseif ($nil_metode_penelitian > 80 && $nil_metode_penelitian <= 100) {
                    $hasil_nil_metode_penelitian = 'A';
                }
                ?>
                <td style="text-align: center;">4.</td>
                <td style="padding-left:10px;">Metode Penelitian</td>
                <td style="padding-left:10px;">Ketepatan Desain, Ketepatan Instrumen, Ketepatan Analisis</td>
                <td style="text-align: center;">20</td>
                <td style="text-align: center;"><?php echo $nil_metode_penelitian ?></td>
                <td style="text-align: center;"><?php echo $hasil_nil_metode_penelitian ?></td>
            </tr>
            <tr>
                <?php
                $nil_presentasi = $row3['presentasi'];
                if ($nil_presentasi > 0 && $nil_presentasi < 45) {
                    $hasil_nil_presentasi = 'E';
                } elseif ($nil_presentasi >= 45 && $nil_presentasi < 50) {
                    $hasil_nil_presentasi = 'D';
                } elseif ($nil_presentasi >= 50 && $nil_presentasi < 55) {
                    $hasil_nil_presentasi = 'D+';
                } elseif ($nil_presentasi >= 55 && $nil_presentasi < 60) {
                    $hasil_nil_presentasi = 'C';
                } elseif ($nil_presentasi >= 60 && $nil_presentasi < 70) {
                    $hasil_nil_presentasi = 'C+';
                } elseif ($nil_presentasi >= 70 && $nil_presentasi < 75) {
                    $hasil_nil_presentasi = 'B';
                } elseif ($nil_presentasi >= 75 && $nil_presentasi <= 80) {
                    $hasil_nil_presentasi = 'B+';
                } elseif ($nil_presentasi > 80 && $nil_presentasi <= 100) {
                    $hasil_nil_presentasi = 'A';
                }
                ?>
                <td style="text-align: center;">5.</td>
                <td style="padding-left:10px;">Presentasi dan Tanya Jawab</td>
                <td style="padding-left:10px;">Presentasi atau Argumentasi</td>
                <td style="text-align: center;">30</td>
                <td style="text-align: center;"><?php echo $nil_presentasi ?></td>
                <td style="text-align: center;"><?php echo $hasil_nil_presentasi ?></td>
            </tr>
            <tr>
                <?php
                $sumnilai = $nil_rumusan_masalah + $nil_manfaat_hasil + $nil_tinjauan_pustaka + $nil_metode_penelitian + $nil_presentasi;
                $nilai = $sumnilai / 5;
                $nilaifinal = number_format($nilai, 1, '.', '');
                if ($nilaifinal > 0 && $nilaifinal < 45) {
                    $hasil_nilaifinal = 'E';
                } elseif ($nilaifinal >= 45 && $nilaifinal < 50) {
                    $hasil_nilaifinal = 'D';
                } elseif ($nilaifinal >= 50 && $nilaifinal < 55) {
                    $hasil_nilaifinal = 'D+';
                } elseif ($nilaifinal >= 55 && $nilaifinal < 60) {
                    $hasil_nilaifinal = 'C';
                } elseif ($nilaifinal >= 60 && $nilaifinal < 70) {
                    $hasil_nilaifinal = 'C+';
                } elseif ($nilaifinal >= 70 && $nilaifinal < 75) {
                    $hasil_nilaifinal = 'B';
                } elseif ($nilaifinal >= 75 && $nilaifinal <= 80) {
                    $hasil_nilaifinal = 'B+';
                } elseif ($nilaifinal > 80 && $nilaifinal <= 100) {
                    $hasil_nilaifinal = 'A';
                }
                ?>
                <td style="text-align: center;"></td>
                <td style="text-align: center;"><b>Jumlah</b></td>
                <td style="padding-left:10px;"></td>
                <td style="text-align: center;"></td>
                <td style="text-align: center;"><?php echo $sumnilai ?></td>
                <td style="text-align: center;"></td>
            </tr>
        </table>
        <br>

        <table align="center" style="border-collapse: collapse; padding-left: 0%;padding-right: 0%;max-width:max-content; text-align:center;">
            <tr>
                <td style="width: 400px;">
                    <p></p>
                </td>
                <td style="width: 300px; text-align: left;">
                    <b>Nilai Sidang Kerja Praktek = <?php echo $nilai ?> </b> <br> Bangkalan, <?php echo date('d-m-Y', strtotime($row3['tanggal_penilaian_dosen'])) ?> <br><br><br><br><br><br> <b><u><?php echo $row3['nama_dosen'] ?></u></b> <br> NIP. <?php echo $row3['NIP'] ?>
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