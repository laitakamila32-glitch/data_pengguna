<?php
include 'koneksi.php'; 
$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM data_user WHERE id = '$id'");
$item = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <style>
    body{
    font-family: 'Poppins', sans-serif;
    background: #f4f6f9;
    margin:0;
    padding:20px;
}

.container{
    max-width:400px;
    margin:auto;
    background:white;
    padding:25px;
    border-radius:15px;
    box-shadow:0 5px 20px rgba(0, 0, 0, 0.16);
}

h2{
    text-align:center;
    margin-bottom:20px;
}

input, select{
    width:100%;
    padding:10px;
    margin-top:5px;
    margin-bottom:15px;
    border-radius:8px;
    border:1px solid #ccc;
}

button{
    width:100%;
    padding:10px;
    background: #2e7d32;
    color:white;
    border:none;
    border-radius:8px;
    cursor:pointer;
    font-weight:bold;
}

button:hover{
    background:#4caf50;
}
    </style>
</head>
<body>
    <div class="container">
    <h1>Ubah Data</h1>
    <form method="post">
        Nama: <input type="text" name="nama" value="<?= $item['nama']; ?>"><br><br>
        Email: <input type="text" name="email" value="<?= $item['email']; ?>"><br><br>
        Password: <input type="password" name="password" value="<?= $item['password']; ?>"><br><br>

        <button type="submit" name="update">Update</button>
    </form>
    </div>
</body>
</html>

<?php
if(isset($_POST['update'])) {
    mysqli_query($conn, "UPDATE data_user SET
        nama='$_POST[nama]',
        email='$_POST[email]',
        password='$_POST[password]'
        WHERE id='$id'
    ");

    header("location: index.php");
}