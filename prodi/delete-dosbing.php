<html>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</html>

<?php
    include '../koneksi.php';

    $id = $_GET['id'];
    $query = "DELETE FROM dosen_pembimbing WHERE id_dosen_pembimbing='$id'";
    $sql = mysqli_query($conn, $query);
    if (!$sql){ ?>
        <script>
            Swal.fire({
              title: 'GAGAL',
              text: "edit gagal",
              icon: 'error',
            }).then((result) => {
              if (result.isConfirmed) {
                window.location.href = "pembagianDosbing.php";
              }
            })
          </script>
    <?php } else {
        echo "<script>document.location.href='pembagianDosbing.php';</script>";
    }
?>