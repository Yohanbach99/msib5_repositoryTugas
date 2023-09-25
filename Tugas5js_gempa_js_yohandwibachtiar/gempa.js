class Gempa {
    constructor(lokasi, skala) {
        this.lokasi = lokasi;
        this.skala = skala;
    }

    dampak() {
        if (this.skala >= 0 && this.skala <= 2) {
            return "Tidak terasa";
        } else if (this.skala > 2 && this.skala <= 4) {
            return "Bangunan retak-retak";
        } else if (this.skala > 4 && this.skala <= 6) {
            return "Bangunan roboh";
        } else {
            return "Bangunan roboh dan berpotensi tsunami";
        }
    }
}


const gempa1 = new Gempa("Wakanda", 1.5);
const gempa2 = new Gempa("Konoha", 3.0);
const gempa3 = new Gempa("Javanese", 5.5);
const gempa4 = new Gempa("Balinese", 7.2);
const gempa5 = new Gempa("Ahampas", 2.8);


const informasiGempa = [
    { "Lokasi Gempa": gempa1.lokasi, "Skala": gempa1.skala, "Dampak": gempa1.dampak() },
    { "Lokasi Gempa": gempa2.lokasi, "Skala": gempa2.skala, "Dampak": gempa2.dampak() },
    { "Lokasi Gempa": gempa3.lokasi, "Skala": gempa3.skala, "Dampak": gempa3.dampak() },
    { "Lokasi Gempa": gempa4.lokasi, "Skala": gempa4.skala, "Dampak": gempa4.dampak() },
    { "Lokasi Gempa": gempa5.lokasi, "Skala": gempa5.skala, "Dampak": gempa5.dampak() },
];


const table = document.getElementById("gempaTable");
informasiGempa.forEach(info => {
    const row = table.insertRow();
    const cell1 = row.insertCell(0);
    const cell2 = row.insertCell(1);
    const cell3 = row.insertCell(2);
    cell1.innerHTML = info["Lokasi Gempa"];
    cell2.innerHTML = info["Skala"];
    cell3.innerHTML = info["Dampak"];
});
