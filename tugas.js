
//membuat class gempa
class Gempa {
    constructor(lokasi, skala) {
        this.lokasi = lokasi;
        this.skala = skala;
    }

    dampak() {
        let dampak;
        if (this.skala >= 0 && this.skala <= 2) {
            dampak = "Tidak terasa";
        } else if (this.skala > 2 && this.skala <= 4) {
            dampak = "Bangunan retak-retak";
        } else if (this.skala > 4 && this.skala <= 6) {
            dampak = "Bangunan roboh";
        } else {
            dampak = "Bangunan roboh dan berpotensi tsunami";
        }

        console.log("Lokasi Gempa: " + this.lokasi);
        console.log("Skala: " + this.skala);
        console.log("Dampak: " + dampak);
    }
}

// Membuat object Gempa
let gempa1 = new Gempa("California", 1.5);
let gempa2 = new Gempa("Jepang", 3.7);
let gempa3 = new Gempa("Indonesia", 5.9);
let gempa4 = new Gempa("Chile", 7.2);
let gempa5 = new Gempa("Alaska", 8.0);

// Menampilkan dampak dari masing-masing gempa
console.log("Info Gempa 1:");
gempa1.dampak();
console.log("\nInfo Gempa 2:");
gempa2.dampak();
console.log("\nInfo Gempa 3:");
gempa3.dampak();
console.log("\nInfo Gempa 4:");
gempa4.dampak();
console.log("\nInfo Gempa 5:");
gempa5.dampak();
