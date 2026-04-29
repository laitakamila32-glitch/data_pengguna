<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data pengguna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1>Data User</h1>
    <a href="tambah.php" class="btn">+Tambah data</a>
        <table>
            <tr>
                <th>id</th>
                <th>Nama</th>
                <th>email</th>
                <th>Password</th>
                <th>Aksi</th>
            </tr>

            <?php
            $data = mysqli_query($conn, "SELECT * FROM data_user");
            while($item = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?= $item['id']; ?></td>
                    <td><?= $item['nama']; ?></td>
                    <td><?= $item['email']; ?></td>
                    <td>.....</td>
                    <td>
                        <a href="edit.php?id=<?= $item['id']; ?>">✏️Edit</a>
                        <a href="hapus.php?id=<?= $item['id']; ?>">🗑️Hapus</a>
                    </td>
                </tr>
            <?php
                }
            ?>
        </table>
    </div>
</body>
</html>