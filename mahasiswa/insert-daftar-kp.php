<html>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="shortcut icon" href="../assets/img/utm.png">

</html>
<?php
include "../koneksi.php";
session_start();
error_reporting(0);
if (isset($_POST['daftar'])) {
  $NIM = $_POST['NIM'];
  $semester = $_POST['semester'];
  $sks = $_POST['sks_lulus'];
  $IPK = $_POST['IPK'];
  $tgl_daftar = date('Y-m-d');
  $query1 = "SELECT * FROM prodi ORDER BY id_prodi DESC LIMIT 1";
  $sql1 = mysqli_query($conn, $query1);
  $row1 = mysqli_fetch_array($sql1);
  $cek = mysqli_num_rows($sql1);
  $tgl_batas = $row1['tanggal_batas_pendaftaran'];

  // cek sks dan ipk min
  if ($sks >= 84 && $IPK >= 3) {
    // cek ipk apakah lebih dari 4
    if ($IPK > 4) { ?>
      <script>
        Swal.fire({
          title: 'GAGAL',
          text: "IPK melebihi 4.00",
          icon: 'error',
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = "form-pendaftaran.php";
          }
        })
      </script>
    <?php } elseif ($tgl_daftar > $tgl_batas) { ?>
      <script>
        Swal.fire({
          title: 'GAGAL',
          text: "Pendaftaran sudah ditutup",
          icon: 'error',
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = "index-mahasiswa.php";
          }
        })
      </script>
      <?php } else {
      $transkip = $_FILES['transkip_nilai']['name'];
      $file_tmp = $_FILES['transkip_nilai']['tmp_name'];
      move_uploaded_file($file_tmp, '../transkip/' . $transkip);
      $query = "INSERT INTO pendaftaran (id_pendaftaran, NIM, semester, sks_lulus, IPK, transkip_nilai, tanggal_daftar) VALUES (NULL, '" . $NIM . "', '" . $semester . "', '" . $sks . "', '" . $IPK . "', '" . $transkip . "', '" . $tgl_daftar . "')";
      $sql = mysqli_query($conn, $query);

      if (!$sql) { ?>
        <script>
          Swal.fire({
            title: 'GAGAL',
            text: "Pendaftaran tidak berhasil",
            icon: 'error',
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = "index-mahasiswa.php";
            }
          })
        </script>
      <?php } else { ?>
        <script>
          Swal.fire({
            title: 'BERHASIL',
            text: "Silahkan menunggu pembagian dosen",
            icon: 'success',
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = "index-mahasiswa.php";
            }
          })
        </script>
      <?php } ?>
    <?php } ?>

  <?php } else { ?>
    <script>
      Swal.fire({
        title: 'GAGAL',
        text: "SKS / IPK belum memenuhi.",
        icon: 'error',
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = "index-mahasiswa.php";
        }
      })
    </script>
<?php }
}

?>