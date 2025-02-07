<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> tambah kendaraan baru</title>
</head>
<body>
    <h1>tambah kendaraan baru </h1>
    <form action="simpan.php" method="post">
        <label for="">no_plat</label>
        <input type="number" name="no_plat">
        <br>
        <label for="">id_tempat</label>
        <input type="text" name="id_tempat">
        <br>
        <label for="">waktu_masuk</label>
        <input type="number" name="waktu_masuk">
        <br>
        <label for="">jenis_kendaraan</label>
        <input type="text" name="jenis_kendaraan">
        <br>
        <label for="">nama_pemilik</label>
        <input type="text" name="nama_pemilik">
        <br>
        <label for="">waktu_keluar</label>
        <input type="number" name="waktu_keluar">
        <br>
        <button type="submit">simpan</button>
    </form>
</body>
</html>
