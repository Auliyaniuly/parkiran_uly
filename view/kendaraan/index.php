<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kendaraan</title>
</head>
<body>
    <h1>data kendaraan baru</h1>
    <table border="1">
    <a href="tambah.php">tambah kendaraan baru</a>
        <tr>
            <th>NO></th>
            <th>no_plat</th>
            <th>id_tempat</th>
            <th>waktu_masuk</th>
            <th>jenis_kendaraan</th>
            <th>nama_pemilik</th>
            <th>waktu_keluar</th>
            <th>aksi</th>
        </tr>
        <?php
         include '../../config/koneksi.php';
         $query = mysqli_query($conn, "SELECT *  kendaraan");
         $no=1;
         if(mysqli_num_rows($query)){
            echo "data ada";
            while($result=mysqli_fetch_assoc($query)){
                ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $result['no_plat']?></td>
                    <td><?php echo $result['id_tempat'] ?></td>
                    <td><?php echo $result['waktu_masuk'] ?></td>
                    <td><?php echo $result['jenis_kendaraan'] ?></td>
                    <td><?php echo $result['nama_pemilik'] ?></td>
                    <td><?php echo $result['waktu_keluar'] ?></td>
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