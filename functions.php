<?php 

    // Koneksi ke database
    // (nama host,username,password,nama database)
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

    // Membuat function
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

// Function halaman tambah
function tambah($data) {
    // Ambil data dari tiap elemen dalam form
    global $conn;

    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // Query instert data
    $query = "INSERT INTO mahasiswa
                VALUES
            ('', '$nim', '$nama', '$email', '$jurusan', '$gambar')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
    
}

function hapus($id) {
    global $conn;
    // Query instert data
    $query = "DELETE FROM mahasiswa
                WHERE
            id = $id
            ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>