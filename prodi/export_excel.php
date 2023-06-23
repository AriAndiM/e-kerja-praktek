<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/utm.png">
    <title>Export data mahasiswa Kerja Praktek</title>
</head>

<body>
    <table border="1" class="table table-striped mt-3" style="font-weight: normal;">
        <tr>
            <th style="text-align: center;">No.</th>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Semester</th>
            <th>Status</th>
        </tr>
        <?php
        include '../koneksi.php';
        session_start();
        $semester = $_SESSION['smt'];
        error_reporting(0);
        $filename = 'Data mahasiswa KP - ' . $semester . '.xls';
        header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=$filename");
        // menghapus otomatis pendaftaran mahasiswa yang tidak mengajukan surat pengantar
        $query1 = "DELETE FROM pendaftaran WHERE id_pendaftaran NOT IN (SELECT pendaftaran.id_pendaftaran FROM pendaftaran JOIN form_pengantar ON pendaftaran.id_pendaftaran=form_pengantar.id_pendaftaran) AND CURRENT_DATE > (SELECT prodi.tanggal_batas_surat FROM prodi ORDER BY id_prodi DESC LIMIT 1);";
        $sql1 = mysqli_query($conn, $query1);

        $smt = $_POST['semester'];
        $_SESSION['smt'] = $smt;
        $query2 = "SELECT * FROM pendaftaran JOIN mahasiswa ON pendaftaran.NIM=mahasiswa.NIM WHERE semester='$semester';";
        $sql2 = mysqli_query($conn, $query2);
        $i = 1;
        while ($data2 = mysqli_fetch_array($sql2)) {
        ?>
            <tr>
                <td style="text-align: center;"><?php echo $i++ ?></td>
                <td><?php echo $data2['NIM'] ?></td>
                <td><?php echo $data2['nama_mahasiswa'] ?></td>
                <td><?php echo $data2['semester'] ?></td>
                <td><?php echo $data2['status_KP'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>