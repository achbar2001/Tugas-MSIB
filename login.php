<!DOCTYPE html>
<html>

<head>
    <title>Form Login</title>
</head>

<body>
    <h2>Form Login</h2>
    <form method="post" action="login.php">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>

        <input type="submit" name="submit" value="Login">
    </form>

    <?php
    // Fungsi untuk mengecek login
    function cekLogin($username, $password)
    {
        // Ganti username dan password sesuai dengan yang diinginkan
        $adminUsername = "admin";
        $adminPassword = "mimin";

        if ($username === $adminUsername && $password === $adminPassword) {
            // Jika username dan password benar, arahkan ke halaman admin.php
            header("Location: admin.php");
            exit();
        } else {
            echo "<br><b>Login gagal. Silakan coba lagi!!</b>";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Tangkap data dari formulir
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Panggil fungsi cekLogin
        cekLogin($username, $password);
    }
    ?>

</body>

</html>