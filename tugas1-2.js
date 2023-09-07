// Achbar Wahyudhi

// Diketahui: 
// pegawai: Ridwan 
// jabatan: manager 
// status: menikah  
// Tugas:  
// Cetak Data Pegawai 
// Nama Pegawai, Jabatan, Status,  
// Gaji Pokok(if): Manager=>15 jt, Asisten Manager=>10 jt, Staff=>5 jt  
// Tunjangan Jabatan: 15% dari gapok 
// BPJS: 10% dari gapok 
// Tunjangan Keluarga (ternary): dilihat dari status yg sudah menikah =>20% dari gapok 
// Total Gaji: jumlahlahkan seluruh element gaji

// Data Karyawan 
let karyawan = {
    pegawai: "Ridwan",
    jabatan: "Manager",
    status: "Menikah"
};

// Menghitung gaji pokok berdasarkan jabatan
let gajiPokok;
switch (karyawan.jabatan) {
    case "Manager":
        gajiPokok = 15000000;
        break;

    case "Asisten Manager":
        gajiPokok = 10000000;
        break;

    case "Staff":
        gajiPokok = 5000000;
        break;

    default:
        gajiPokok = 0;
};

// Tunjangan Jabatan: 15% dari gapok 
let tunjanganJabatan = 0.15 * gajiPokok;

// BPJS: 10% dari gapok 
let bpjs = 0.10 * gajiPokok;

// Tunjangan Keluarga (ternary): dilihat dari status yg sudah menikah =>20% dari gapok 
let tunjanganKeluarga = karyawan.status === "Menikah" ? 0.20 * gajiPokok : 0;

// Total Gaji: jumlahlahkan seluruh element gaji
let totalGaji = gajiPokok + tunjanganJabatan + bpjs + tunjanganKeluarga;

// Menampilkan data pegawai dan total gaji
console.log("========== Data Pegawai =========");
console.log("Nama Pegawai:", karyawan.pegawai);
console.log("Jabatan:", karyawan.jabatan);
console.log("Status:", karyawan.status);
console.log("Gaji Pokok:", gajiPokok);
console.log("Tunjangan Jabatan:", tunjanganJabatan);
console.log("BPJS:", bpjs);
console.log("Tunjangan Keluarga:", tunjanganKeluarga);
console.log("Total Gaji:", totalGaji);