<?php
include_once 'top.php';
include_once 'menu.php';
?>
<div>
    <div class="container-fluid px-4">
        <h1>Selamat datang Di halaman admin</h1>

        <?php
        // membuat logika sederhana untuk mengarhkan url ke file
        // yang mempunyai extension .php
        $url = !isset($_GET['url']) ? 'dashboard' : $_GET['url'];
        if ($url == 'dashboard') {
            include_once 'dashboard.php';
        } elseif ($url == 'about') {
            include_once 'about.php';
        } elseif ($url == 'contact') {
            include_once 'contact.php';
        } elseif ($url == 'data') {
            include_once 'data.php';
        } else if (!empty($url)) {
            include_once '' . $url . '.php';
        } else {
            'dashboard.php';
        }
        ?>
    </div>
</div>
<?php
include_once 'bottom.php';
?>