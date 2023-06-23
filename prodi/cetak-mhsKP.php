<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../assets/img/utm.png">
  <title>Cetak Mahasiswa Kerja Praktek</title>
</head>

<body>
  <div class="container">
    <div>
      <div>
        <table align="center" style="padding-left: 0%;padding-right: 0%;max-width:max-content;">
          <tr>
            <td><img src="../assets/img/utm.png" style="width: 100%; max-width: 130px; height: auto;"></td>
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
      </div>
    </div>
  </div>
  <h3 style="text-align: center;">Daftar Mahasiswa Sedang Kerja Praktek <?php echo date('Y'); ?></h3>
  <div style="margin-top: 5 0px;">
    <table border="1" align="center" style="font-weight: normal; border-collapse: collapse;">
      <tr>
        <th style="text-align: center;">No.</th>
        <th>NIM</th>
        <th>Nama Mahasiswa</th>
        <th>Status</th>
      </tr>
      <?php
      include '../koneksi.php';
      $tgl_sekarang = date('Y-m-d');
      $query2 = "SELECT * FROM form_pengantar JOIN pendaftaran ON form_pengantar.id_pendaftaran=pendaftaran.id_pendaftaran JOIN mahasiswa ON pendaftaran.NIM=mahasiswa.NIM JOIN proposal ON mahasiswa.NIM=proposal.NIM WHERE mahasiswa.status_KP NOT IN ('Daftar Akun','Daftar Kerja Praktek','Memiliki DOsbing','Mengajukan Surat Pengantar','Mengunggah Proposal','Selesai Kerja Praktek') AND form_pengantar.status='Disetujui' AND proposal.status = 'Disetujui';";
      $sql2 = mysqli_query($conn, $query2);
      $i = 1;
      while ($data2 = mysqli_fetch_array($sql2)) {
      ?>
        <tr>
          <td style="text-align: center;"><?php echo $i++; ?></td>
          <td><?php echo $data2['NIM'] ?></td>
          <td><?php echo $data2['nama_mahasiswa'] ?></td>
          <td><?php echo $data2['status_KP'] ?></td>
        </tr>
      <?php } ?>
    </table>
  </div>
  <script>
    window.print();
  </script>
</body>

</html>