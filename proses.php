<!DOCTYPE html>
<html>

<head>
    <title>Hasil Data Diri</title>
</head>

<body>
    <h2>Data Diri Anda</h2>

    <!-- Pengambilan data dari file tugas.php  -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $pekerjaan = $_POST["pekerjaan"];
        $hobby = $_POST["hobby"];

        echo "<table border='1' cellpadding='10'>
                <tr>
                    <th>Nama</th>
                    <th>Pekerjaan</th>
                    <th>Hobby</th>
                </tr>
                <tr>
                    <td>$nama</td>
                    <td>$pekerjaan</td>
                    <td>$hobby</td>
                </tr>
              </table>";
    }
    ?>
</body>

</html>