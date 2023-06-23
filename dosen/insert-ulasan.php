<html>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="shortcut icon" href="assets/img/utm.png">
</html>

<?php
  include '../koneksi.php';
  session_start();

  $NIP = $_SESSION["NIP"];
  $NIM = $_POST["NIM"];
  $judul_ulasan = $_POST["judul_ulasan"];
  $tanggal_montoring_dosen = $_POST["tanggal_monitoring_dosen"];
  $catatan_monitoring_dosen = $_POST["catatan_monitoring_dosen"];

  $query= "SELECT * FROM dosen_pembimbing WHERE NIP = '$NIP'";
  $sql = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($sql);
  $id_dosen_pembimbing = $row['id_dosen_pembimbing'];
  $query1 = "INSERT INTO monitoring_dosen (id_dosen_pembimbing, NIM, tanggal_monitoring_dosen, judul_ulasan, catatan_monitoring_dosen) VALUES ('$id_dosen_pembimbing','$NIM','$tanggal_montoring_dosen','$judul_ulasan','$catatan_monitoring_dosen') ";
  $result = mysqli_query($conn, $query1);
  if (!$result) { ?>
    <script>
      Swal.fire({
            title: 'GAGAL',
            text: "Monitoring Gagal",
            icon: 'error',
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "ulasan.php";
            }
        }) 
      </script>
  <?php } else { ?>
    <script>
    Swal.fire({
            title: 'BERHASIL',
            text: "Monitoring Berhasil",
            icon: 'success',
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "monitoring.php";
            }
        }) 
    </script>
 <?php 
  } ?>