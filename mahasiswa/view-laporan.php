<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/utm.png">
    <title>Laporan</title>
</head>

<body>
    <?php
    // CONECT DATABASE
    include '../koneksi.php';

    $NIM = $_GET['NIM'];
    $sqll = "SELECT * FROM laporan WHERE NIM='$NIM'";
    $query = mysqli_query($conn, $sqll);
    $row = mysqli_num_rows($query);
    if ($row == 0) { ?>
        <h5 style="color: red;">laporan belum di upload</h5>
    <?php } else {
        $result = mysqli_fetch_array($query);
        $content = $result['laporan'];
    ?>
        <object style="width: 100%; height: 1000px;" data="../laporan/<?= $content; ?>" type=""></object>
    <?php } ?>
</body>

</html>