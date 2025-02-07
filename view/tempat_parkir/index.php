<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tempat parkir</title>
</head>
<body>
    <h1>data tempat parkir baru</h1>
    <table border="1">
        <a href="tambah.php">tambah tempat baru</a>
        <tr>
            <th>NO.</th>
            <th>id_tempat</th>
            <th>nama_tempat</th>
            <th>harga</th>
            <th>lokasi</th>
            <th>aksi</th>
        </tr>
        <?php
         include '../../config/koneksi.php';
         $query = mysqli_query($conn, "SELECT * FROM tempat_parkir");
         $no=1;
         if(mysqli_num_rows($query)){
            echo "data ada";
            while($result=mysqli_fetch_assoc($query)){
                ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $result['id_tempat']?></td>
                    <td><?php echo $result['nama_tempat'] ?></td>
                    <td><?php echo $result['harga'] ?></td>
                    <td><?php echo $result['lokasi'] ?></td>
                    <td>
                        <a href="">edit |</a>
                        <a href="">hapus</a>
                    </td>
                </tr>
                <?php
                $no++;
            }
            }else{
                echo "data kosong";
         }
         ?>
    </table>
</body>
</html>