<?php

include "koneksi.php";

$query = "SELECT * FROM mahasiswa";

$result = mysqli_query($koneksi, $query);

$jumlah = mysqli_num_rows($result);

echo "Jumlah mahasiswa = " . $jumlah;

?>