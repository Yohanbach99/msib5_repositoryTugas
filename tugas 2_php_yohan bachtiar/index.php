<!DOCTYPE html>
<html>
<head>
    <title>Form Data Diri</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <h2>Form Data Diri</h2>

    <!-- Form dengan method POST -->
    <form method="POST">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required><br><br>

        <label for="pekerjaan">Pekerjaan:</label>
        <select name="pekerjaan">
            <option value="Programer">Programer</option>
            <option value="Networker">Networker</option>
            <option value="Staff">Staff</option>
            <option value="Karyawan Swasta">Karyawan Swasta</option>
            <option value="Asn/Pns">Asn/Pns</option>
            <option value="Polisi/TNI">Polisi/TNI</option>
            <option value="Pekerja Kontrak">Pekerja Kontrak</option>
            <option value="Sopir">Sopir</option>
            <option value="Wiraswasta">Wiraswasta</option>
            <option value="Lainnya">Lainnya</option>
        </select><br><br>

        <label>Hobby:</label><br>
        <input type="radio" name="hobby" value="Traveling"> Traveling<br>
        <input type="radio" name="hobby" value="Mancing"> Mancing<br>
        <input type="radio" name="hobby" value="Olahraga"> Olahraga<br>
        <input type="radio" name="hobby" value="Memasak"> Memasak<br>
        <input type="radio" name="hobby" value="Fotografi"> Fotografi<br>
        <input type="radio" name="hobby" value="Menyanyi"> Menyanyi<br>
        <input type="radio" name="hobby" value="Menari"> Menari<br>
        <input type="radio" name="hobby" value="Main Game"> Main Game<br>
        <input type="radio" name="hobby" value="Riding"> Riding<br>
        <input type="radio" name="hobby" value="Lainnya"> Lainnya<br><br>

        <input type="submit" name="simpan" value="Simpan">
    </form>

    <?php
    // Cek apakah tombol "Simpan" telah diklik
    if (isset($_POST['simpan'])) {
        // Mengambil data dari form
        $nama = $_POST['nama'];
        $pekerjaan = $_POST['pekerjaan'];
        $hobby = $_POST['hobby'];

        // Menampilkan data dalam bentuk tabel
        echo "<h2>Data Diri:</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Nama</th><th>Pekerjaan</th><th>Hobby</th></tr>";
        echo "<tr><td>$nama</td><td>$pekerjaan</td><td>$hobby</td></tr>";
        echo "</table>";
    }
    ?>

</body>
</html>
