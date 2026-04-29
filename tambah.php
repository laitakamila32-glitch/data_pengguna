<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
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
    <h1>Tambah Data</h1>
    <form method="post">
        Nama: <input type="text" name="nama"><br><br>
        Email: <input type="text" name="email"><br><br>
        Password <input type="password" name="password"><br><br>

        <button type="submit" name="simpan">Simpan</button>
    </form>
    </div>
</body>
</html>

<?php
if(isset($_POST['simpan'])){
    mysqli_query($conn, "INSERT INTO data_user (nama, email, password) VALUES(
    '$_POST[nama]',
    '$_POST[email]',
    '$_POST[password]'
    )");

    header("location: index.php");
}
?>