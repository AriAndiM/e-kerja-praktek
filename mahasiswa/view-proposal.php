<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/utm.png">
    <title>Proposal</title>
</head>

<body>
    <?php
    // CONECT DATABASE
    include '../koneksi.php';

    $NIM = $_GET['NIM'];
    $sqll = "SELECT * FROM proposal WHERE NIM='$NIM'";
    $query = mysqli_query($conn, $sqll);
    $row = mysqli_num_rows($query);
    if ($row == 0) { ?>
        <h5 style="color: red;">Proposal belum di upload</h5>
    <?php } else {
        $result = mysqli_fetch_array($query);
        $content = $result['proposal'];
    ?>
        <object style="width: 100%; height: 1000px;" data="../proposal/<?= $content; ?>" type=""></object>
    <?php } ?>
</body>

</html>