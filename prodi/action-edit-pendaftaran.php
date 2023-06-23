<html>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>

<?php
include '../koneksi.php';
$id = $_POST['id_prodi'];
$smt = $_POST['semester'];
$tgl_daftar = $_POST['tanggal_pendaftaran'];
$tgl_tutup = $_POST['tanggal_batas_pendaftaran'];
$tgl_surat = $_POST['tanggal_batas_surat'];
$tgl_input = date('Y-m-d');

$query = "UPDATE prodi SET semester='$smt',tanggal_pendaftaran='$tgl_daftar',tanggal_batas_pendaftaran='$tgl_tutup', tanggal_batas_surat='$tgl_surat', tanggal_input='$tgl_input' WHERE id_prodi='$id'";
$sql = mysqli_query($conn, $query);
if (!$sql) { ?>
  <script>
    Swal.fire({
      title: 'GAGAL',
      text: "edit gagal",
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