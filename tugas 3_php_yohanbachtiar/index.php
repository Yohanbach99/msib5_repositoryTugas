<!DOCTYPE html>
<html>
<head>
    <title>Tugas Msib 5</title>
    <style>
    
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

       
        h1 {
            text-align: center;
        }
    </style>
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
            ["Mahasiswa 1", 75],
            ["Mahasiswa 2", 90],
            ["Mahasiswa 3", 55],
            ["Mahasiswa 4", 80],
            ["Mahasiswa 5", 65],
            ["Mahasiswa 6", 70],
            ["Mahasiswa 7", 88],
            ["Mahasiswa 8", 95],
            ["Mahasiswa 9", 63],
            ["Mahasiswa 10", 72],
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
