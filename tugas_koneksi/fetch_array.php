<?php

include "koneksi.php";

$query = "SELECT * FROM mahasiswa";

$result = mysqli_query($koneksi, $query);

while ($data = mysqli_fetch_array($result)) {

    echo "Nama : " . $data['Nama'] . "<br>";
    echo "NIM : " . $data['NIM'] . "<br>";
    echo "Tugas : " . $data['Tugas'] . "<br>";
    echo "UTS : " . $data['UTS'] . "<br>";
    echo "UAS : " . $data['UAS'] . "<br>";

    echo "<hr>";
}

?>