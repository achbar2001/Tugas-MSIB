<?php
require_once 'Bentuk2D.php';
require_once 'Lingkaran.php';
require_once 'PersegiPanjang.php';
require_once 'Segitiga.php';

// Membuat objek-objek bentuk
$lingkaran = new Lingkaran(5);
$persegiPanjang = new PersegiPanjang(4, 6);
$segitiga = new Segitiga(3, 4);

// Membuat tabel untuk mencetak informasi bentuk-bentuk
echo "<table border='1'>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Bidang</th>
                <th>Keterangan</th>
                <th>Luas Bidang</th>
                <th>Keliling Bidang</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>" . $lingkaran->namaBidang() . "</td>
                <td>Jari-jari: " . $lingkaran->luasBidang() . "</td>
                <td>" . $lingkaran->luasBidang() . "</td>
                <td>" . $lingkaran->kelilingBidang() . "</td>
            </tr>
            <tr>
                <td>2</td>
                <td>" . $persegiPanjang->namaBidang() . "</td>
                <td>Panjang: " . $persegiPanjang->luasBidang() . ", Lebar: " . $persegiPanjang->luasBidang() . "</td>
                <td>" . $persegiPanjang->luasBidang() . "</td>
                <td>" . $persegiPanjang->kelilingBidang() . "</td>
            </tr>
            <tr>
                <td>3</td>
                <td>" . $segitiga->namaBidang() . "</td>
                <td>Alas: " . $segitiga->luasBidang() . ", Tinggi: " . $segitiga->luasBidang() . "</td>
                <td>" . $segitiga->luasBidang() . "</td>
                <td>" . $segitiga->kelilingBidang() . "</td>
            </tr>
        </tbody>
    </table>";
