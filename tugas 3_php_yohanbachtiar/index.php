<!DOCTYPE html>
<html>
<head>
    <title>Tugas Msib 5</title>
    <link rel="stylesheet" type="text/css" href="asset/css/style.css">
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nilai</th>
            <th>Keterangan</th>
            <th>Grade</th>
            <th>Predikat</th>
        </tr>
        <?php
        
        $mahasiswa = [
            ["SANTI", 45],
            ["MIRNA", 90],
            ["WATI", 35],
            ["MISDI", 60],
            ["TUMIRAH", 45],
            ["JANI", 70],
            ["NONIRAN", 88],
            ["MUKIYEM", 95],
            ["NARTO", 63],
            ["SINGO", 78],
        ];

        
        foreach ($mahasiswa as $index => $data) {
            $nama = $data[0];
            $nilai = $data[1];
            $keterangan = ($nilai >= 60) ? "Lulus" : "Tidak Lulus";

            if ($nilai >= 90) {
                $grade = "A";
                $predikat = "Sangat Memuaskan";
            } elseif ($nilai >= 80) {
                $grade = "B";
                $predikat = "Memuaskan";
            } elseif ($nilai >= 70) {
                $grade = "C";
                $predikat = "Cukup";
            } elseif ($nilai >= 60) {
                $grade = "D";
                $predikat = "Kurang";
            } else {
                $grade = "E";
                $predikat = "Sangat Kurang";
            }

            
            echo "<tr>";
            echo "<td>" . ($index + 1) . "</td>";
            echo "<td>" . $nama . "</td>";
            echo "<td>" . $nilai . "</td>";
            echo "<td>" . $keterangan . "</td>";
            echo "<td>" . $grade . "</td>";
            echo "<td>" . $predikat . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
