<?php

$a1 = ['nama' => 'Candra Setiawan', 'NIM' => '0111111', 'nilai' => 100,];
$a2 = ['nama' => 'Fadel Kurniawan', 'NIM' => '0111112', 'nilai' => 85,];
$a3 = ['nama' => 'Faiz Pahlevi', 'NIM' => '0111113', 'nilai' => 78,];
$a4 = ['nama' => 'Konisa Caputra', 'NIM' => '0111114', 'nilai' => 76,];
$a5 = ['nama' => 'Thoria Zaqi', 'NIM' => '0111115', 'nilai' => 86,];
$a6 = ['nama' => 'Reza Ramadhana', 'NIM' => '0111116', 'nilai' => 50,];
$a7 = ['nama' => 'Agiru Gilbert', 'NIM' => '0111117', 'nilai' => 20,];
$a8 = ['nama' => 'Rere Restana', 'NIM' => '0111118', 'nilai' => 30,];
$a9 = ['nama' => 'Ivory Sutisna', 'NIM' => '0111119', 'nilai' => 70,];
$a10 = ['nama' => 'Atma Rahmada', 'NIM' => '01111110', 'nilai' => 65,];

$ar_mahasiswa = [$a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8,$a9,$a10];

// Deklarasikan Nama Nama Judul Table Header Menggunakan Looping Array
$ar_judul = ['No', 'Nama Mahasiswa', 'NIM', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];

$jumlah_nilai = array_column($ar_mahasiswa, 'nilai');
$nilai_tertinggi = max($jumlah_nilai);
$nilai_terendah = min($jumlah_nilai);
$jumlah_mahasiswa = count($ar_mahasiswa);
$keseluruhan_mahasiswa = array_sum($jumlah_nilai);
$nilai_rata2 = $keseluruhan_mahasiswa / $jumlah_mahasiswa;

$keterangan = [
    'Nilai Tertinggi' => $nilai_tertinggi,
    'Nilai Terrendah' => $nilai_terendah,
    'Nilai Rata Rata' => $nilai_rata2,
    'Jumlah Mahasiswa' => $jumlah_mahasiswa,
    'Jumlah Keseluruhan Nilai' => $keseluruhan_mahasiswa,
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buah Buahan</title>
</head>
<body>
    <h2 align='center'>Daftar Nilai Mahasiswa</h2>
    <table border=1 cellspacing='1' cellpadding='10' width="70%" style="margin: auto; text-align: center;">
        <thead>
            <tr>
                <?php
                    foreach ($ar_judul as $judul) {
                ?>
                    <th bgcolor="#EEEEEE"><?= $judul ?></th>
                <?php
                    }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
                $no = 1;
                foreach ($ar_mahasiswa as $mahasiswa) {
                    $ket = ($mahasiswa['nilai'] >= 65) ? 'Lulus' : 'Gagal';
                    
                    if ($mahasiswa['nilai'] >= 85 && $mahasiswa['nilai'] <= 100) $grade = 'A';
                    else if ($mahasiswa['nilai'] >= 75 && $mahasiswa['nilai'] <= 85) $grade = 'B';
                    else if ($mahasiswa['nilai'] >= 65 && $mahasiswa['nilai'] <= 75) $grade = 'C';
                    else if ($mahasiswa['nilai'] >= 50 && $mahasiswa['nilai'] <= 65) $grade = 'D';
                    else if ($mahasiswa['nilai'] <= 50) $grade = 'E';
                    else $grade = '';
                    
                    switch($grade){
                        case 'A' : $predikat = 'Memuaskan'; break;
                        case 'B' : $predikat = 'Bagus'; break;
                        case 'C' : $predikat = 'Cukup'; break;
                        case 'D' : $predikat = 'Kurang'; break;
                        case 'E' : $predikat = 'Buruk'; break;
                        default : $predikat = '';
                    }
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $mahasiswa['nama']; ?></td>
                    <td><?= $mahasiswa['NIM']; ?></td>
                    <td><?= $mahasiswa['nilai']; ?></td>
                    <td><?= $ket ?></td>
                    <td><?= $grade; ?></td>
                    <td><?= $predikat; ?></td>
                </tr>
            <?php
                }
            ?>
        </tbody>
        <tfoot bgcolor="#EEEEEE">
            <?php
                foreach ($keterangan as $ket => $hasil) {
            ?>
            <tr>
                <td colspan="3"  style="text-align: right;"><?= $ket ?></td>
                <td colspan="5"><?= $hasil ?></td>
            </tr>
            <?php
                }
            ?>
        </tfoot>
    </table>
</body>
</html>