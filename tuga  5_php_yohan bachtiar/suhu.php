<?php
class KonversiSuhu
{
    private $satuanSuhuAwal;
    private $besaranSuhu;
    private $satuanSuhuTujuan;

    public function __construct($satuanSuhuAwal, $besaranSuhu, $satuanSuhuTujuan)
    {
        $this->satuanSuhuAwal = $satuanSuhuAwal;
        $this->besaranSuhu = $besaranSuhu;
        $this->satuanSuhuTujuan = $satuanSuhuTujuan;
    }

    public function CelciusKeFahrenheit()
    {
        return ($this->besaranSuhu * 9 / 5) + 32;
    }

    public function FahrenheitKeCelcius()
    {
        return ($this->besaranSuhu - 32) * 5 / 9;
    }

    public function CelciusKeRheamur()
    {
        return $this->besaranSuhu * 4 / 5;
    }

    public function RheamurKeCelcius()
    {
        return $this->besaranSuhu * 5 / 4;
    }

    public function cetak()
    {
        $konversiFunctions = [
            'Celcius' => [
                'Fahrenheit' => 'CelciusKeFahrenheit',
                'Rheamur' => 'CelciusKeRheamur',
            ],
            'Fahrenheit' => [
                'Celcius' => 'FahrenheitKeCelcius',
            ],
            'Rheamur' => [
                'Celcius' => 'RheamurKeCelcius',
            ],
        ];

        if (isset($konversiFunctions[$this->satuanSuhuAwal][$this->satuanSuhuTujuan])) {
            $konversiFunction = $konversiFunctions[$this->satuanSuhuAwal][$this->satuanSuhuTujuan];
            $hasilKonversi = $this->$konversiFunction();

            echo "<table>
                    <tr>
                        <th>Satuan Suhu Awal</th>
                        <th>Besaran Suhu</th>
                        <th>Satuan Suhu Tujuan</th>
                        <th>Hasil Konversi Suhu</th>
                    </tr>
                    <tr>
                        <td>{$this->satuanSuhuAwal}</td>
                        <td>{$this->besaranSuhu}</td>
                        <td>{$this->satuanSuhuTujuan}</td>
                        <td>{$hasilKonversi}</td>
                    </tr>
                  </table>";
        } else {
            echo "Konversi suhu dari {$this->satuanSuhuAwal} ke {$this->satuanSuhuTujuan} tidak didukung.";
        }
    }
}

// Buat objek dataKonversiSuhu
$dataKonversiSuhu = [
    new KonversiSuhu("Celcius", 30, "Fahrenheit"),
    new KonversiSuhu("Fahrenheit", 86, "Celcius"),
    new KonversiSuhu("Celcius", 20, "Rheamur"),
    new KonversiSuhu("Rheamur", 16, "Celcius"),
];

// Panggil fungsi cetak untuk seluruh objek
foreach ($dataKonversiSuhu as $konversi) {
    $konversi->cetak();
}
?>
