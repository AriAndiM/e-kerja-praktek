<html>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="shortcut icon" href="../assets/img/utm.png">

</html>
<?php
include '../koneksi.php';
session_start();

if ($_POST['submit']) {
    $nim = $_SESSION['NIM'];
    $format_file = array('pdf');
    $beritaacara = $_FILES['berita_acara']['name'];
    $x = explode('.', $beritaacara);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['berita_acara']['tmp_name'];

    if (in_array($ekstensi, $format_file) === true) {
        move_uploaded_file($file_tmp, '../berita acara/' . $beritaacara);
        $query = "INSERT INTO berita_acara (id_berita_acara, NIM, berita_acara) VALUES (null, '" . $nim . "', '" . $beritaacara . "')";
        $sql = mysqli_query($conn, $query);
        if (!$sql) { ?>
            <script>
                Swal.fire({
                    title: 'GAGAL',
                    text: "berita acara gagal di upload",
                    icon: 'error',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "berita-acara.php";
                    }
                })
            </script>
        <?php } else { ?>
            <script>
                Swal.fire({
                    title: 'BERHASIL',
                    text: "berita acara berhasil di upload",
                    icon: 'success',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "berita-acara.php";
                    }
                })
            </script>
        <?php }
    } else { ?>
        <script>
            Swal.fire({
                title: 'GAGAL',
                text: "Format file harus PDF",
                icon: 'error',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "berita-acara.php";
                }
            })
        </script>
<?php }
}  ?>