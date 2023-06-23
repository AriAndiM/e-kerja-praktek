<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include "../koneksi.php";
    ?>
    <h3>Membuat Script Download File Dengan PHP MySQL - Tutorial</h3>
    <b>Daftar File</b>
    <br />
    <br />
    <table border="1" cellpadding="3">
        <tr>
            <th width="30">No</th>
            <th width="180">Nama File</th>
            <th width="80">Action</th>
        </tr>
            <?php
                $no=0;
                $query = mysqli_query($conn, "SELECT * FROM proposal ORDER BY id_proposal"); 
                while($data = mysqli_fetch_array($query)){
                $no++
            ?>
        <tr>
            <td><?=$no?></td>
            <td><?php echo $data['proposal']; ?></td>
            <td><a href="download.php?filename=<?=$data['proposal']?>">Download</a></td>    
        </tr>
            <?php 
            } 
            ?>
    </table>
    
</body>
</html>