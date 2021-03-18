<?php
    // Ambil koneksi
    require 'functions.php';

    $mahasiswa = query("SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/all.css">
</head>
<body>
    
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0" align="center">
        <!-- Bagian judul kolom -->
        <tr>
            <th class="text-center">No.</th>   
            <th class="text-center">Aksi</th>
            <th class="text-center">Gambar</th>
            <th class="text-center">NIM</th>
            <th class="text-center">Nama</th>
            <th class="text-center">Email</th>
            <th class="text-center">Jurusan</th>
        </tr>

        <!-- Isi dari tabelnya -->
        <!-- Mengatur no. urut -->
        <?php $a = 1; ?>
        <?php foreach ($mahasiswa as $row) : ?>
        <tr>
            <td><?php echo $a; ?></td>
            <td>
            <!-- Bagian aksi -->
                <a href="tambah.php" class="btn btn-primary btn-sm"><i class="fas fa-user-plus"></i> Tambah</a> |
                <a href="" class="btn btn-success btn-sm"><i class="fas fa-edit"></i> Edit</a> |
                <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Hapus</a>
            </td>
            <!-- Masukkan kode php untuk membaca isi dari tabel -->
            <td>
                <img src="./img/<?php echo $row["gambar"]; ?>" width="50" alt="">
            </td>
            <td><?php echo $row["nim"]; ?></td>
            <td><?php echo $row["nama"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["jurusan"]; ?></td>
        </tr>
        <?php $a++; ?>
        <?php endforeach; ?>
    </table>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="./js/all.js"></script>
</html>
