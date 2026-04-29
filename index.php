<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data pengguna</title>
    <style>
        body{
            font-family: 'Poppins', sans-serif;
            background-color: white;
            margin: 0;
        }

        .container{
            width: 90%;
            max-width: 900px;
            margin: 40px auto;
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        }

        h1{
            text-align: center;
            color: #2e7d32;
        }

        .btn{ 
            padding:10px 15px; 
            background:#2e7d32; 
            color:white; 
            text-decoration:none; 
            border-radius:8px; 
            display:inline-block; 
            margin-bottom:5px;   
        }

        table{
            width:100%;
            border-collapse:collapse;
            background:white;
            border-radius:10px;
            overflow:hidden;
            margin-top: 20px;
        }

        th{
            background:#2e7d32;
            color:white;
            padding:12px;
        }

        td{
            padding:12px;
            text-align:center;
        }

    </style>
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