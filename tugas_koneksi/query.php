<?php

include "koneksi.php";

$query = "SELECT * FROM mahasiswa";

$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query gagal: " . mysqli_error($koneksi));
}

echo "Query berhasil dijalankan";

?>