<?php 

    // Koneksi ke database
    // (nama host,username,password,nama database)
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

    // Membuat function
function query1($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

?>