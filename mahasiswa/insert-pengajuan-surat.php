<html>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>

<?php
include '../koneksi.php';
error_reporting(0);
if (isset($_POST['ajukan'])) {
  session_start();
  $nim = $_SESSION['NIM'];
  $instansi = $_POST['nama_instansi'];
  $mulai = $_POST['waktu_mulai'];
  $selesai = $_POST['waktu_selesai'];
  $alamat = $_POST['alamat_instansi'];
  $tgl_pengajuan = date('Y-m-d');

  $query = "SELECT * FROM pendaftaran WHERE NIM='$nim'";
  $sql = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($sql);
  $id_pendaftaran = $row['id_pendaftaran'];

  $query1 = "SELECT * FROM form_pengantar WHERE id_pendaftaran='$id_pendaftaran' AND status='Disetujui' OR status='Diproses'";
  $sql1 = mysqli_query($conn, $query1);
  $row = mysqli_fetch_array($sql1);
  $status = $row['status'];
  $cek_pengantar = mysqli_num_rows($sql1);
  if (!empty($cek_pengantar) && $status == 'Disetujui') { ?>
    <script>
      Swal.fire({
        title: 'GAGAL',
        text: "Surat pengantar anda sudah disetujui",
        icon: 'error',
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = "status-pengajuan-surat.php";
        }
      })
    </script>
  <?php } elseif (!empty($cek_pengantar) && $status == 'Diproses') { ?>
    <script>
      Swal.fire({
        title: 'GAGAL',
        text: "Surat pengantar anda sedang diproses",
        icon: 'error',
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = "status-pengajuan-surat.php";
        }
      })
    </script>
  <?php } else {
    $query2 = "INSERT INTO form_pengantar VALUES (null, '$id_pendaftaran', '$instansi', '$alamat', '$mulai', '$selesai', '$tgl_pengajuan','Diproses')";
    $sql2 = mysqli_query($conn, $query2); ?>
    <script>
      Swal.fire({
        title: 'Berhasil',
        text: "Surat pengantar berhasil diajukan",
        icon: 'success',
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = "status-pengajuan-surat.php";
        }
      })
    </script>
<?php }
}
?>