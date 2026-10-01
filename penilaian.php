<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Penilaian Siswa</title>
</head>
<body>
    <?php
    // Menyimpan data siswa dan nilai.
    $namaSiswa = "Lannn";
    $kelas = "XII RPL 3";
    $nilaiTugas = 85;
    $nilaiUTS = 80;
    $nilaiUAS = 90;

    // Menghitung nilai akhir dengan bobot tugas 30%, UTS 30%, dan UAS 40%.
    $nilaiAkhir = ($nilaiTugas * 0.3) + ($nilaiUTS * 0.3) + ($nilaiUAS * 0.4);

    // Menentukan predikat berdasarkan rentang nilai akhir.
    if ($nilaiAkhir >= 90 && $nilaiAkhir <= 100) {
        $predikat = "A";
    } elseif ($nilaiAkhir >= 80) {
        $predikat = "B";
    } elseif ($nilaiAkhir >= 75) {
        $predikat = "C";
    } elseif ($nilaiAkhir >= 60) {
        $predikat = "D";
    } else {
        $predikat = "E";
    }

    // Menentukan status kelulusan dengan batas minimal 75.
    if ($nilaiAkhir >= 75) {
        $status = "LULUS";
    } else {
        $status = "TIDAK LULUS";
    }

    // Menampilkan data dan hasil penilaian dalam struktur HTML.
    echo "<h2>Hasil Penilaian Siswa</h2>";
    echo "<p>Nama: $namaSiswa</p>";
    echo "<p>Kelas: $kelas</p>";
    echo "<hr>";
    echo "<p>Nilai Tugas: $nilaiTugas</p>";
    echo "<p>Nilai UTS: $nilaiUTS</p>";
    echo "<p>Nilai UAS: $nilaiUAS</p>";
    echo "<hr>";
    echo "<p>Nilai Akhir: $nilaiAkhir</p>";
    echo "<p>Predikat: $predikat</p>";
    echo "<p>Status: $status</p>";
    ?>
</body>
</html>
