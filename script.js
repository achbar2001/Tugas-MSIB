$(document).ready(function () {
    // Inisialisasi konten default saat halaman dimuat
    showData("profile");

    // Event listener untuk perubahan pilihan judul
    $("#judulSelect").on("change", function () {
        var selectedJudul = $(this).val();
        showData(selectedJudul);
    });

    // Fungsi untuk menampilkan data sesuai dengan judul yang dipilih
    function showData(judul) {
        var dataContainer = $("#dataContainer");
        dataContainer.empty(); // Menghapus konten sebelumnya

        if (judul === "profile") {
            // Tampilkan profil pribadi
            dataContainer.append("<h2>Achbar Wahyudhi</h2>");
            dataContainer.append("<p>Ini adalah profil pribadi Achbar Wahyudhi.</p>");
        } else if (judul === "moto_hidup") {
            // Tampilkan moto hidup dan alasan
            dataContainer.append("<h2>Moto Hidup</h2>");
            dataContainer.append("<p>Moto hidup aku adalah: 'Tak Sepenting Selambat Apa Kamu Berjalan <b>Selama Anda Tidak Berhenti</b>.'</p>");
            dataContainer.append("<p>Alasannya adalah Karena saya tau saya bukanlah orang yang bisa langsung paham mengenai hal-hal / materi yang baru maka dari itu saya tetap akan terus berusaha untuk bisa memahami itu semua walapun lambat dari yang lain.</p>");
        } else if (judul === "keahlian") {
            // Tampilkan keahlian dan pengalaman
            dataContainer.append("<h2>Keahlian Saya</h2>");
            dataContainer.append("<p>Saya mempunyai keahlian dalam Front End sebuah Website, Microsoft Office, Ui/Ux, Desain Poster dan video</p>");
        } else {
            // Judul tidak valid
            dataContainer.append("<p>Judul tidak valid.</p>");
        }
    }
});
