<?php
require_once 'Bentuk2D.php';
require_once 'Lingkaran.php';
require_once 'PersegiPanjang.php';
require_once 'Segitiga.php';

$bidang = [
    new Lingkaran(8),
    new PersegiPanjang(8, 15),
    new Segitiga(8, 11)
];

echo "<table border='1'>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Keterangan</th>
                <th>Luas</th>
                <th>Keliling</th>
            </tr>
        </thead>
        <tbody>";

foreach ($bidang as $key => $obj) {
    echo "<tr>
            <td>" . ($key + 1) . "</td>
            <td>" . $obj->namaBidang() . "</td>
            <td>" . "BIDANG" . "</td>
            <td>" . $obj->luasBidang() . "</td>
            <td>" . $obj->kelilingBidang() . "</td>
          </tr>";
}

echo "</tbody>
      </table>";
?>
