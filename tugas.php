<!DOCTYPE html>
<html>

<head>
    <title>Form Data Diri</title>
</head>

<body>
    <h2>Form Data Diri</h2>

    <!-- form -->
    <form method="POST" action="proses.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama"><br><br>
        <label for="pekerjaan">Pekerjaan:</label>
        <select id="pekerjaan" name="pekerjaan">
            <option value="Editor Foto">Editor Foto</option>
            <option value="Editor Video">Editor Video</option>
            <option value="Front End Developer">Front End Developer</option>
            <option value="Back End Developer">Back End Developer</option>
            <option value="Data Analyst">Data Analyst</option>
            <option value="Designer UI/UX">Designer UI/UX</option>
            <option value="Adminstrator Basis Data">Adminstrator Basis Data</option>
            <option value="Ahli Cloud Computing">Ahli Cloud Computing</option>
            <option value="Arsitek Basis Data">Arsitek Basis Data</option>
            <option value="Teknisi Dukungan IT">Teknisi Dukungan IT</option>
        </select><br><br>

        <label>Hobby:</label><br>
        <input type="radio" id="hobby1" name="hobby" value="Sepak Bola">
        <label for="hobby1">Sepak Bola</label><br>
        <input type="radio" id="hobby2" name="hobby" value="Voly">
        <label for="hobby2">Voly</label><br>
        <input type="radio" id="hobby3" name="hobby" value="Badminton">
        <label for="hobby3">Badminton</label><br>
        <input type="radio" id="hobby4" name="hobby" value="Basket">
        <label for="hobby4">Basket</label><br>
        <input type="radio" id="hobby5" name="hobby" value="Lari">
        <label for="hobby5">Lari</label><br>
        <input type="radio" id="hobby6" name="hobby" value="Catur">
        <label for="hobby6">Catur</label><br>
        <input type="radio" id="hobby7" name="hobby" value="Renang">
        <label for="hobby7">Renang</label><br>
        <input type="radio" id="hobby8" name="hobby" value="Tenis">
        <label for="hobby8">Tenis</label><br>
        <input type="radio" id="hobby9" name="hobby" value="Diving">
        <label for="hobby9">Diving</label><br>
        <input type="radio" id="hobby10" name="hobby" value="Golf">
        <label for="hobby10">Golf</label><br>

        <br>
        <input type="submit" name="simpan" value="Simpan">
    </form>
    <!-- end form -->
</body>

</html>