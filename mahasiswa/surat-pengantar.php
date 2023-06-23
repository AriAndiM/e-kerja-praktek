<?php
include '../koneksi.php';
session_start();
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
  <link rel="shortcut icon" href="../assets/img/utm.png">
  <title>Cetak Surat Pengantar</title>
</head>

<body>
  <div>
    <table align="center" style="padding-left: 0%;padding-right: 0%;max-width:max-content;">
      <tr>
        <td><img src="images/utm.png" style="width: 100%; max-width: 130px; height: auto;"></td>
        <td style="width: 25px;"></td>
        <td style="text-align: center;">KEMENTERIAN PENDIDIKAN, KEBUDAYAAN, RISET, <br> DAN TEKNOLOGI <br> UNIVERSITAS TRUNOJOYO MADURA <br> <b>FAKULTAS TEKNIK</b> <br> Jl. Raya Telang, PO.Box. 2 Kamal, Bangkalan - Madura <br> Telp : (031) 3011146, Fax. (031) 3011506 <br> Laman : www.trunojoyo.ac.id </td>
        <td style="width: 25px;"></td>
      </tr>
      <tr>
        <td colspan="4">
          <hr size="3px" color="black">
        </td>
      </tr>
    </table>
    <table align="center" style="padding-left: 0%;padding-right: 0%;max-width:max-content;">
      <?php

      // function tgl indo
      function tgl_indo($tanggal)
      {
        $bulan = array(
          1 =>   'Januari',
          'Februari',
          'Maret',
          'April',
          'Mei',
          'Juni',
          'Juli',
          'Agustus',
          'September',
          'Oktober',
          'November',
          'Desember'
        );
        $pecahkan = explode('-', $tanggal);

        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun

        return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
      }

      $nim = $_SESSION['NIM'];
      $query = "SELECT * FROM mahasiswa JOIN pendaftaran ON mahasiswa.NIM=pendaftaran.NIM JOIN form_pengantar ON pendaftaran.id_pendaftaran=form_pengantar.id_pendaftaran WHERE mahasiswa.NIM='$nim' ORDER BY id_pengantar DESC LIMIT 1";
      $sql = mysqli_query($conn, $query);
      $row = mysqli_fetch_array($sql);
      $tgl_permintaan = $row['tanggal_permintaan'];
      $hasil_tgl_permintaan = tgl_indo($tgl_permintaan);
      $tgl_awal = $row['waktu_mulai'];
      $tgl_akhir = $row['waktu_selesai'];

      ?>
      <tr>
        <td>Nomor</td>
        <td>:</td>
        <td>B/3284/UN46.3.4/KP.01.06/<?php echo date('Y') ?></td>
        <td style="width: 150px;"></td>
        <td style="width: 130px; text-align: center;"><?php echo $hasil_tgl_permintaan; ?></td>
        <td style="width: 15px;"></td>
      </tr>
      <tr>
        <td>Perihal</td>
        <td>:</td>
        <td>Permohonan Izin Kerja Praktek</td>
        <td style="width: 150px;"></td>
      </tr>
      <tr style="height: 40px;">
        <td>
          <p></p>
        </td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td colspan="6">Yth. Kepala <?php echo $row['nama_instansi'] ?></td>
      </tr>
      <tr>
        <td style="width: 100px;" colspan="4"><?php echo $row['alamat_instansi'] ?></td>
      </tr>
      <tr style="height: 60px;">
        <td>
          <p></p>
        </td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td colspan="6" style="width: 160px; text-align: justify;">Dalam rangka memperkenalkan mahasiswa pada dunia kerja sesuai bidang masing-masing dan untuk memenuhi syarat sebelum mahasiswa mengerjakan Tugas Akhir/Skripsi, maka sesuai ketentuan kurikulum mahasiswa diwajibkan melaksanakan kerja Praktek.</td>
      </tr>
      <tr>
        <td>
          <p></p>
        </td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td colspan="6" style="width: 160px;  text-align: justify;">Guna memperlancar kegiatan Kerja Praktek tersebut, kami mohon perkenan Bapak/Ibu untuk memberikan izin kepada mahasiswa kami untuk dapat melaksanakan kegiatan Kerja Praktek pada <?php echo $row['nama_instansi'] ?> tersebut sejak tanggal <?php echo tgl_indo($tgl_awal) ?> s.d. <?php echo tgl_indo($tgl_akhir) ?>.</td>
      </tr>
      <tr>
        <td>
          <p></p>
        </td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td colspan="6">Adapun mahasiswa tersebut adalah :</td>
      </tr>
      <tr style="height: 15px;">
        <td></td>
      </tr>
    </table>
    <table border="1" align="center" style="border-collapse: collapse;">
      <tr>
        <th>No.</th>
        <th style="width: 170px;">Nama</th>
        <th style="width: 170px;">NPM</th>
        <th style="width: 170px;">Program Studi</th>
      </tr>
      <tr>
        <td>1.</td>
        <td><?php echo $row['nama_mahasiswa']; ?></td>
        <td><?php echo $nim; ?></td>
        <td>Teknik Informatika</td>
      </tr>
    </table>
    <table align="center">
      <tr>
        <td>
          <p></p>
        </td>
      </tr>
      <tr>
        <td style="width: 590px;">Demikian, atas perhatian dan bantuannya kami ucapkan terima kasih.</td>
      </tr>
      <tr style="height: 60px;">
        <td></td>
      </tr>
    </table>
    <table align="center">
      <tr>
        <td style="width: 370px;"></td>
        <td>Dekan</td>
        <td style="width: 32px;"></td>
      </tr>
      <tr style="height: 100px;">
      </tr>
      <tr>
        <td></td>
        <td>Ari Basuki</td>
      </tr>
      <tr>
        <td></td>
        <td>NIP. 197801202003121002</td>
      </tr>
    </table>

  </div>
  <script>
    window.print();
  </script>

</body>

</html>