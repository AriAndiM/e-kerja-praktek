<html>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</html>

<?php 
include '../koneksi.php';
$id = $_GET['id'];
$query = "DELETE FROM prodi WHERE id_prodi = '$id'";
$sql = mysqli_query($conn, $query);
if(!$sql){ ?>
    <script>
        Swal.fire({
          title: 'GAGAL',
          text: "hapus gagal",
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