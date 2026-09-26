<?php

$koneksi = mysqli_connect(
    "localhost",
    "root",
    "",
    "tgs_2407411072_athalla_mysql"
);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

echo "Koneksi berhasil<br>";

?>