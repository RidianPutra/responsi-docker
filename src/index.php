<?php

$mysqli = new mysqli("db", "root", "example", "responsi");

echo "<h1>Yo! Wuzzup! Ridian Putra was here! Thank u!</h1><br><hr>";
echo "<h3>Ini merupakan hasil pengerjaan responsi mata kuliah Teknologi Cloud model ke-3</h3><hr><br>";
echo "Berikut contoh data yang diambil dari database : <br><br>";

$sql = "INSERT INTO mahasiswa (kampus, nama, nim, prodi, kelas, matkul, dosen) VALUES ('STMIK AKAKOM Yogyakarta', 'Ridian Putra', '195410061', 'Teknik Informatika', 'TI-2', 'Teknologi Cloud', 'M. Agung Nugroho, S.Kom., M.Kom.')";
$hasil = $mysqli->query($sql);

$sql = "SELECT * FROM mahasiswa";

if ($hasil = $mysqli->query($sql)) {
    while ($data = $hasil->fetch_object()) {
        $mahasiswa[] = $data;
    }
}

foreach ($mahasiswa as $mhs) {
    echo "Kampus : ".$mhs->kampus."<br>";
    echo "Nama : ".$mhs->nama."<br>";
    echo "NIM : ".$mhs->nim."<br>";
    echo "Prodi : ".$mhs->prodi."<br>";
    echo "Kelas : ".$mhs->kelas."<br>";
    echo "Mata Kuliah : ".$mhs->matkul."<br>";
    echo "Dosen Pengampu : ".$mhs->dosen."<br>";
    echo "<br>";
}

?>