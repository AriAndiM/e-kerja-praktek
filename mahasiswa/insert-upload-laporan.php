<html>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="shortcut icon" href="../assets/img/utm.png">

</html>
<?php
include '../koneksi.php';
session_start();

if ($_POST['submit']) {
  $nim = $_SESSION['NIM'];
  $format_file = array('pdf', 'doc', 'docx');
  $laporan = $_FILES['laporan']['name'];
  $x = explode('.', $laporan);
  $ekstensi = strtolower(end($x));
  $laporan = $_FILES['laporan']['name'];
  $file_tmp = $_FILES['laporan']['tmp_name'];

  if (in_array($ekstensi, $format_file) === true) {
    move_uploaded_file($file_tmp, '../laporan/' . $laporan);
    $query = "INSERT INTO laporan (NIM, laporan, status) VALUES ('" . $nim . "', '" . $laporan . "', 'Diterima')";
    $sql = mysqli_query($conn, $query);
    if (!$sql) { ?>
      <script>
        Swal.fire({
          title: 'GAGAL',
          text: "laporan gagal di upload",
          icon: 'error',
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = "upload-laporan.php";
          }
        })
      </script>
    <?php } else { ?>
      <script>
        Swal.fire({
          title: 'BERHASIL',
          text: "laporan berhasil di upload",
          icon: 'success',
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = "upload-laporan.php";
          }
        })
      </script>
    <?php }
  } else { ?>
    <script>
      Swal.fire({
        title: 'GAGAL',
        text: "Format file harus PDF/DOCX/DOC!",
        icon: 'error',
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = "upload-laporan.php";
        }
      })
    </script>
  <?php }
} else { ?>
  <script>
    Swal.fire({
      title: 'GAGAL',
      text: "Anda telah submit laporan!",
      icon: 'error',
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = "upload-laporan.php";
      }
    })
  </script>
<?php } ?>