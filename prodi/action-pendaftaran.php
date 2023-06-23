<html>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>

<?php
include '../koneksi.php';
$smt = $_POST['semester'];
$tgl_daftar = $_POST['tanggal_pendaftaran'];
$tgl_tutup = $_POST['tanggal_batas_pendaftaran'];
$tgl_surat = $_POST['tanggal_batas_surat'];
$tgl_input = date('Y-m-d');

$query = "INSERT INTO prodi VALUES (null,'$smt', '$tgl_daftar', '$tgl_tutup', '$tgl_surat', '$tgl_input')";
$sql = mysqli_query($conn, $query);
if (!$sql) { ?>
  <script>
    Swal.fire({
      title: 'GAGAL',
      text: "input gagal",
      icon: 'error',
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = "pendaftaran.php";
      }
    })
  </script>
<?php } else {
  header('location:pendaftaran.php');
}
?>