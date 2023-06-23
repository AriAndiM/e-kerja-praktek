<html>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="shortcut icon" href="../assets/img/utm.png">

</html>
<?php
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include '../koneksi.php';
session_start();

if ($_POST['submit']) {
  $nim = $_SESSION['NIM'];
  $format_file = array('pdf', 'doc', 'docx');
  $proposal = $_FILES['proposal']['name'];
  $x = explode('.', $proposal);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['proposal']['tmp_name'];

  if (in_array($ekstensi, $format_file) === true) {
    move_uploaded_file($file_tmp, '../proposal/' . $proposal);
    $query = "INSERT INTO proposal (NIM, proposal,status) VALUES ('$nim', '$proposal', 'Diproses')";
    $sql = mysqli_query($conn, $query);
    if (!$sql) { 
    ?>
      <script>
        Swal.fire({
          title: 'GAGAL',
          text: "proposal gagal di upload",
          icon: 'error',
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = "upload-proposal.php";
          }
        })
      </script>
    <?php } else { ?>
      <script>
        Swal.fire({
          title: 'BERHASIL',
          text: "proposal berhasil di upload",
          icon: 'success',
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = "upload-proposal.php";
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
          window.location.href = "upload-proposal.php";
        }
      })
    </script>
  <?php }
} else { ?>
  <script>
    Swal.fire({
      title: 'GAGAL',
      text: "Proposal anda telah disetujui!",
      icon: 'error',
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = "upload-proposal.php";
      }
    })
  </script>
<?php } ?>