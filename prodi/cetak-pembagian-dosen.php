<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/utm.png">
    <title>Cetak Pembagian Dosen</title>
</head>
<body>
    <div class="container">
    <div>
        <table align="center" style="padding-left: 0%;padding-right: 0%;max-width:max-content;">
            <tr>
                <td><img src="../assets/img/utm.png" style="width: 100%; max-width: 130px; height: auto;"></td>
                <td style="width: 25px;"></td>
                <td style="text-align: center;">KEMENTERIAN PENDIDIKAN, KEBUDAYAAN, RISET, <br> DAN TEKNOLOGI <br> UNIVERSITAS TRUNOJOYO MADURA <br> <b>FAKULTAS TEKNIK</b> <br> Jl. Raya Telang, PO.Box. 2 Kamal, Bangkalan - Madura <br> Telp : (031) 3011146, Fax. (031) 3011506 <br> Laman : www.trunojoyo.ac.id </td>
                <td style="width: 25px;"></td>
            </tr>
            <tr>
                <td colspan="4"><hr size="3px" color="black"></td>
            </tr>
        </table>
    </div>


        <h4 style="text-align: center;">Dosen pembimbing kerja praktek</h4>
        <table align="center" border="1" class="border-collapse" style="padding-left: 0%;padding-right: 0%;max-width:max-content;font-weight: normal; width:100%;">
            <tr>
                <th>No.</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Dosen Pembimbing</th>
            </tr>
            <?php
                include '../koneksi.php';

                $query4 = "SELECT * FROM mahasiswa JOIN dosen_pembimbing ON mahasiswa.NIM=dosen_pembimbing.NIM JOIN dosen ON dosen_pembimbing.NIP=dosen.NIP;";
                $sql4 = mysqli_query($conn, $query4);
                $cek = mysqli_num_rows($sql4);
                $i=1;
                while($data4 = mysqli_fetch_array($sql4)){
            ?>
            <tr>
                <td style="text-align: center;"><?php echo $i++; ?></td>
                <td><?php echo $data4['NIM'] ?></td>
                <td><?php echo $data4['nama_mahasiswa']; ?></td>
                <td ><?php echo $data4['nama_dosen']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
    <script>
        window.print();
    </script>
</body>
</html>