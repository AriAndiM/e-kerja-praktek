<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="styles/shards-dashboards.1.1.0.min.css">
    <link rel="stylesheet" href="styles/extras.1.1.0.min.css">
    <link rel="shortcut icon" href="../assets/img/utm.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete mahasiswa | Pembimbing Lapangan</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="shortcut icon" href="assets/img/utm.png">
</head>

<body>
    <?php
    include '../koneksi.php';
    $id = $_GET['id'];
    $query = "DELETE FROM pembimbing_lapangan WHERE NIM='$id'";
    $sql = mysqli_query($conn, $query);
    if (!$sql) { ?>
        <script>
            Swal.fire({
                title: 'GAGAL',
                text: "Data mahasiswa gagal dihapus.",
                icon: 'error',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "daftarMHS.php";
                }
            })
        </script>
    <?php } else { ?>
        <script>
            Swal.fire({
                title: 'BERHASIL',
                text: "Data mahasiswa berhasil dihapus",
                icon: 'success',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "daftarMHS.php";
                }
            })
        </script>
    <?php }
    ?>
</body>

</html>