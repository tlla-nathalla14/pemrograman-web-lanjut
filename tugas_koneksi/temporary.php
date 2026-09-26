<?php

include "koneksi.php";

$query = "SELECT 
            Nama,
            NIM,
            Tugas,
            UTS,
            UAS,
            (Tugas + UTS + UAS) / 3 AS Nilai_Akhir
          FROM mahasiswa";

$result = mysqli_query($koneksi, $query);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>

<h2>Data Nilai Mahasiswa</h2>

<table border="1" cellpadding="8" cellspacing="0">

    <tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>Tugas</th>
        <th>UTS</th>
        <th>UAS</th>
        <th>Nilai Akhir</th>
    </tr>

    <?php while ($data = mysqli_fetch_assoc($result)) { ?>

    <tr>
        <td><?= $data['Nama']; ?></td>
        <td><?= $data['NIM']; ?></td>
        <td><?= $data['Tugas']; ?></td>
        <td><?= $data['UTS']; ?></td>
        <td><?= $data['UAS']; ?></td>
        <td><?= $data['Nilai_Akhir']; ?></td>
    </tr>

    <?php } ?>

</table>

</body>
</html>