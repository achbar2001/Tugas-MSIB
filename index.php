<?php
// Daftar mahasiswa dan nilai
$students = [
    ["nama" => "Mahasiswa 1", "nilai" => 90],
    ["nama" => "Mahasiswa 2", "nilai" => 80],
    ["nama" => "Mahasiswa 3", "nilai" => 75],
    ["nama" => "Mahasiswa 4", "nilai" => 60],
    ["nama" => "Mahasiswa 5", "nilai" => 55]
];

// Inisialisasi variabel untuk agregate nilai
$totalNilai = 0;
$jumlahMahasiswa = count($students);
$nilaiTertinggi = $students[0]["nilai"];
$nilaiTerendah = $students[0]["nilai"];

// Loop untuk menghitung agregate nilai dan menentukan nilai tertinggi dan terendah
foreach ($students as $student) {
    $totalNilai += $student["nilai"];
    if ($student["nilai"] > $nilaiTertinggi) {
        $nilaiTertinggi = $student["nilai"];
    }
    if ($student["nilai"] < $nilaiTerendah) {
        $nilaiTerendah = $student["nilai"];
    }
}

// Menghitung nilai rata-rata
$rataRata = $totalNilai / $jumlahMahasiswa;

// Menampilkan tabel data mahasiswa
echo "<table border='1' cellpadding='7'>";
echo "<thead>";
echo "<tr>";
echo "<th>Nama</th>";
echo "<th>Nilai</th>";
echo "<th>Keterangan</th>";
echo "<th>Grade</th>";
echo "<th>Predikat</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

// Loop untuk menampilkan data mahasiswa dan menghitung keterangan, grade, dan predikat
foreach ($students as $student) {
    $nilai = $student["nilai"];
    $keterangan = ($nilai >= 60) ? "Lulus" : "Tidak Lulus";

    if ($nilai >= 85) {
        $grade = "A";
    } elseif ($nilai >= 70) {
        $grade = "B";
    } elseif ($nilai >= 60) {
        $grade = "C";
    } elseif ($nilai >= 50) {
        $grade = "D";
    } else {
        $grade = "E";
    }

    switch ($grade) {
        case "A":
            $predikat = "Sangat Memuaskan";
            break;
        case "B":
            $predikat = "Memuaskan";
            break;
        case "C":
            $predikat = "Cukup";
            break;
        case "D":
            $predikat = "Kurang";
            break;
        case "E":
            $predikat = "Sangat Kurang";
            break;
        default:
            $predikat = "-";
    }

    echo "<tr>";
    echo "<td>" . $student["nama"] . "</td>";
    echo "<td>" . $nilai . "</td>";
    echo "<td>" . $keterangan . "</td>";
    echo "<td>" . $grade . "</td>";
    echo "<td>" . $predikat . "</td>";
    echo "</tr>";
}

echo "</tbody>";
echo "<tfoot>";
echo "<tr>";
echo "<td colspan='5'>Nilai Tertinggi: " . $nilaiTertinggi . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td colspan='5'>Nilai Terendah: " . $nilaiTerendah . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td colspan='5'>Nilai Rata-Rata: " . number_format($rataRata, 2) . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td colspan='5'>Jumlah Mahasiswa: " . $jumlahMahasiswa . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td colspan='5'>Jumlah Keseluruhan Nilai: " . $totalNilai . "</td>";
echo "</tr>";
echo "</tfoot>";
echo "</table>";
